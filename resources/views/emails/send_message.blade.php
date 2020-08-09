@component('mail::message')
#Notice

{{$message->title}}
<?php echo $message->message; ?>

@component('mail::button', ['url' => 'http://localhost:8000/confirm-unsubscribe/'.$email->email])
Unsuscribe
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
