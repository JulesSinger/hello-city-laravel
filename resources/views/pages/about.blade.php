@extends('base')

@section('doc-title', 'About Us | ' . config('app.name'))

@section('content')

    <img src={{ asset("/images/france.png") }} alt="France">

    <p>Built with &hearts; by Jules Singer</p>

    <a href="/">Back to the home page</a>
  
@endsection
       
