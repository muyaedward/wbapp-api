@component('emails.components.message', ['template' => $emailtemplate])
<h1>Dear {{ $user['first_name'] }},</h1>
<p>Thank you for your payment. We have received your payment.</p>
Thanks,<br>
WritersBay App Support Team
@endcomponent