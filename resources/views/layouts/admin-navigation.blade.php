<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body class="bg-body">
    {{-- container section left and right --}}
    <div class="w-full flex">
        {{-- navigation or section left --}}
        <div class="bg-blue-900 w-[226px] h-screen sticky top-0">
            {{-- logo --}}
            <div class="flex justify-center mt-11 mb-[100px]">
                <a href="{{ route('home') }}" class="text-3xl font-secularone">. queezfast</a>
            </div>

            {{-- list navigation --}}
            <ul>
                <li class="{{ (Route::is('dashboard') ? 'bg-[#102D80]' : '') }} w-full h-[47px] border-y border-[#102D80] hover:bg-[#102D80]">
                    <a href="{{ route('dashboard') }}" class="h-full flex items-center">
                        <img src="{{ asset('img/dashboard.png') }}" alt="Dashboard" class="w-[25px] ml-7 mr-[18px]">
                        <p class="text-sm">Dashboard</p>
                    </a>
                </li>
                <li class="{{ (Route::is('post*') ? 'bg-[#102D80]' : '') }} w-full h-[47px] border-b border-[#102D80] hover:bg-[#102D80]">
                    <a href="{{ route('post') }}" class="h-full flex items-center">
                        <img src="{{ asset('img/postcard.png') }}" alt="Post" class="w-[25px] ml-7 mr-[18px]">
                        <p class="text-sm">Post</p>
                    </a>
                </li>
                <li class="{{ (Route::is('category*') ? 'bg-[#102D80]' : '') }} w-full h-[47px] border-b border-[#102D80] hover:bg-[#102D80]">
                    <a href="{{ route('category') }}" class="h-full flex items-center">
                        <img src="{{ asset('img/category.png') }}" alt="Post" class="w-[22px] ml-7 mr-[22px]">
                        <p class="text-sm">Category</p>
                    </a>
                </li>
                <li class="{{ (Route::is('social-media*') ? 'bg-[#102D80]' : '') }} w-full h-[47px] border-b border-[#102D80] hover:bg-[#102D80]">
                    <a href="{{ route('social-media') }}" class="h-full flex items-center">
                        <img src="{{ asset('img/following.png') }}" alt="Social Media" class="w-[25px] ml-[26px] mr-[20px]">
                        <p class="text-sm">Social Media</p>
                    </a>
                </li>
                <li class="{{ (Route::is('blog*') ? 'bg-[#102D80]' : '') }} w-full h-[47px] border-b border-[#102D80] hover:bg-[#102D80]">
                    <a href="{{ route('blog') }}" class="h-full flex items-center">
                        <img src="{{ asset('img/blog.png') }}" alt="Blog" class="w-[25px] ml-[26px] mr-[20px]">
                        <p class="text-sm">Blog</p>
                    </a>
                </li>
                <li class="{{ (Route::is('sponsor*') ? 'bg-[#102D80]' : '') }} w-full h-[47px] border-b border-[#102D80] hover:bg-[#102D80]">
                    <a href="{{ route('sponsor') }}" class="h-full flex items-center">
                        <img src="{{ asset('img/heart.png') }}" alt="Sponsor" class="w-[25px] ml-[26px] mr-[20px]">
                        <p class="text-sm">Sponsor</p>
                    </a>
                </li>
            </ul>
        </div>

        {{-- section right --}}
        <div class="w-full flex-[2] px-[45px]">
            <div class="bg-body w-full h-[106px] flex justify-between items-center sticky top-0">
                {{-- route name --}}
                <h1 class="bg-gray-primary h-[39px] px-6 text-sm flex items-center rounded-[5px]">@yield('route-name')</h1>
            
                {{-- search and name acount --}}
                <div class="flex relative">
                    {{-- search dashboard --}}
                    <form action="/post" method="get" class="bg-gray-primary w-[204px] h-[39px] mr-5 pr-3 flex items-center rounded-[5px]">
                        <input type="text" name="searchPost" value="{{ (request('searchPost') ? : '') }}" placeholder="Search Post" onkeyup="checkInputSearchDashboard()" class="inputSearchDashboard w-full px-4 pt-0.5 flex-[2] bg-transparent h-[23px] text-[13px] placeholder:text-[#7B7B7B] focus:outline-none">
                        <button type="submit" disabled class="btnSearchDashboard bg-[#232325] w-[23px] h-[23px] rounded-[3px] text-[10px]"><i class="fas fa-search"></i></button>
                    </form>

                    {{-- name acount --}}
                    <div onclick="buttonDropdownAdmin()" class="bg-gray-primary w-[204px] h-[39px] px-3 flex items-center rounded-[5px] cursor-pointer">
                        {{-- profile --}}
                        <img src="{{ asset('img/muhammad-rizki.jpg') }}" alt="Muhammad Rizki" class="w-[23px] h-[23px] mr-2 rounded-[3px] object-cover">

                        {{-- name --}}
                        <p class="w-[130px] text-[13px]">{{ Str::limit(Str::title(Auth::user()->name), 15) }}</p>
                    
                        {{-- arrow --}}
                        <i class="arrowAdminDeropdown fas fa-chevron-down text-[12px] -mt-0.5 transition-all duration-300"></i>
                    </div>

                    {{-- list dropdown admin --}}
                    <div class="listDropdownAdmin bg-gray-primary w-[204px] py-2 hidden absolute top-12 right-0 shadow-lg shadow-zinc-800 rounded-[5px]">
                        <ul>
                            <li class="w-full h-12 hover:bg-zinc-700">
                                <form action="{{ route('logout') }}" method="post" class="w-full h-full">
                                    @csrf
                                    <button type="submit" class="flex items-center w-full h-full">
                                        <i class="fas fa-sign-out-alt ml-6 mr-5"></i>
                                        <p class="text-sm">Log Out</p>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-gray-primary w-full mb-10 p-5 rounded-[10px]">
                @yield('main')
            </div>
        </div>
    </div>


    @yield('add-js')
    @yield('edit-js')
    @yield('delete-js')
    <script src="{{ asset('js/script-all-dashboard.js') }}"></script>
    <script src="https://kit.fontawesome.com/209072fbdb.js" crossorigin="anonymous"></script>
</body>
</html>