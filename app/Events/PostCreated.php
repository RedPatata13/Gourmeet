<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Recipe;

class PostCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $recipe;
    // use \App\Models\Recipe;
    /**
     * Create a new event instance.
     */
    public function __construct(Recipe $recipe)
    {
        
        $this->recipe = $recipe;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): Channel
    {
        // return [
        //     new PrivateChannel('channel-name'),
        // ];
        // echo "";
        echo "<script>console.log('PHP variable:',');</script>";
        return new Channel('recipes');
    }

    public function broadcastAs(): string {
        return 'recipe.created';
    }
}
