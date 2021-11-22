<template>
 <div>
  <!-- <friends-component />
  <messages-component/>
  <active-component /> -->
  <input type="text" v-model="text" @keyup.enter="send">
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
   listen(){
    Echo.channel('chat')
    .listen('message',()=>{
      this.messages.push(this.text);
      this.text='';
    });
   }, 
   send(){
     axios.post('/chat/test',{to:1,text:this.text,from:1});
     then(res=>{
       console.log('message sent successfully');
     });
   }
  }
}
</script>