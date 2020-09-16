@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>ChicagoPotters Admin Panel</h1>
    <ul class="list-group">
        <li class="list-group-item">Artists</li>
        <li class="list-group-item">Add Piece</li>
        <li class="list-group-item">Add Category</li>
        <li class="list-group-item"><a href="{{route('album.index')}}">Albums</a></li>
    </ul>     
</div>
@endsection