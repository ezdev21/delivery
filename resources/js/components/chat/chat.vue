<template>
 <div>
  <!-- <friends-component />
  <messages-component />
  <active-component /> -->
  <input type="text" v-model="text" @keyup.enter="send" required placeholder="text" class="p-2 rounded-xl w-96 border-2 border-gray-300">
  <p class="text-2xl text-blue-500">{{messages.length}}</p>
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
   this.joined();
   this.listenWhisper();
  },
  watch:{
    text(){
      Echo.private('chat')
      .whisper('typing');
    }
  },
  methods:{
    joined(){
     Echo.join('chat')
     .here((users)=>{
      console.log('users joined');
     })
     .joining((user)=>{
      console.log('some one joined the room');
     })
     .leaving((user)=>{
       console.log('some one left the room');
     });
    },
    listenWhisper(){
     Echo.private('chat')
     .listenForWhisper('typing',(e)=>{
       this.$toaster.success('typing');
       console.log('typing');
     });
    },
   listen(){
    Echo.private('chat')
    .listen('.message',(message)=>{
      this.messages.unshift(message);
    });
   },
   send(){
     axios.post('/chat/test',{to:1,text:this.text,from:1}).
     then(res=>{
      this.text="";
     });
   }
  }
}
</script>