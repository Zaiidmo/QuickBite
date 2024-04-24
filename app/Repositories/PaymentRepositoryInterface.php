<?php 

namespace App\Repositories;

interface PaymentRepositoryInterface
{
    public function createRecord($user, $order);
}