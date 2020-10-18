@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Category</h1>

    <form method = "post" action = "{{route('category.update', $category->id)}}">
        @csrf
        @method('put')
    	<label for="name">
            Category Name:
            <input class="form-control" name="name" value="{{$category->name}}">
        </label>
        @error('name') 
            <small class="text-danger">{{$message}}</small>      
        @enderror        
        <button class="btn btn-primary" type="submit" name="submit">Update</button>
    </form>
            
</div>
@endsection