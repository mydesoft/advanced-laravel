<?php

namespace App\Providers;
use App\Billing\PaymentGateway;
use App\Http\View\Composers\ChannelComposer;
use Illuminate\Support\Facades\View;
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
       $this->app->singleton(PaymentGateway::class, function($app){
            return new PaymentGateway('EUR');
       });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
    }
}
