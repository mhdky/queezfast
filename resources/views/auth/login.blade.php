@extends('layouts.main')

@section('container')
    {{-- no mobile --}}
    <div class="bg-body fixed z-30 w-full h-screen flex flex-col justify-center items-center lg-1000:hidden">
        <h1 class="text-center px-3">Halaman ini tidak dapat dibuka pada device dengan lebar kurang dari 1000px</h1>
        <a href="/" class="mt-3 text-blue-600 underline">Kembali ke halaman utama</a>
    </div>

    <div class="w-full h-screen flex flex-col justify-center items-center">
        {{-- logo --}}
        <a href="/" class="-ml-10 text-[40px] font-secularone">. queezfast</a>

        {{-- form login --}}
        <form action="{{ route('auth-login') }}" method="post" autocomplete="off" class="w-[423px] mt-[70px] px-[27px] pt-[65px] pb-[31px] border border-gray-primary rounded-[10px]">
            @csrf

            {{-- gagal login --}}
            @if (session()->has('gagal'))
                <p class="text-red-500 text-sm text-center mb-10">{{ session('gagal') }}</p>
            @endif

            {{-- username --}}
            <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" class="bg-transparent w-full h-[35px] text-sm border border-gray-primary rounded-[5px] px-3 active:border focus:outline-blue-600 focus:ring-blue-600 focus:outline-none focus:border-transparent placeholder:text-gray-secondary">
            @error('username')
                <p class="text-[12px] text-red-500 mt-1">{{ $message }}</p> 
            @enderror

            {{-- password --}}
            <input type="password" name="password" placeholder="Password" class="bg-transparent w-full h-[35px] mt-[31px] text-sm border border-gray-primary rounded-[5px] px-3 active:border focus:outline-blue-600 focus:ring-blue-600 focus:outline-none focus:border-transparent placeholder:text-gray-secondary">
            @error('password')
                <p class="text-[12px] text-red-500 mt-1">{{ $message }}</p> 
            @enderror
            
            {{-- button --}}
            <div class="w-full flex justify-end">
                <button type="submit" class="bg-blue-600 w-[109px] h-[35px] mt-[31px] text-sm rounded-[5px]">Login</button>
            </div>
        </form>
    </div>
@endsection