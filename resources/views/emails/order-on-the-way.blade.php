@component('mail::message')

# Dear valued customer,

We're reaching out to informe you that your order has been shipped and is on its way to you. You can track your order by clicking the button below.

@component('mail::button', ['url' => route('profile')])
Track Order
@endcomponent

If you have any questions or need further assistance, feel free to contact us.

Best regards,<br>
{{ config('app.name') }}
@endcomponent
