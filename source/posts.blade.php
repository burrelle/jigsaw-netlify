@extends('_layouts.master')
@section('body')
<div class="border-t-8 border-teal-darker">
    <div class="container mx-auto px-8 py-8 lg:px-32 lg:py-20 pb-20">
        <div id="back">
            <a href="/"><svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M0 10a10 10 0 1 1 20 0 10 10 0 0 1-20 0zm2 0a8 8 0 1 0 16 0 8 8 0 0 0-16 0zm8-2h5v4h-5v3l-5-5 5-5v3z" /></svg></a>
        </div>
        <div id="posts">

            <h1 class="mt-12 text-black font-bold pb-2">All Posts</h1>
            <p class="mb-8" id="line-seperator"></p>
            <ul class="list-reset">
                @foreach ($posts->take(5) as $post)
                <li class="mb-4">
                    <p class="text-sm text-grey-dark pb-2">{{ date('F j, Y', $post->date) }}</p>
                    <a class="no-underline text-black flex items-center hover:italic" href="{{ $post->getPath() }}">{{
                        $post->title }}<svg class="fill-current ml-4 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z" /></svg></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</div>
