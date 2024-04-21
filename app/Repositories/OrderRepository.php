<?php

namespace App\Repositories;

use App\Models\Meal;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{
    public function all()
    {
        return Order::all();
    }
    public function create($data)
    {
        // Calculate the total price
        $totalPrice = 0;
        foreach ($data['prices'] as $price) {
            // Extract the float value from the string and add it to the total price
            $totalPrice += (float) filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        }

        // Create the order
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'total_price' => $totalPrice,
            // Add other fields as needed
        ]);

        // Attach meals to the order
        foreach ($data['names'] as $mealName) {
            // Find the meal by name
            $meal = Meal::where('name', $mealName)->first();
            if ($meal) {
                $order->meals()->attach($meal->id);
            }
        }

        return $order;
    }
}
