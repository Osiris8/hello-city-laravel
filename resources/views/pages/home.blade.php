@extends('app')

@section('title', 'Hello City')

@section('content')
<img src="/images/papillon11.jpg" alt="">

        <h1>Hello from Quebec!</h1>

        <p>It's currently {{ date('h:i A')}}</p>

 @endsection
