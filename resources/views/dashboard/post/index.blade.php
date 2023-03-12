@extends('layouts.admin-navigation')

@section('route-name')
    Post
@endsection

@section('main')
    <div class="flex justify-between items-center mb-16">
        {{-- container name --}}
        <div class="addButton bg-blue-900 py-[9px] px-[23px] rounded-[5px] text-sm cursor-pointer">Add Post</div>
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
            <p class="text-sm mb-8">{{ $post->excerpt }}</p>

            {{-- delete and edit --}}
            <div class="w-full flex justify-end">
                <div class="bg-blue-900 w-[100px] h-[35px] mr-5 text-sm flex justify-center items-center rounded-[5px]">
                    Edit
                </div>

                <div class="btnDeletePos bg-red-600 w-[100px] h-[35px] text-sm flex justify-center items-center rounded-[5px] cursor-pointer">
                    Hapus
                </div>
            </div>
        </div>
    @endforeach

    @include('partials.alert-add')

    @include('partials.alert-delete')
@endsection

@section('add-js')
    <script src="{{ asset('js/add-js.js') }}"></script>
@endsection
@section('delete-js')
    <script src="{{ asset('js/delete-js.js') }}"></script>
@endsection