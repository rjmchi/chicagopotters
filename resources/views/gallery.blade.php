@extends('layouts.app')

@section('content')
<div class="container">
    <header class="gallery">
        <span>
            @php 
                $url = '/';
                $url .= isset($artist)?$artist->id.'/':'0/';
                $url .= isset($category)?$category->slug.'/':'0/';
            @endphp
            <label for="allitems">Show all items:</label>                
            <input type="radio" name="sold" id="allitems" value="yes" onclick="changeSold('{{$url}}', 'all')" {{$show=='all'?'checked':''}}>
            <label for="soldonly">Show only items for sale:</label>
            <input type="radio" name="sold" id="soldonly" value="no" onclick="changeSold('{{$url}}', 'forsale')" {{$show=='all'?'':'checked'}} >
        </span>
        <span class="title">
            @if (isset($artist))
                <h2>{{$artist->first_name}} {{$artist->middle_name}} {{$artist->last_name}}</h2>
            @endif
            @if (isset($category))
                <h2>{{$category->name}}</h2>
            @endif
        </span>
        <span><p>Click on thumbnail to order or to view larger image</p></span>
    </header>
   <div class="gallery">
        @foreach ($pieces as $idx => $piece)
            <div class="piece {{($idx%2==0)?'left':'right'}}">
                <a href="/showpiece/{{$piece->id}}">
                <img src="{{asset('./storage/images'.$piece->artist->id.'/'.$piece->pictures->where('main_image', true)->first()->file_name)}}" alt="{{$piece->title}}" width="250"></a>
                <div class="info">
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
            </div>       
       @endforeach
       {{$pieces->links()}}
   </div>
</div>
<script>
    function changeSold(url, sold) {
        window.location.href="/gallery"+url+sold;    
    }
</script>
@endsection
