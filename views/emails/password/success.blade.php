@component('emails.components.message', ['template' => $emailtemplate])
<h1>Dear {{ $user['first_name'] }},</h1>
<p>Your password has been reset successfully.</p>
<p>Below is the reset code</p>

Thanks,<br>
WritersBay App Support Team
@endcomponent