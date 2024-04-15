<?php

namespace App\Repositories;

use App\Models\Restaurant;

class RestaurantRepository implements RestaurantRepositoryInterface
{
    public static function all()
    {
        return Restaurant::all();
    }

    public static function findByOwner($id) {
        return Restaurant::where('user_id', $id)->get();
    }

    public function create($data)
    {
        return Restaurant::create($data);
    }

    public function kill(Restaurant $restaurant)
    {
        
        return $restaurant->delete();
    }
}
