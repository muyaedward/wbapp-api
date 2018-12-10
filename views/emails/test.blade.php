@component('emails.components.message', ['template' => $emailtemplate])
<h1>Dear {{ $name }},</h1>

<p>You have been assigned to complete order <a href="#"><b>#34243</b></a>.</p>
<p>Please login and review the instructions and confirm that you are working.</p>
<p>Please login and review the instructions and confirm that you are working. Please login and review the instructions and confirm that you are working.</p>
<p>If you have any questions or requests, contact the Support or Editorial team.</p>

@component('emails.components.button', ['url' => '#'])
Confirm to complete order# 23434
@endcomponent

Thanks,<br>
WritersBay App Support Team
@endcomponent