<?php

namespace App\Listeners;

use App\Events\EventChat;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EventChat  $event
     * @return void
     */
    public function handle(EventChat $event)
    {
        //
    }
}
