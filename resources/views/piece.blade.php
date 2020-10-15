@extends('layouts.app')

@section('content')
<div class="container">
    <div class="piece">
        <h2>{{$piece->title}}</h2>
                <img id="piece" src="{{asset('./storage/images'.$piece->artist->id.'/'.$piece->pictures->where('main_image', true)->first()->file_name)}}" alt="{{$piece->title}}">
        <div class="piece-info">
            <p>{{$piece->description}}</p>
            <p>{{$piece->dimensions}}</p>
            <p>{{$piece->decoration}}</p>
            <p>Artist: {{$piece->artist->first_name}} {{$piece->artist->middle_name}} {{$piece->artist->last_name}}</p>
            <p>Item Number: {{$piece->id}}</p>
            @if($piece->sold)
                <p>Price: Sold</p>
            @elseif ($piece->price && $piece->price > 0)
                <p>Price: ${{$piece->price}}</p>
                <p><a class="btn btn-primary" href="/order/{{$piece->id}}">Order this item</a></p>
            @else 
                <p>Not For Sale</p>
            @endif
        </div>
    </div>

    <p>Click on Thumbnail Below to Change Views</p>
    <div class="thumbs">
        @foreach ($piece->pictures as $picture)
        <a href="javascript:ChangeView('{{asset('./storage/images'.$piece->artist->id.'/'.$picture->file_name)}}')">
            <img src="{{asset('./storage/images'.$piece->artist->id.'/'.$picture->file_name)}}" alt="{{$picture->file_name}}" width="150">
        </a>
        @endforeach
    </div>
    <footer class="piece">
        <a href="/gallery/{{$artist}}/{{$category}}/{{$show}}">Back</a>     
    </footer>


    <script type="text/javascript">
    <!--
        function ChangeView(picfile)
        {
	        document.images.piece.src = picfile;
        }
        // -->
    </script>

@endsection