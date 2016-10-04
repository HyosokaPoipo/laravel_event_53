<?php

namespace App\Listeners;

use App\Events\ActionDone;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

//ini_set('max_execution_time',180);
set_time_limit(180);

class ADListener
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
     * @param  ActionDone  $event
     * @return void
     */
    public function handle(ActionDone $event)
    {
        log::info("executing listener...");
        sleep(120);
        log::info("Action Done Listener...");
    }
}
