<?php

namespace App\Listeners;

use App\Events\CreatedOrder;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendOrderCreatedEmail
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
        echo '<br><br>'.$event->orderId.'<br><br>SendOrderCreatedEmail<br>';
    }
}
