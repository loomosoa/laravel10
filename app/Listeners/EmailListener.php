<?php

namespace App\Listeners;

use App\Events\OrderCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class EmailListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderCreatedEvent $event): void
    {
        $order = $event->order;

        Log::debug("Email listener: Order item: ".$order->item.", "
            ."Order price: ".$order->price);
    }

    public function handleOrderCreatedEmail($event): void
    {
        Log::debug("handleOrderCreatedEmail");
    }
}
