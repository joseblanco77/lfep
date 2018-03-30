<?php

namespace Modules\Cajaverde\Providers;

use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        /*View::composer(
            'profile', 'App\Http\ViewComposers\ProfileComposer'
        );*/
        
        // Using Closure based composers...
        View::composer('*', function ($view) {
            $loggeduser = getCajaverdeLoggedUser();
            //pass the data to the view
            $view->with( 'loggeduser', $loggeduser );
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //dd('register', Auth::guard('cajaverde')->user());
        //
    }
}