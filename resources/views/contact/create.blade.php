@extends('layouts.app')

@section('title', 'Contact us')

@section('content')

    <div class="container">
        <h1>Contact Us</h1>

    @if(! session()->has('message') )
    <form action="/contact" method="POST">
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        {{ $errors->first('name')}} 
        </div>

        <div class="form-group" method="POST">
        <label for="email">Email: </label>
        <input type="text" name="email" value="{{ old('email') }}" class="form-control">
        {{ $errors->first('email')}}
        </div>

        <div class="form-group" method="POST">
        <label for="email">Message</label>
        <textarea name="message" id="message" cols="30" rows="9" class="form-control">{{ old('message') }}</textarea>
        {{ $errors->first('message')}}
        </div>

        @csrf

        <button type="submit" class="btn btn-primary">Send Message</button>

    </form>
    @endif

    </div>
    
@endsection