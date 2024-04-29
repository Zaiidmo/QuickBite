<?php

namespace App\Repositories;

use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantRepository implements RestaurantRepositoryInterface
{
    public static function all()
    {
        return Restaurant::all();
    }

    public static function findByOwner($id) {
        return Restaurant::where('user_id', $id)->get();
    }

    public function findById($id)
    {
        return Restaurant::find($id);
    }

    public function create($data)
    {
        return Restaurant::create($data);
    }

    public function kill(Restaurant $restaurant)
    {

        return $restaurant->delete();
    }

    public function edit(Restaurant $restaurant, $data)
    {
        return $restaurant->update($data);
    }

    public function menu($id) {
        return MealRepository::findByRestaurant($id);
    }

    public static function topRestaurants()
{
    return DB::table('restaurants')
        ->join('users', 'restaurants.user_id', '=', 'users.id')
        ->join('meals', 'restaurants.id', '=', 'meals.restaurant_id')
        ->join('order_meal', 'meals.id', '=', 'order_meal.meal_id')
        ->join('orders', 'order_meal.order_id', '=', 'orders.id')
        ->select(
            'restaurants.name as restaurant_name',
            'users.username as owner_name',
            DB::raw('count(DISTINCT meals.id) as total_meals'),
            DB::raw('count(DISTINCT orders.id) as total_orders'),
        )
        ->groupBy('restaurants.id', 'users.id', 'users.username', 'restaurants.name')
        ->orderByDesc('total_orders')
        ->limit(5)
        ->get();
}

    


}
