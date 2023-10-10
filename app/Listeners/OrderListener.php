<?php

namespace App\Listeners;

use App\Events\OrderCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Events\Dispatcher;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class OrderListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }


    public function handleOrderCreatedEmail(OrderCreatedEvent $event): void
    {
        Log::debug("handleOrderCreatedEmail");
    }

    public function handleOrderCreatedLogging(OrderCreatedEvent $event): void
    {
        Log::debug("handleOrderCreatedLogging");
    }

    /**
     * Register the listeners for the subscriber.
     */
    public function subscribe(Dispatcher $events): void
    {
        $events->listen(
            OrderCreatedEvent::class,
            [OrderListener::class, 'handleOrderCreatedEmail']
        );

        $events->listen(
            OrderCreatedEvent::class,
            [OrderListener::class, 'handleOrderCreatedLogging']
        );
    }
}
