@extends('app')

@section('title', 'About Us I '.config('app.name'))

@section('content')

<img src="{{ asset('/images/papillon11.jpg') }}" alt="">

    <p> By With &hearts; TEACHERS DU NET</p>

    <p><a href=" {{ route('home') }}">Revenir à la page d'acceuil</a></p>

      
@endsection
