@component('emails.components.message', ['template' => $emailtemplate])
<h1>Dear {{ $user['first_name'] }},</h1>
<p>Thank you for creating an account with us.</p>

Thanks,<br>
WritersBay App Support Team
@endcomponent