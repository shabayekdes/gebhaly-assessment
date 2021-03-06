<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\EloquentRepositoryInterface; 
use App\Repository\Eloquent\BaseRepository; 
use App\Repository\ServiceRepositoryInterface; 
use App\Repository\Eloquent\ServiceRepository; 
use App\Repository\OrderRepositoryInterface; 
use App\Repository\Eloquent\OrderRepository; 


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
