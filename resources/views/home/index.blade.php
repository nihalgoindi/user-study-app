@extends('layouts.app')

@section('title')
<div class="w-4/5 m-auto text-center">
    <div class="pb-10 py-15 border-b border-gray-200">
        <h1 class="text-6xl font-bold">
            Welcome to our Connected Scatterplots User Study
        </h1>
    </div>
</div>

@endsection
@section('content')
    <div class=" w-4/5 mx-auto pt-5 py-15 border-bo text-center">
        <a href={{ route('login') }} class="uppercase bg-blue-500 hover:bg-blue-600 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Log In
        </a>
        <a href={{ route('register') }} class="uppercase bg-blue-500 hover:bg-blue-600 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Register
        </a> 
    </div>
@endsection