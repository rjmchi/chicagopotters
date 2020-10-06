@extends('layouts.admin')

@section('content')
<div class="container event">
    <h1>Events</h1>
    @foreach ($events as $event)
        <div class="card">
            <div class="card-header">{{$event->title}}
                <span>
                    <form action="{{route('event.destroy', $event->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn-sm btn-danger">Delete</button>
                    </form>
                </span>
            </div>
            <div class="card-body">{{$event->description}}</div>
        </div>
    @endforeach
<div class="card">
    <div class="card-header"><h2>New Event</h2></div>
    <div class="card-body">
    <form action="{{route('event.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title"  value="{{old('title')}}" class="form-control">
            @error('title') 
            <small class="text-danger">{{$message}}</small>      
        @enderror
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description"  class="form-control">{{old('title')}} </textarea>
            @error('description') 
            <small class="text-danger">{{$message}}</small>      
        @enderror
        </div> 
        <div class="form-group">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
    </div>      
</div>
@endsection