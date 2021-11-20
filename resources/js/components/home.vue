<template>
<div>
 <div class="flex w-full">
   <div class="w-2/3 relative m-2">
    <button class="absolute top-1/2 left-0">
     <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
     </svg>
    </button>
    <img class="w-full" src="storage/logo/delivery.jpg">
    <button class="absolute top-1/2 right-0">
     <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
     </svg>
    </button>
   </div>
   <div class="w-1/3 h-full">
    <img class="w-full h-full m-1" src="/storage/logo/delivery.jpg">
    <img class="w-full h-full m-1" src="/storage/logo/delivery.jpg">
   </div>
  </div>
  <div class="relative">
    <h1 class="capitalize text-2xl font-medium">all categories</h1>
    <button class="absolute top-1/2 right-0">
     <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
     </svg>
    </button>
    <div class="flex">
      <div class="relative m-2">
        <img src="storage/logo/delivery.jpg" class="w-48 hover:shadow-xl hover:rounded-tl-3xl hover:rounded-br-3xl">
        <h1 class="absolute bottom-5 right-5 text-first text-2xl font-medium">category</h1>
      </div>
      <div class="relative m-2">
        <img src="storage/logo/delivery.jpg" class="w-36 hover:shadow-xl hover:rounded-tl-3xl hover:rounded-br-3xl">
        <h1 class="absolute bottom-5 right-5 text-first text-2xl font-medium">category</h1>
      </div>
      <div class="relative m-2">
        <img src="storage/logo/delivery.jpg" class="w-36 hover:shadow-xl hover:rounded-tl-3xl hover:rounded-br-3xl">
        <h1 class="absolute bottom-5 right-5 text-first text-2xl font-medium">category</h1>
      </div>
    </div>
    <button class="absolute top-1/2 left-0">
     <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
     </svg>
    </button>
  </div>
  <div class="flex justify-evenly border-2 border-gray-400 my-2 mx-4 py-4">
    <div>
     <svg xmlns="http://www.w3.org/2000/svg" class="text-first h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
     <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
     </svg>
      <h1 class="text-2xl font-medium capitalize">free delivery</h1>
      <p class="text-xl text-gray-600">for all orders over $1000</p>
    </div>
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="text-first h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <h1 class="text-2xl font-medium capitalize">90 days return</h1>
      <p class="text-xl text-gray-600">if goods have problems</p>
    </div>
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="text-first h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
      <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
      <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
      </svg>
      <h1 class="text-2xl font-medium capitalize">secure payment</h1>
      <p class="text-xl text-gray-600">100% secure payment</p>
    </div>
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="text-first h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
      </svg>
      <h1 class="text-2xl font-medium capitalize">24/7 support</h1>
      <p class="text-xl text-gray-600">dedicated support</p>
    </div>
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="text-first h-12 w-12" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z" clip-rule="evenodd" />
      <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z" />
      </svg>
      <h1 class="text-2xl font-medium capitalize">gift service</h1>
      <p class="text-xl text-gray-600">support gift service</p>
    </div>
  </div>
  <div>
    <div v-for="category in categories" :key="category.id" class="flex">
      <h1 class="text-gray-700 font-semibold text-2xl">{{category.name}}</h1>
      <div v-for="x in 2" :key="x" class="flex">
        <div class="m-2 hover:shadow-xl">
         <img src="/storage/logo/delivery.jpg" class="w-48">
          <div>
           <p>{{product.name}}</p>
           <p>${{product.price}}</p>
           <p>{{product.vendor.name}}</p>
          </div>
         <div class="flex">
          <addtocart-component />
          <showproduct-component />
          <likeproduct-component />
         </div>
        </div>
      </div>
    </div>
  </div>
 </div>  
</template>
<script>
export default {
  props:{

  },
  data(){
   return{
    categories:[],
   }   
  },
  created(){
    this.getCategories();
  }, 
  methods:{
   getCategories(){
     axios.get('/category/index')
     .then(res=>{
       this.categories=res.data.categories;
     });
   }
  }  
}
</script>