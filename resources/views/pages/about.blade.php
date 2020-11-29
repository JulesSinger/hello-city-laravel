@extends('layouts.base', ['title' => 'About Us'])

@section('content')

    <img class="my-12 h-40" src={{ asset("/images/france.png") }} alt="France">

    <h2 class="text-gray-700 text-xl">Built with <span class="text-pink-500">&hearts;</span>  by Jules Singer</h2>

    <a class="mt-6 text-indigo-500 hover:text-indigo-700 underline" href="/">Back to the home page</a>
  
@endsection
       
