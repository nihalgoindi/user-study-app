@extends('layouts.app')

@section('title')
<div class="w-4/5 mx-auto text-center">
    <div class="pb-10 py-15 border-b border-gray-200">
        <h1 class="text-6xl font-bold">
            Blog Posts
        </h1>
    </div>
</div>
@endsection

@section('content')
    @foreach ($questions as $question)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto pt-5 py-15 border-b border-gray-200">
        <div class="pt-8 pb-10 pl-20">
            <img src="{{ asset('question_images/' . $question->image_path) }}" width="500" height="500" alt="">
        </div>

    </div>

@endforeach
@endsection