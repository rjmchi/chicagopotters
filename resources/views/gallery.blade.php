@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Gallery</h1>
   @if (isset($artist))
   <h2>{{$artist->first_name}} {{$artist->middle_name}} {{$artist->last_name}}</h2>
   @endif
   @if (isset($category))
   <h2>{{$category->name}}</h2>
   @endif   
   <div class="gallery">
        @foreach ($pieces as $piece)
            <div class="piece">
                <a href="/piece/{{$piece->id}}">
                <img src="{{asset('./storage/images'.$piece->artist->id.'/'.$piece->pictures->where('main_image', true)->first()->file_name)}}" alt="{{$piece->title}}" width="150">
                <div>
                    <p>{{$piece->title}}</p>
                    <p>{{$piece->dimensions}}</p>
                    <p>{{$piece->decoration}}</p>
                    <p>{{($piece->price > 0) ? $piece->price : "not for sale"}}</p>
                    <p>Item: {{$piece->id}}</p>
                </div>
            </a>
            </div>       
       @endforeach
   </div>
</div>
@endsection
