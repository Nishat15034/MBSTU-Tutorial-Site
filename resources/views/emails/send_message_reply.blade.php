@component('mail::message')
#Notice

<?php echo $message->message; ?>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
