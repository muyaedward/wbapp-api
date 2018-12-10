@component('emails.components.message', ['template' => $emailtemplate])
<h1>Dear {{ $user['first_name'] }},</h1>
<p>Order was placed successfully. Here are the details of your order.</p>

Thanks,<br>
WritersBay App Support Team
@endcomponent