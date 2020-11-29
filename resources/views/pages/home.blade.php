@extends('base')

@section('content')

    <img src={{asset("/images/logo.png")}} alt="Logo">

    <h1>Hello from France !</h1>

    <p>It's currently {{ date('h:i A') }}.</p>
    
@endsection
        
     