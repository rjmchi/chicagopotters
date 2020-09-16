@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="album">
        <form action="{{route('album.update', $album->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-group">
                <input style="font-size:20px" class="form-control" type="text" name="name" value="{{$album->name}}">
            </div>
            <div class="input-group">
                <textarea style="font-size:20px" class="form-control" name="description">{{$album->description}}</textarea>
            </div>
            <div class="input-group">
                <button class="btn btn-info" type="submit">Update</button>
            </div>
        </form>
        <p><a href="{{route('album.photo.create', ['album'=>$album->id])}}" class="btn btn-primary">Add Photos</a></p>
        <div class="gallery">
            @foreach($album->photos as $photo)
                <div class="card">
                    <a href="{{route('album.photo.show', ['album'=>$album->id,'photo'=>$photo->id])}}">
                    <img src="{{asset('storage/photos/'.$photo->album->slug.'/'.$photo->filename)}}" class="card-img-top" alt="{{$photo->caption}}">
                    </a>
                    <div class="card-body">
                        <form action="{{route('album.photo.update', ['album'=>$album->id, 'photo'=>$photo->id])}}" method="post">
                            @csrf
                            @method('PUT')
                            <input name="caption" type="text" class="form-control" value="{{$photo->caption}}">
                            <button class="btn btn-info" type="submit">Update</button>
                        </form>
                        <form action="{{route('album.photo.destroy',['album'=>$photo->album_id, 'photo'=>$photo->id])}}", method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete Image</button>
                        </form>
                    </div>
                </div>            
            @endforeach
        </div>
    </div>
</div>
@endsection