@extends('layouts.app')

@section('content')
<div class="container">
   @foreach ($artists as $artist)
      <div class="artist">
         <h3>{{$artist->first_name}} {{$artist->middle_name}} {{$artist->last_name}}</h3>
         <img src="{{asset('storage/images/'.$artist->picture)}}" alt="{{$artist->first_name}} {{$artist->middle_name}} {{$artist->last_name}}" class="portrait" width="200">
         <div class="links">
            <a href="/gallery/{{$artist->id}}/0/forsale" class="btn btn-secondary">See all work for sale</a>
            <a href="/gallery/{{$artist->id}}/0/all" class="btn btn-secondary">See all work (including sold pieces)</a>
         </div>
         <ul class="categories">
            @foreach ($categories as $category)
            <li><a href="/gallery/{{$artist->id}}/{{$category->slug}}/forsale">{{$category->name}}</a></li>
            @endforeach
         </ul>
      </div>
   @endforeach
</div>
@endsection
