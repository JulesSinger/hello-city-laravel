@extends('base')

@section('content')
    <h1>Hello from France !</h1>

    <p>It's currently {{ date('h:i A') }}.</p>
    @section('about-link')
        <a href="{{ route('about') }}">About Us</a>
    @endsection
@endsection
        
     