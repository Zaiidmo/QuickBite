<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use App\Repositories\PaymentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mollie\Laravel\Facades\Mollie;

class PaymentController extends Controller
{
    protected $paymentRepository;
    public function __construct(PaymentRepositoryInterface $paymentRepository)
    {
        $this->middleware('auth');
        $this->paymentRepository = $paymentRepository;
    }
    /**
     * Prepare the payment operation
     */

    public function preparePayment(Request $request, Order $order)
    {
        // Retrieve authenticated user
        $user = $request->user();

        // Create a payment request to Mollie
        $payment = Mollie::api()->payments->create([
            'amount' => [
                'currency' => 'USD',
                'value' => $order->total_price . '.00',
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

        // Redirect customer to Mollie checkout page
        return redirect()->away($payment->getCheckoutUrl());
    }

    /**
     * In Case Of Success !!!
     */
    public function success(Request $request)
    {
        $paymentId = session('payment_id');

        // Retrieve payment information from Mollie
        $payment = Mollie::api()->payments->get($paymentId);

        // Check if payment is successful
        if ($payment->isPaid()) {
            // Retrieve associated payment record from database
            $userPayment = Payment::where('reference', $paymentId)->first();

            // Update payment status to 'paid'
            $userPayment->update(['status' => 'paid']);

            $orderId = $payment->metadata->order_id;
            $order = Order::find($orderId);
            $user = auth()->user();

            // Mail::to($user->email)->send(new TicketEmail($pdf));
            // Clear payment ID from session
            session()->forget('payment_id');
            return redirect()->route('profile')->with('success', 'Your payment is successful!');
        }

        // If payment is not successful, redirect to failure page
        return redirect()->route('failure')->with('error', 'Payment was not successful.');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
