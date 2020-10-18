@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Categories</h1>

    <ul class="list-group">
    @foreach ($categories as $category)
        <li class="list-group-item list-group-item-primary">{{$category->name}} <a class="btn-sm btn-primary" href="{{route('category.edit', $category->id)}}">Edit</a></li>
    @endforeach
    </ul>

    <form method = "post" action = "{{route('category.store')}}">
        @csrf
    	<label for="name">
            Category Name:
            <input class="form-control" name="name">
        </label>
        @error('name') 
            <small class="text-danger">{{$message}}</small>      
        @enderror        
        <input class="btn btn-primary" type="submit" value="Submit" name="submit">
    </form>
            
</div>
@endsection