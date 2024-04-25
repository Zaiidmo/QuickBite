@component('mail::message')

<img src="{{ asset('assets/images/logo.png') }}" alt="Company Logo">
# Dear valued customer,

Thank you for your recent purchase! Your order has been successfully placed and paid.

Please find order's details attached.

@component('mail::button', ['url' => route('profile')])
Track Order
@endcomponent

If you have any questions or need further assistance, feel free to contact us.

Best regards,<br>
{{ config('app.name') }}
@endcomponent
