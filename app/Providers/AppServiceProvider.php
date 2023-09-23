<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

      //  $setting = Setting::pluck('value', 'key')->toArray();

     //   View::composer('*', function($view) use ($setting){
     //       $view->with('settings', $setting);
     //   });
    }
}
