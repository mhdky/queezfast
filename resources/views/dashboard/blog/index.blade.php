@extends('layouts.admin-navigation')

@section('route-name')
    Blog
@endsection

@section('main')
    <div class="flex justify-between items-center mb-16">
        {{-- container name --}}
        <div class="bg-blue-900 py-[9px] px-[23px] rounded-[5px] text-sm">Add Blog</div>
    </div>

    <div class="w-[800px] flex flex-col">
        @foreach ($blogs as $blog)
            <div class="flex justify-between items-center mb-5 pb-3 border-b border-[#7B7B7B]">
                <a href="{{ $blog->url }}" class="text-sm hover:underline">{{ $blog->name }}</a>
            
                <div class="fle">
                    <i class="fas fa-edit text-sm mr-3"></i>
                    <i class="btnDeletePos fas fa-trash-alt text-sm cursor-pointer"></i>
                </div>
            </div>
        @endforeach
    </div>

    @include('partials.alert-delete')
@endsection

@section('delete-js')
    <script src="{{ asset('js/delete-js.js') }}"></script>
@endsection