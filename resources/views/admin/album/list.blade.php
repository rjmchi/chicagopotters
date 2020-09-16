@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Albums</h1> 
    @foreach($albums as $album) 
    <div class="card album">
        <h3 class="card-title"><a href="{{route('album.show',$album->id)}}">{{$album->name}}</a></h3>
        <div class="card-subtitle">{{$album->description}}</div>
        <div class="card-body">
            <a href="{{route('album.photo.create', ['album'=>$album->id])}}" class="btn btn-primary btn-sm">Add Photos</a>

            <form action="{{route('album.destroy', $album->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    
    <a class="btn btn-primary" href="{{route('album.create')}}">Create Album</a>
</div>
@endsection