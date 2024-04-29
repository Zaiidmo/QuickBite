<?php

namespace App\Repositories;


interface OrderRepositoryInterface
{
    public function all();

    public function create($data);

    public static function ordersHistory($id);

    public static function placedOrders($id);

    public function delete($id);

    public static function ordersToDeliver();


    public static function myDeliveries($id);

    public function takeOnTheWay($user, $order);

    public static function mostOrdersByUser();

    public static function lastOrders();

}