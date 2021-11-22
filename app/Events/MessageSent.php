<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $message;
    public $sentFromId;
    public $sentToId;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($from,$message,$to)
    {
      $this->message=$message;
      $this->sentFromId=$from;
      $this->sentToId=$to;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
      return new privateChannel('chat');
    }
    public function broadcastAs()
    {
      return 'message';  
    }
}
