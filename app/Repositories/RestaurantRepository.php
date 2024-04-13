<?php

namespace App\Repositories;

use App\Models\Restaurant;

class RestaurantRepository implements RestaurantRepositoryInterface
{
    public static function all()
    {
        return Restaurant::all();
    }
}
