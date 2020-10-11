@extends('layouts.app')

@section('content')
<div class="container">
   @foreach ($categories as $category)
   <div class="category">
      <div>
         <a href="/gallery/0/{{$category->slug}}">{{$category->name}}</a>
      </div>
      <div>
         <ul>
            @foreach ($artists as $artist)
               <li><a href="/gallery/{{$artist->id}}/{{$category->slug}}">{{$artist->first_name}}</a></li>
            @endforeach
         </ul>
      </div>
   </div>
   @endforeach
</div>
@endsection
