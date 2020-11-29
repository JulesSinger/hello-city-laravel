@extends('layouts.base')

@section('content')

    <img class="rounded h-32 mt-12" src={{ asset("/images/logo.png") }} alt="Logo">

    <h1 class="text-5xl font-semibold mt-5 text-indigo-600">Hello from France !</h1>

    <p class="text-lg text-red-800 mt-4">It's currently {{ date('h:i A') }}.</p>
    
@endsection
        
     