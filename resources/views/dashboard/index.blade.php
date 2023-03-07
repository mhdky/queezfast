@extends('layouts.admin-navigation')

@section('route-name')
    Dashboard
@endsection

@section('main')
    <div class="flex justify-between items-center mb-16">
        {{-- container name --}}
        <div class="bg-blue-900 py-[9px] px-[23px] rounded-[5px] text-sm">Post</div>

        {{-- see more --}}
        <a href="#" class="text-sm hover:underline">See More</a>
    </div>

    @foreach ($posts as $post)
        <div class="w-[800px] mb-8 pb-8 border-b border-[#7B7B7B]">
            {{-- author --}}
            <h1 class="text-[#7B7B7B] text-[13px] font-bold mb-1">{{ Str::title($post->author) }}</h1>
            {{-- date --}}
            <p class="text-[#7B7B7B] text-[13px] mb-3">{{ $post->date }}</p>
            {{-- title --}}
            <a href="{{ $post->slug }}" class="text-lg font-bold mb-3 inline-block hover:underline">{{ Str::title($post->title) }}</a>
            {{-- category --}}
            <a href="/category/{{ $post->category->slug }}" class="{{ $post->category->color }} w-max text-[12px] mb-3 block hover:underline">{{ $post->category->name }}</a>
            {{-- excerpt --}}
            <p class="text-sm">{{ $post->excerpt }}</p>
        </div>
    @endforeach
@endsection