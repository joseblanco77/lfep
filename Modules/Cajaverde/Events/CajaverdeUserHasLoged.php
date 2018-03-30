<?php

namespace Modules\Cajaverde\Events;

use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\SerializesModels;

class CajaverdeUserHasLoged
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

    public function handle(Login $event)
    {
        // Update user last login date/time
        $event->user->update(['logged_at' => Carbon::now()]);
    }    
}
