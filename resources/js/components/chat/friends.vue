<template>
    <div>
     <button v-for="friend in friends" @click="messages" class="flex">
      <img src="" alt="" class="w-5 h-5 rounded-full">
      <p class="text-xl">{{friend.name}}</p>
     </button>
    </div>
</template>
<script>
export default {
  props:{

  },
  data(){
    return{
    friends:[],  
    }   
  },
  mounted(){

  },
  methods:{
      
  }
}
</script>