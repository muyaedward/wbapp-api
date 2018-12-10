@component('emails.components.message', ['template' => $emailtemplate])
<h1>Dear {{ $user['first_name'] }},</h1>
<p>You are receiving this email because we received a password reset request for your account.</p>
<p>Below is the reset code</p>
<h3><strong>{{ $token }}</strong></h3>
<p>If you did not request a password reset, no further action is required.</p>

Thanks,<br>
WritersBay App Support Team
@endcomponent