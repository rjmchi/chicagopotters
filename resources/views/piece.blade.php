@extends('layouts.app')

@section('content')
<div class="container">
    <div class="piece">
        <h2>{{$piece->title}}</h2>
                <img src="{{asset('./storage/images'.$piece->artist->id.'/'.$piece->pictures->where('main_image', true)->first()->file_name)}}" alt="{{$piece->title}}">
        <div class="piece-info">
            <p>{{$piece->description}}</p>
            <p>{{$piece->dimensions}}</p>
            <p>{{$piece->decoration}}</p>
            <p>Artist: {{$piece->artist->first_name}} {{$piece->artist->middle_name}} {{$piece->artist->last_name}}</p>
            <p>Item Number: {{$piece->id}}</p>
            @if($piece->order_id)
                <p>Price: Sold</p>
            @elseif ($piece->price && $piece->price > 0)
                <p>Price: ${{$piece->price}}</p>
            @else 
                <p>Not For Sale</p>
            @endif
            <p><a href="/order/id">Order this item</a></p>
        </div>
    </div>
    @if($artist) 
        <p>Artist: {{$artist->first_name}}</p>
    @endif

    @if($category)
        <p>Category: {{$category->name}}</p>
    @endif
    
    @if($show)
        <p>{{$show}}</p>
        <p>Piece: {{$piece->description}}</p>
    @endif

@endsection