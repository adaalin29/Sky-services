@component('mail::message')
# Mesaj noi

@component('mail::panel')
<div style="width:100%; text-align:center; font-size:30px; font-height:bold;">
Aveti o rezervare noua:
</div>

Nume: {{$message['name']}}<br>
Number: {{$message['phone']}}<br>
Email: {{$message['email']}}<br>
Serviciu : {{$message['service']}}<br>
Data : {{$message['date']}}<br>
Ora de plecare : {{$message['hour_departure']}}<br>
Ora de sosire : {{$message['hour_arival']}}<br>
Perioada : {{$message['duration']}}<br>
Nr. de persoane : {{$message['persons']}}<br>
Plecarea de la : {{$message['departure']}}<br>
Message : {{$message['message']}}<br>
Servicii alese : {{$message['options']}}<br>



@endcomponent

Multumim,<br>
Wings $ dreams.
@endcomponent
