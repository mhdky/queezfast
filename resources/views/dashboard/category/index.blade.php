@extends('layouts.admin-navigation')

@section('route-name')
    <a href="/" class="hover:text-blue-600">Home</a>/Category
@endsection

@section('main')
    <div class="flex justify-between items-center mb-16">
        {{-- container name --}}
        <div class="addButton bg-blue-900 py-[9px] px-[23px] rounded-[5px] text-sm cursor-pointer">Add Category</div>
    </div>

    <div class="w-[800px] flex flex-col">
        @foreach ($categories as $category)
            <div class="flex justify-between items-center mb-5 pb-3 border-b border-[#7B7B7B]" data-category-id="{{ $category->id }}">
                <div class="flex flex-col">
                    <a href="category/{{ $category->slug }}" class="text-sm hover:underline">{{ Str::title($category->name) }}</a>
                    <p class="{{ $category->color }} text-[12px] mt-1">{{ $category->color }}</p>
                </div>
            
                <div class="flex">
                    <i class="editCategory fas fa-edit text-sm mr-3 cursor-pointer" data-id="{{ $category->id }}"></i>
                    <i class="btnDeletePos fas fa-trash-alt text-sm cursor-pointer"></i>
                </div>
            </div>
        @endforeach
    </div>

    @include('partials.alert-add')

    @include('partials.alert-edit')

    @include('partials.alert-delete')

    @include('partials.alert-ok')
@endsection

@section('add-js')
    <script src="{{ asset('js/add-js.js') }}"></script>
@endsection

@section('edit-js')
    <script src="{{ asset('js/edit-js.js') }}"></script>
@endsection

@section('delete-js')
    <script src="{{ asset('js/delete-js.js') }}"></script>
@endsection