<template>
 <div>
  <input type="text" v-model="name" class="">
  <input type="email" v-mode="email" class="">
  <textarea v-model="body" class="">

  </textarea>
 </div>
</template>
<script>
export default {
 props:['productId'],
 data(){
  return{
   name:'',
   email:'',
   body:'',
   comments:[]
  }
 },
 mounted(){
   this.getComments()
 },
 methods:{
   getComments(){
    axios.get('/product/comments',{productId:this.productId})
    .then(res=>{
     this.comments=res.data.comments;
    });
   }
 }
}
</script>