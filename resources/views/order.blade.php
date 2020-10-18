@extends('layouts.app')

@section('content')
<div class="container">
    <div class="order">
        <h1>Order Form</h1>
        <div class="order-instructions">
        <p>Currently we only accept payment by check or money order.</p>
            <ul>
                <li>Upon receiving your order, we will e-mail you with a confirmation which will include the total amount due including packaging, shipping and applicable sales tax.</li>
                <li>All orders will be shipped UPS Ground unless otherwise specified in the special instructions. For local buyers, arrangements can be made for items to be picked up.</li>
                <li>If paying by check, your order will be held for up to 10 day while your check clears.</li>
                <li>If paying by money order, your order will be shipped as soon as we receive payment.</li>
        </ul>
        </div>
        <h2>Item: {{$piece->id}}  Price: $ {{$piece->price}} + packaging and shipping (about $5 - $10)</h2>
        <h3>Artist: {{$piece->artist->first_name}} {{$piece->artist->middle_name}} {{$piece->artist->last_name}}</h3>
        <p><span class="required"> * Required Fields</span></p>
        <form class="order" action="/order" method="post">
            @csrf
            <input type="hidden" name="pieceid" value="{{$piece->id}}">
            <div class="form-group">
                <label for="firstname"><span class="required">*</span> First Name:</label>
                <input type="text" class="input-control" name="firstname" value="{{old('firstname')}}" >
                <label for="lastname"><span class="required">*</span>Last Name:</label>                            
                <input type="text" class="input-control" name="lastname" value="{{old('lastname')}}" >
                @error('firstname')
                    <span class="error"> {{$message}} </span>
                @enderror
                @error('lastname')                 
                    <span class="error">{{$message}}</span>
                @enderror                
            </div>

            <div class="form-group">
                <label for="address">Address: </label>
                <input type="text" class="input-control" name="address" value="{{old('address')}}" >
            </div>
            <div class="form-group">
                <label for="city">City: </label>
                <input type="text" class="input-control" name="city" value="{{old('city')}}" >
                <label for="state">State: </label>
                <input type="text" class="input-control" name="state" value="{{old('state')}}" >
                <label for="zip">Zip: </label>
                <input type="text" class="input-control" name="zip" value="{{old('zip')}}" >
            </div>
            <div class="form-group">
                <label for="phone"><span class="required">*</span>Phone: </label>
                <input type="text" class="input-control" name="phone" value="{{old('phone')}}" >
                @error('phone')
                    <span class="error">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email"><span class="required">*</span>e-Mail: </label>
                <input type="email" class="input-control" name="email" value="{{old('email')}}" >
                @error('email')
                    <span class="error">{{$message}}</span>
                @enderror                
            </div>
            <div class="form-group">
                <label for="specialinstructions">Special Instructions: </label>
                <textarea class="input-control" name="specialinstructions">{{old('specialinstructions')}} </textarea>
            </div>                      
            <button type="submit" class="btn btn-primary">Submit Order</button>
        </form>
    </div>

@endsection