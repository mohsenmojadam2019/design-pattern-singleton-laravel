<?php

namespace App\Providers;

use App\Http\Controllers\ServiceContainerSingleton\MellatPaymentGateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //bind only gives a value to the class object once
//        $this->app->bind(MellatPaymentGateway::class, function () {
//            return new MellatPaymentGateway('USD');
//        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //In singleton, we can set the value of the class object as much as we want

        $this->app->singleton(MellatPaymentGateway::class, function () {
            return new MellatPaymentGateway('USD');
        });
    }
}
