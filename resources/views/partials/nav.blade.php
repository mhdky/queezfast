<div class="bg-opacity-50 backdrop-filter backdrop-blur-xl w-full flex justify-between items-center px-2 py-1 border-b border-gray-primary fixed top-0 z-10 md-768:px-5 md-768:py-3 lg-1000:py-4 lg-1190:px-14 lg-1295:px-24">
    <div class="flex items-center relative">
        {{-- logo --}}
        <a href="/" class="text-[28px] font-secularone font-medium cursor-default md-768:cursor-pointer md-768:mr-7 lg-1000:text-3xl lg-1000:mr-12">. queezfast</a>

        {{-- list destkop --}}
        <ul class="hidden items-center md-768:flex">
            <li class="mr-3"><a href="/" class="text-sm font-secularone">Home</a></li>
            <li class="categoryDesktop flex items-center cursor-pointer">
                <p class="mt-0.5 mr-2 text-sm font-secularone">Category</p>
                <i class="arrowCategoryDesktop fa-solid fa-chevron-down text-[12px] transition-all duration-300"></i>
            </li>
        </ul>

        {{-- list category dropdown --}}
        <div class="listCategoryDropdown w-max bg-zinc-800 hidden flex-col border border-gray-primary rounded-[5px] absolute top-10 left-[225px] overflow-hidden lg-1000:left-[250px]">
            @foreach ($categories as $category)
                @if (request()->is('category/' . $category->slug) || (request()->is('category') && $category->slug === 'all'))
                    <a href="/category/{{ $category->slug }}" class="inline-block px-4 py-2 text-sm bg-zinc-700">{{ Str::title($category->name) }}</a>
                @else
                    <a href="/category/{{ $category->slug }}" class="inline-block px-4 py-2 text-sm hover:bg-zinc-700">{{ Str::title($category->name) }}</a>
                @endif
            @endforeach
        </div>
    </div>

    {{-- search desktop --}}
    <div class="w-80 h-9 hidden md-768:flex">
        <input type="text" placeholder="Live search" id="search" autocomplete="off" onkeyup="checkInputDesktop()" class="searchInput searchDesktop inputSerchDesktop bg-transparent w-full flex-[2] text-sm border border-gray-primary px-3 rounded-l-[5px] focus:outline-none placeholder:text-gray-secondary placeholder:text-[12px]">
        <button disabled="disabled" class="buttonSearchDesktop border flex justify-center items-center border-gray-primary w-10 h-full -ml-[1px] rounded-r-[5px]"><i class="fa-solid fa-magnifying-glass text-gray-secondary text-[13px]"></i></button>
    </div>

    {{-- inside right --}}
    <div class="flex items-center md-768:hidden">
        {{-- button search --}}
        <div class="searchBtn w-5 h-5 mr-4 flex justify-center items-center md-768:hidden">
            <i class="fas fa-search text-[15px]"></i>
        </div>

        {{-- burger menu --}}
        <div class="burgerBtn w-[22px] h-[14px] flex flex-col justify-between relative overflow-hidden md-768:hidden">
            <span class="bg-white-primary w-full h-0.5 transition-all duration-300"></span>
            <span class="bg-white-primary w-full h-0.5 transition-all duration-300"></span>
            <span class="bg-white-primary w-full h-0.5 transition-all duration-300"></span>
        </div>
    </div>
</div>

{{-- container search mobile --}}
<div class="containersearch hidden w-full h-screen fixed z-20 top-0 right-0 bottom-0 left-0 bg-opacity-50 backdrop-filter backdrop-blur-3xl md-768:hidden">
    <div class="w-full h-full relative flex justify-center">
        <div class="closeSearch absolute z-10 top-0 right-0 bottom-0 left-0"></div>

        <div class="w-full absolute z-20">
            <div class="w-full h-[60px] flex px-3 pt-3">
                <input type="text" name="search" autocomplete="off" placeholder="Live search" onkeyup="checkInputSearchMobile()" id="search-mobile" class="searchInputMobile inputSearch w-full px-2 flex-[2] bg-[#181818] border border-gray-primary rounded-l-[5px] focus:outline-none focus:border-gray-primary placeholder:text-gray-secondary">
                <button disabled="disabled" class="buttonSearchMobile bg-[#181818] flex justify-center items-center border border-gray-primary w-[55px] h-full -ml-[1px] rounded-r-[5px]"><i class="fas fa-search text-gray-secondary text-[15px]"></i></button>
            </div>

            {{-- hasil pencarian mobile --}}
            <div class="containerHasilPencarianMobile hidden w-full h-72 px-3">
                <div class="bg-[#181818] w-full h-72 flex flex-col rounded-[5px] border border-gray-primary mt-2 overflow-auto" id="search-results-mobile">
                    <div class="searchResultMobile"></div>
                    <p class="loadingMobile w-full text-center hidden justify-center py-2 text-sm">Memuat..</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- list nav mobile --}}
<div class="containerListMobile w-full h-screen hidden fixed z-20 top-0 right-0 bottom-0 left-0 bg-opacity-50 backdrop-filter backdrop-blur-3xl md-768:hidden">
    <div class="w-full h-full relative flex justify-center items-center">
        <div class="closeNavMobile absolute z-10 top-0 right-0 bottom-0 left-0"></div>

        {{-- list --}}
        <ul class="flex flex-col items-center absolute z-20">
            <li class="mb-2"><a href="/">Home</a></li>
            <li class="flex items-center mb-2">
                <p>Category</p>
                <i class="fas fa-chevron-down text-[12px] ml-2"></i>
            </li>
            @foreach ($categories as $category)
                @if (request()->is('category/' . $category->slug) || (request()->is('category') && $category->slug === 'all'))
                    <li class="mb-2"><a href="/category/{{ $category->slug }}" class="{{ $category->color }}">{{ $category->name }}</a></li> 
                @else
                    <li class="mb-2"><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></li> 
                @endif
            @endforeach
        </ul>
    </div>
</div>

{{-- container hasil search desktop --}}
<div class="containerHasilPencarianDesktop hidden fixed z-10 top-0 right-0 left-0 bottom-0">
    <div class="w-full h-full relative">
        <div class="closeContainerListHasilPencarian absolute z-10 top-0 right-0 bottom-0 left-0"></div>

        {{-- hasil pencarian desctop --}}
        <div id="search-results" class="hasilPencarianDeasktop bg-zinc-800 w-80 max-h-96 my-2 flex-col border border-gray-primary rounded-[5px] absolute z-20 top-[70px] right-5 overflow-auto lg-1000:top-[75px] lg-1190:right-14 lg-1295:right-24" id="search-results">
            <div id="searchResult"></div>
            <p class="loading w-full text-center hidden justify-center py-2 text-sm">Memuat..</p>
        </div>
    </div>
</div>