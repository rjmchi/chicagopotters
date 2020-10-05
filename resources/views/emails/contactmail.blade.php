@component('mail::message')
    # Message from ChicagoPotters.com
    From: {{$name}}
    EMail: {{$email}}
    Message:
    {{$message}}
@endcomponent
