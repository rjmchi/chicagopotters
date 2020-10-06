@extends('layouts.app')

@section('content')
<div class="container">
   <h1>ChicagoPotters Events</h1>
   @if (sizeof($events) < 1)
      <h2>We Currently have no upcoming events</h2>
   @else
      @foreach ($events as $event)
         <h2>{{$event->title}}</h2>
         <p>{{$event->description}}</p>
      @endforeach
   @endif
   <h2>Past Events</h2>
   <ul>
   @foreach ($albums as $album)
      <li><a href="/album/{{$album->slug}}">{{$album->name}}</a></li>
   @endforeach
   </ul>
</div>
@endsection
