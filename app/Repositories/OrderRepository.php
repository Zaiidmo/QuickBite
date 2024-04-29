<?php

namespace App\Repositories;

use App\Models\Meal;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

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

    public static function ordersHistory($id)
    {
        return Order::where('user_id', $id)
            ->whereNotIn('status', ['placed'])
            ->paginate(5);
    }

    public static function placedOrders($id)
    {
        return Order::where('user_id', $id)->where('status', 'placed')->paginate(5);
    }

    public static function ordersToDeliver()
    {
        return Order::where('status', 'placed')->paginate(5);
    }

    public static function myDeliveries($id)
    {
        return Order::where('delivery_id', $id)->paginate(5);
    }

    public function delete($id)
    {
        return Order::where('id', $id)->update(['status' => 'canceled']);
    }

    public function takeOnTheWay($user, $order)
    {
        $order->status = 'OnTheWay';
        $order->delivery_id = $user->id;
        $order->save();
    }

    public static function mostOrdersByUser()
    {
        return DB::table('orders')->join('users', 'orders.user_id', '=', 'users.id')->select('users.username', 'users.email', DB::raw('count(*) as orders_count'))->groupBy('orders.user_id', 'users.username', 'users.email')->orderByDesc('orders_count')->limit(5)->get();
    }

    public static function lastOrders()
    {
        return Order::orderByDesc('created_at')->limit(5)->get();
    }
}
