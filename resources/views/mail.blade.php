@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Send Mail to {{$artist->first_name}} {{$artist->last_name}}</h1>
   <p>Please send {{$artist->first_name}} your comments or questions by filling out the form below.</p>

   <form action="/mail" method="post">
       @csrf
       <input type="hidden" name="artist" value="{{$artist->id}}">
       <div class="form-group">
       <label for="email">Your e-mail address:</label>
       <input type="text" name="email" class="form-control" value="{{old('email')}}">
        @if ($errors->has('email'))
            <div class="alert alert-danger">{{$errors->first('email')}}</div>
        @endif          
       </div>
       <div class="form-group">
       <label for="name">Your name:</label>
       <input type="text" name="name" class="form-control" value="{{old('name')}}">
       </div>
       <div class="form-group">
       <label for="message">Your question or comment:</label>
       <textarea class="form-control" name="message">{{old('message')}}</textarea>
        @if ($errors->has('message'))
            <div class="alert alert-danger">{{$errors->first('message')}}</div>
        @endif           
       </div>       
       <button class="btn btn-primary" type="submit">Send Message</button>
   </form>
</div>
@endsection
