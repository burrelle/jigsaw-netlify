@extends('_layouts.master')

@section('body')
<div class="border-t-8 border-teal-darker">
<div class="container mx-auto px-8 py-8 lg:px-32 lg:py-20 pb-20">
<div id="back">
    <a href="/"><svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 10a10 10 0 1 1 20 0 10 10 0 0 1-20 0zm2 0a8 8 0 1 0 16 0 8 8 0 0 0-16 0zm8-2h5v4h-5v3l-5-5 5-5v3z"/></svg></a>
</div>
<article class="mt-8 text-black">
        <header>
            <aside class="text-grey-dark">
                <p class="">
                    {{ date('F j, Y', $page->date) }}
                </p>
            </aside>
            <h1 class="mt-2">{{ $page->title }}</h1>
        </header>
        <div id="markdown" class="mt-8 text-grey-darker">
            @yield('post')
        </div>
</article>
</div>
</div>
