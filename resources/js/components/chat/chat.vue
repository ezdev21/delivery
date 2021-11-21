<template>
 <div>
  <friends-component />
  <messages-component/>
  <active-component />
 </div>
</template>
<script>
import { message } from "./message.vue";
import { friends } from "./friends.vue";
export default {
  components: {
    messages,
    friends
  },
  props:['userId'],
  data(){
   return{
    text:'',
    message:{},
    messages:[]
   }
  },
  mounted(){
   
  },
  methods:{
   
  }
}
</script>