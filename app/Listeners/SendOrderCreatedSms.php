<?php

namespace App\Listeners;

use App\Events\CreatedOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendOrderCreatedSms
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
     * @param  \App\Events\CreatedOrder  $event
     * @return void
     */
    public function handle(CreatedOrder $event)
    {
        echo '<br><br>SendOrderCreatedSms<br>';
    }
}
