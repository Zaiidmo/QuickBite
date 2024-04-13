<?php

namespace App\Providers;

use App\Repositories\RestaurantRepository;
use App\Repositories\RestaurantRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RestaurantRepositoryInterface::class, RestaurantRepository::class);
    }
}