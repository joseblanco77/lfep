<?php

namespace Modules\Paginas\Providers;

use Illuminate\Support\ServiceProvider;
use \Modules\Paginas\Entities\Paginas;
use \Modules\Paginas\Observers\PaginasObserver;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginas::observe(PaginasObserver::class);
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