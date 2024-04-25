<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Meal;
use App\Models\Order;
use App\Repositories\OrderRepositoryInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $order = $request->validated();
        $newOrder = $this->orderRepository->create($order);
        return redirect()->route('payment', $newOrder)->with('success', 'Order placed, please proceed to payment.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order_id = $order->id;
        $this->orderRepository->delete($order_id);

        return redirect()->route('profile')->with('success', 'Order deleted successfully');
    }

    public function takeOnTheWay(Order $order)
    {
        $order->status = 'OnTheWay';
        $order->save();

        return redirect()->route('profile')->with('success', 'Order status updated to on the way');
    }
}
