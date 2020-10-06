@extends('layouts.app')

@section('content')
<div class="container">
   <h1>{{$album->name}}</h1>
   <p>{{$album->descrition}}</p>
   @foreach ($album->photos as $photo)
   <div class="photo">
        <img src="{{asset('storage/photos/'.$album->slug.'/'.$photo->filename)}}" alt="{{$photo->caption}}">
        <p class="caption">{{$photo->caption}}</p>
   </div>

   @endforeach
</div>
@endsection