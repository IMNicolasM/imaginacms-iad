<?php

namespace Modules\Iad\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Iad\Events\Handlers\HandleAdStatuses;
use Modules\Iad\Events\Handlers\ProcessOrder;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
    ];

    public function boot()
    {
        //Listen order was processed event
        if(is_module_enabled('Icommerce')) {
            Event::listen(
                "Modules\\Icommerce\\Events\\OrderWasProcessed",
                [ProcessOrder::class, 'handle']
            );
        }
        if(is_module_enabled('Iplan')) {
            Event::listen(
                "Modules\\Iplan\\Events\\SubscriptionHasStarted",
                [HandleAdStatuses::class, 'handle']
            );
            Event::listen(
                "Modules\\Iplan\\Events\\SubscriptionHasFinished",
                [HandleAdStatuses::class, 'handle']
            );
        }
    }
}
