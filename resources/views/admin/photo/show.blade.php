@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="card">
                    <img src="{{asset('storage/photos/'.$photo->album->slug.'/'.$photo->filename)}}" class="card-img-top" alt="{{$photo->caption}}">
                    <div class="card-body">
                        <form action="{{route('album.photo.update', ['album'=>$photo->album_id, 'photo'=>$photo->id])}}" method="post">
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
    </div>
@endsection

