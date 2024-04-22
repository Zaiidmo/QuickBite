<?php 

namespace App\Repositories;

use App\Models\Payment;
use Mollie\Laravel\Facades\Mollie;

class PaymentRepository implements PaymentRepositoryInterface {
    public function createRecord($user, $order){
        // Create a payment request to Mollie
        $payment = Mollie::api()->payments->create([
            'amount' => [
                'currency' => 'USD', 
                'value' => $order->total_priec . '.00', 
            ],
            'description' => 'Ticket for Order No : ' . $order->id,
            'redirectUrl' => route('payment.success'), 
            'metadata' => [
                'order_id' => $order->id,
            ],
        ]);

        // Associate the payment with the user
        $user->payments()->create([
            'reference' => $payment->id,
            'status' => 'pending',
            'amount' => $order->total_price,
            'user_id' => $user->id,
            'order_id' => $order->id,
        ]);

        // Store payment ID in session for later retrieval
        session(['payment_id' => $payment->id]);

        return redirect($payment->getCheckoutUrl(), 303);

    }
}