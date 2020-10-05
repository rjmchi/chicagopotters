@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Contact Us</h1>
   <h3>Click on a name to send an e-mail message</h3>
   <ul class="contact-list">
      @foreach ($artists as $artist)
         <li><a href="/mail/{{$artist->id}}">{{$artist->first_name}} {{$artist->last_name}}</a></li>
      @endforeach
   </ul>
</div>
@endsection
