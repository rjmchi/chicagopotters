@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>ChicagoPotters Admin Panel</h1>
    <ul class="list-group">
        <li class="list-group-item"><a href="{{route('artist.index')}}">Artists</a></li>
        <li class="list-group-item"><a href="{{route('piece.create')}}">Add A Piece</a></li>
        <li class="list-group-item"><a href="{{route('category.index')}}">Categories</a></li>
        <li class="list-group-item"><a href="{{route('album.index')}}">Albums</a></li>
        <li class="list-group-item"><a href="{{route('event.index')}}">Events</a></li>
    </ul>     
</div>
@endsection
