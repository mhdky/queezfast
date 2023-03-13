@extends('layouts.main')

@section('container')
    {{-- navigation --}}
    @include('partials.nav')

    {{-- jika tidak ada postingan maka jumbtron hilang --}}
    @if ($posts->count() > 0)
        {{-- jumbotron --}}
        <div class="w-full h-screen bg-gradient-to-t from-body to-[rgba(73,73,73,0.31)] flex flex-col justify-center px-3 md-768:px-5 lg-1190:px-14 lg-1295:px-24">
            <h1 class="queezfast w-max text-3xl font-secularone font-medium mb-10 sm-730:text-4xl">. queezfast</h1>
            <p class="text-[12px] font-secularone font-medium sm-550:text-base md-816:w-[780px]">queezfast adalah platform yang dibangun untuk dapat memudahkan pengembang dalam mencari kembali pembelajaran-pembelajaran mengenai Web Programming yang telah dipelajari.</p>
            <div class="flex mt-3 sm-550:mt-5">
                {{-- tailwindcss --}}
                <div class="bg-[#1C1C1C] w-7 h-7 mr-3 flex justify-center items-center rounded-[5px] border border-[#363636] sm-550:w-10 sm-550:h-10">
                    <img src="{{ asset('img/tailwind-css.png') }}" alt="Tailwindcss" class="w-5 sm-550:w-6">
                </div>

                {{-- tailwindcss --}}
                <div class="bg-[#1C1C1C] w-7 h-7 mr-3 flex justify-center items-center rounded-[5px] border border-[#363636] sm-550:w-10 sm-550:h-10">
                    <img src="{{ asset('img/javascript.png') }}" alt="Javascript" class="w-4 sm-550:w-5">
                </div>

                {{-- php --}}
                <div class="bg-[#1C1C1C] w-7 h-7 mr-3 flex justify-center items-center rounded-[5px] border border-[#363636] sm-550:w-10 sm-550:h-10">
                    <img src="{{ asset('img/php.png') }}" alt="Php" class="w-4 sm-550:w-6">
                </div>

                {{-- laravel --}}
                <div class="bg-[#1C1C1C] w-7 h-7 mr-3 flex justify-center items-center rounded-[5px] border border-[#363636] sm-550:w-10 sm-550:h-10">
                    <i class="fab fa-laravel text-sm sm-550:text-lg"></i>
                </div>
            </div>
        </div>
    @endif

    {{-- container post --}}
    <div class="mb-10 grid grid-cols-1 gap-5 w-full px-5 md-768:grid-cols-2 md-970:gap-8 lg-1155:w-[1155px] lg-1155:mx-auto">
        {{-- post --}}
        @foreach ($posts as $post)
            <div class="break-inside-avoid border border-gray-primary rounded-[5px] relative">
                {{-- <div class="absolute -z-10 top-16 right-10 text-9xl text-[#1c1c20]">{{ $loop->iteration }}</div> --}}

                <div class="flex justify-between items-center py-2 px-4 border-b border-gray-primary">
                    {{-- category --}}
                    <a href="/category/{{ $post->category->slug }}" class="{{ $post->category->color }} text-[12px] cursor-default hover:underline md-768:cursor-pointer">{{ $post->category->name }}</a>
                    
                    {{-- stars --}}
                    <div class="flex items-center">
                        <a href="{{ $post->github }}" class="cursor-default md-768:cursor-pointer"><i class="fab fa-github text-zinc-600 -mt-0.5"></i></a>
                    </div>
                </div>

                <div class="w-full py-3 px-4 sm-500:py-5 sm-500:px-6">
                    {{-- author --}}
                    <div class="flex items-center mb-3">
                        <i class="fas fa-pen text-sm text-zinc-600 mr-3 text-[12px]"></i>
                        <p class="text-zinc-600 text-sm font-bold text-[12px]">{{ Str::title($post->author) }}</p>
                    </div>

                    {{-- date --}}
                    <div class="flex items-center">
                        <i class="far fa-calendar text-sm text-zinc-600 mr-[14px] text-[12px]"></i>
                        <p class="text-zinc-600 text-sm font-bold text-[12px]">{{ $post->date }}</p>
                    </div>

                    {{-- title --}}
                    <a href="{{ $post->slug }}" class="text-lg font-bold mt-5 inline-block cursor-default md-768:cursor-pointer hover:underline">{{ Str::title($post->title) }}</a>

                    {{-- excerpt --}}
                    <p class="text-sm text-justify mt-5 leading-5">{{ $post->excerpt }}</p>
                </div>
            </div>
        @endforeach
    </div>
    
    {{-- gambar no post jika postingan tidak ada --}}
    @if ($posts->count() < 1)
        <div class="w-full flex justify-center items-center my-28 px-5">
            <img src="{{ asset('img/no-post.png') }}" alt="No Post" class="w-[270px]">
        </div>
    @endif  

    {{-- pagination --}}
    <div class="flex justify-center items-center mb-10">
        {{ $posts->links() }}
    </div>
    
    {{-- footer --}}
    @include('partials.footer')
@endsection

@section('js-home')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection