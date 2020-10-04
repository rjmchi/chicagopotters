@extends('layouts.admin')

@section('content')
<div class="container">
        <h2>Add a Piece</h2>
    <form action="{{route('piece.store')}}", method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{old('title')}}">
            @if ($errors->has('title'))
                <div class="alert alert-danger">{{$errors->first('title')}}</div>
            @endif            
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" class="form-control" value="{{old('description')}}">
            @if ($errors->has('description'))
                <div class="alert alert-danger">{{$errors->first('description')}}</div>
            @endif                 
        </div>        
        <div class="form-group">
            <label for="dimensions">Dimensions:</label>
            <input type="text" name="dimensions" class="form-control" value="{{old("dimensions")}}">
            @if ($errors->has('dimensions'))
                <div class="alert alert-danger">{{$errors->first('dimensions')}}</div>
            @endif                 
        </div>
        <div class="form-group">
            <label for="categories">Categories</label>
            <select name="categories[]" multiple class="form-control">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @if ($errors->has('categories'))
                <div class="alert alert-danger">{{$errors->first('categories')}}</div>
            @endif              
        </div>  
        <div class="row"> 
            <div class="form-group col-4">
                <label for="artist">Artist:</label>
                <select name="artist" class="form-control">
                    @foreach($artists as $artist)
                        <option value="{{$artist->id}}">{{$artist->first_name}} {{$artist->last_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-4">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control" value="{{old('price')}}">
            </div>  
            <div class="form-group col-4">
                <label for="weight">Weight:</label>
                <input type="text" name="weight" class="form-control" value="{{old('weight')}}">
            </div>         
        </div>    
        <div class="form-group">
            <label for="pictures">Select Pictures:</label>
            <input type="file" name="pictures[]" class="form-control" multiple>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection