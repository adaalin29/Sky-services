@component('mail::message')
# New Message

@component('mail::panel')
<div style="width:100%; text-align:center; font-size:30px; font-height:bold;">
Aveti un mesaj nou:
</div>

Nume: {{$message['name']}}<br>
Number: {{$message['phone']}}<br>
Email: {{$message['email']}}<br>
Message : {{$message['message']}}<br>


@endcomponent

Multumim,<br>
Sky services.
@endcomponent
