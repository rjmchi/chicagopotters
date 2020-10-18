@component('mail::message')
# Order from ChicagoPotters

Name: {{$order->customer->first_name}} {{$order->customer->last_name}}

@component('mail::button', ['url'=>'http://localhost:8000/showpiece/'.$order->piece_id])
Piece {{$order->piece_id}}
@endcomponent

Address: 
{{$order->customer->address}}

{{$order->customer->city}}, {{$order->customer->state}}  {{$order->customer->zip}}

Phone: {{$order->customer->phone}}

e-mail: {{$order->customer->email}}

Special Instruction: {{$order->special_instructions}}


@endcomponent
