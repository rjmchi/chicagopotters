@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Artist</h1> 
    <form action="{{route('artist.update', $artist->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-row">
            <div class="col col-md-5">
		    <label for="first_name">First Name: </label>
                <input type="text" name="first_name" value="{{old('first_name', $artist->first_name)}}" class="form-control">
        </div>
            <div class="col col-md-2">
		    <label for="middle_name">Middle Name: </label>
                <input type="text" name="middle_name" value="{{old('middle_name', $artist->middle_name)}}" class="form-control">
        </div>        
        <div class="col col-md-5">
            <label for="last_name">Last Name: </label>
                <input type="text" name="last_name"value="{{old('last_name', $artist->last_name)}}"  class="form-control">
        </div>
        </div>
        <div class="form-row">
            <div class="col col-md-3">
            <label for="phone">Phone:</label>
                <input type="text" name="phone" value="{{old('phone', $artist->phone)}}" class="form-control">
            </div>
        </div>
		<div class="form-row">
            <div class="col col-md-11">
			<label for="address">Address:</label>
                <input type="text" name="address" value="{{old('address', $artist->address)}}" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col col-md-6">
    		<label for="city">City: </label>
                <input type="text" name="city" value="{{old('city', $artist->city)}}" class="form-control">
            </div> 
            <div class="col col-md-2">
            <label for="state">State: </label>
                <input type="text" name="state" value="{{old('state', $artist->state)}}" class="form-control">
            </div> 
            <div class="col col-md-3">
            <label for="zip">Zip: </label>
                <input type="text" name="zip" value="{{old('zip', $artist->zip)}}" class="form-control">
            </div>
		</div>
		<div class="form-group">
			<label for="email">e-mail: </label>
                <input type="text" name="email" value="{{old('email', $artist->user->email)}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
        </div>        

		<div class="form-group">
			<label for="picture">Picture: </label>
                <div class="cusftom-file">
        <input type="file" name="picture">

                    {{-- <input type="file" class="custom-file-input" id="picture" name="picture"> --}}
                    {{-- <label class="custom-file-label" for="picture">Choose file</label> --}}
                </div>                
        </div>

		<div class="form-group">
            <button type="submit" class="btn btn-primary">Update Artist</button>
        </div>

    </form>
</div>
@endsection