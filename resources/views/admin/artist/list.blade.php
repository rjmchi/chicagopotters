@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Artists</h1> 
    <a class="btn btn-primary mb-3" href="{{route('artist.create')}}">New Artist</a>
    @foreach ($artists as $artist)
        <div class="artist">
                <img class="portrait" src="{{asset('storage/images/'.$artist->picture)}}">
                <span>
                    <p>{{$artist->first_name}} {{$artist->middle_name}} {{$artist->last_name}}</p>
                    <p>{{$artist->user->email}}</p>
                    <p>{{$artist->phone}}</p>
                    <p>{{$artist->address}}</p>
                    <p>{{$artist->city}}, {{$artist->state}}  {{$artist->zip}}</p>
                </span>
                <span class="actions">
                    <a href="{{route('artist.edit', $artist->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('artist.destroy',$artist->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </span>
        </div>
    @endforeach
</div>
@endsection