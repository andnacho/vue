<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(['viewComposer', 'viewComposer2'],
            'App\Http\View\Composers\ProfileComposerTwo'
        );

        View::composer(['viewComposer', 'viewComposer2'],
            'App\Http\View\Composers\ProfileComposer'
        );


        // Using Closure based composers...
//        View::composer('viewComposer', function ($view) {
//            //
//            $view->with('nuevo', 'Estamos agregando variables a esta vista');
//        });
    }
}
