<?php

namespace Modules\Cajaverde\Providers;

use Illuminate\Auth\Events\Login;
use Modules\Cajaverde\Events\CajaverdeUserHasLoged;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Login::class => [
            CajaverdeUserHasLoged::class,
        ],
    ];
}