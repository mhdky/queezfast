@extends('layouts.admin-navigation')

@section('route-name')
    <a href="/" class="hover:text-blue-600">Home</a>/Sponsor
@endsection

@section('main')
<div class="flex justify-between items-center mb-16">
    {{-- container name --}}
    <div class="addButton bg-blue-900 py-[9px] px-[23px] rounded-[5px] text-sm cursor-pointer">Add Sponsor</div>
</div>

<div class="w-[800px] flex flex-col">
    @foreach ($sponsors as $sponsor)
        <div class="flex justify-between items-center mb-5 pb-3 border-b border-[#7B7B7B]" data-sponsor-id="{{ $sponsor->id }}">
            <a href="{{ $sponsor->url }}" class="text-sm hover:underline">{{ Str::title($sponsor->name) }}</a>
        
            <div class="fle">
                <i class="editSponsor fas fa-edit text-sm mr-3 cursor-pointer" data-id="{{ $sponsor->id }}"></i>
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