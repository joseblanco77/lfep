<?php

namespace Modules\Cajaverde\Providers;

use Illuminate\Support\ServiceProvider;
use \Modules\Cajaverde\Entities\CajaverdeUser;
use \Modules\Cajaverde\Observers\Usuarios\CajaverdeUserObserver;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        CajaverdeUser::observe(CajaverdeUserObserver::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}