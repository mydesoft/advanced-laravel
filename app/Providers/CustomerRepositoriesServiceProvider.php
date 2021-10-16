<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CustomerRepositoryInterface;
use App\Repositories\CustomerRepository;


class CustomerRepositoriesServiceProvider extends ServiceProvider
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
        $this->app->singleton(CustomerRepositoryInterface::class, CustomerRepository::class);
    }
}
