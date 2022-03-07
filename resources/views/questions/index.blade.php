@extends('layouts.app')

@section('title')
<div class="w-4/5 m-auto text-center">
    <div class="pb-10 py-15 border-b border-gray-200">
        <h1 class="text-6xl font-bold">
            Questions
        </h1>
    </div>
</div>
@endsection

@section('content')


@foreach ($questions as $question)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto pt-5 py-15 border-b border-gray-200">
        <div class="pt-8 pb-10 pl-20">
            <img src="{{ asset('post_images/' . $question->image_path) }}" width="500" height="500" alt="">
        </div>

        <div>
            <!-- Insert the upward, downward, no trend options -->
        </div>

        <div class="bg-grey-lighter pt-15">
            <a href="{{ route('posts.index') }}"> <!-- change this to save the data (i.e. submit the data and then head to the home page -->
                <button type="button" class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-lg 
                font-extrabold py-3 px-11 rounded-3xl">
                    Save Progress
                </button>
            </a>
            <button type="submit" class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-lg 
            font-extrabold py-3 px-5 rounded-3xl">
                Submit Response
            </button>
    </div>

@endforeach


@endsection
