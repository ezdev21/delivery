<template>
 <div>
  <!-- <friends-component />
  <messages-component />
  <active-component /> -->
  <input type="text" v-model="text" @keyup.enter="send" required placeholder="text" class="p-2 rounded-xl w-96 border-2 border-gray-300">
  <p v-for="message in messages" class="text-xl text-green-500" :key="message">{{message}}</p>
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
  data(){
   return{
    text:'',
    messages:[]
   }
  },
  mounted(){
   this.listen();
  },
  methods:{
   listen(){
    Echo.channel('chat')
    .listen('message',()=>{
      this.messages.push(this.text);
      this.text='';
      console.log('listened successfully');
    });
   }, 
   send(){
     axios.post('/chat/test',{to:1,text:this.text,from:1}).
     then(res=>{
       console.log('message sent successfully');
     });
   }
  }
}
</script>