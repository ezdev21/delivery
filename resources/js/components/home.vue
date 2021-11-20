<template>
<div>
 <div class="h-96 flex w-full">
  <img class="w-1/2" src="storage/logo/delivery.jpg">
  <div class="w-1/2">
    <img class="" src="/storage/logo/delivery.jpg">
    <img class="" src="/storage/logo/delivery.jpg">
  </div>
  </div>
  <div>
    <h1 class="capitalize text-2xl font-medium">all categories</h1>
    <button></button>
    <div v-for="category in categories" :key="category.id" class="flex">
      <div class="relative">
        <img src="" class="w-36 h-32 hover:shadow-xl hover:rounded-tl-3xl hover:rounded-br-3xl">
        <h1 class="absolute bottom-5 right-5 text-white text-2xl font-medium"></h1>
      </div>
    </div>
    <button></button>
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