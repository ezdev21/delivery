<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
 <div id="app">
    <div>
        <form id="search-form" action="{{route('product.search')}}" class="hidden">
         <input type="text" id="searchQuery" name="searchQuery" required class="text-gray-700 h-4/5 my-auto w-1/2 rounded border-2 border-gray-500 text-xl py-1 px-3 mx-1">
         <select name="category" id="category" required class="my-auto bg-gray-700 text-xl text-white">
           <option value="all" selected>all</option>
            @isset($categories)
             @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>  
             @endforeach    
            @endisset 
           </select>    
        </form> 
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
           @csrf
        </form>  
        <navigation-component @auth user-id="{{Auth::user()->id}}"@endauth />  
      </div>      
  <main class="py-4">
    @yield('content')
  </main>
 </div>
</body>
</html>
