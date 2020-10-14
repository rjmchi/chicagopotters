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
        @foreach ($pieces as $idx => $piece)
            <div class="piece">
                <a href="/showpiece/{{$piece->id}}">
                <img src="{{asset('./storage/images'.$piece->artist->id.'/'.$piece->pictures->where('main_image', true)->first()->file_name)}}" alt="{{$piece->title}}" width="150">
                <div>
                    <p>{{$piece->title}}</p>
                    <p>{{$piece->dimensions}}</p>
                    <p>{{$piece->decoration}}</p>
                    @if($piece->sold)
                        <p>Sold</p>
                    @elseif ($piece->price > 0)
                        <p>${{$piece->price}}</p>
                    @else
                        <p>Not for sale</p>
                    @endif
                    <p>Item: {{$piece->id}}</p>
                </div>
            </a>
            </div>       
       @endforeach
   </div>
</div>
@endsection
