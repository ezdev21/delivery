<template>
 <div>
  <friends-component />
  <messages-component/>
  <active-component />
 </div>
</template>
<script>
import message from "./message.vue";
import friends from "./friends.vue";
export default {
  components: {
    message,
    friends
  },
  props:['userId'],
  data(){
   return{
    text:'',
    messages:[]
   }
  },
  mounted(){
   
  },
  methods:{
   
  }
}
</script>