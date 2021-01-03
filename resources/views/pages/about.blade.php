@extends('layouts/app', ['title' => 'About Us'])

@section('content')

<img src="{{ asset('/images/papillon11.jpg') }}" alt="" class="my-12 rounded-full shadow-md">

    <h2 class="text-gray-700"> By With <span class="text-pink-500">&hearts;</span> Osiris8</h2>

    <p class="mt-5">
        <a href=" {{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'acceuil

        </a>
    </p>

      
@endsection
