@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create Album</h1> 
<form action="{{route('album.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Album Name:</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{old('name')}}">
    <small id="nameHelp" class="form-text text-muted">Enter the name of the album.</small>
    @error('name')
      <small class="text-danger">{{$message}}</small>
    @enderror    
  </div>

  <div class="form-group">
    <label for="title">Album Description:</label>
    <input type="text" class="form-control" name="description" id="description" aria-describedby="descriptionHelp" value="{{old('description')}}">
    <small id="descriptionHelp" class="form-text text-muted">Enter a description of the album.</small>
  </div>  
  
  <button type="submit" class="btn btn-primary">Create Album</button>
</form>
</div>
@endsection