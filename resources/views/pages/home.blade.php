@extends('layouts/app') 

@section('content')
<img src="{{ asset('/images/paris.svg') }}" alt="" class="rounded-full  h-32 mt-12">

        <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Paris!</h1>

        <p class="text-lg text-gray-800">It's currently {{ date('h:i A')}}</p>

 @endsection
