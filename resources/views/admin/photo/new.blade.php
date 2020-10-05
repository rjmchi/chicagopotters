@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add Photos</h1> 
    <h3>Album &mdash; {{$album->name}}</h3>
    <form action="{{route('album.photo.store',$album->id)}}", method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="album_id" id="album_id" value="{{$album->id}}">
        <input type="hidden" name="album_slug" id="album_slug" value="{{$album->slug}}">
        <div class="form-group">
            <label for="caption">Caption:</label>
            <input type="text" name="caption" id="caption" class="form-control">
        </div>
        <input type="file" name="filename[]" multiple> 
        @error('filename') 
            <small class="text-danger">{{$message}}</small>      
        @enderror
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
@endsection