<div class="bg-neutral-900 w-full px-5 flex flex-col justify-center border-t border-gray-primary pt-[52px] lg-1155:items-center">
    {{-- category, medsos, blog, sponsors --}}
    <div class="w-full flex flex-col sm-550:flex-row sm-550:justify-between lg-1155:w-[1100px]">
        {{-- category --}}
        <ul>
            <li class="mb-8">Category</li>
            @foreach ($categories as $category)
                <li><a href="/category/{{ $category->slug }}" class="mb-4 text-zinc-600 text-sm inline-block cursor-default hover:underline md-768:cursor-pointer">{{ Str::title($category->name) }}</a></li>
            @endforeach
        </ul>

        {{-- find me on --}}
        <ul class="mt-8 sm-550:mt-0">
            <li class="mb-8">Find Me On</li>
            @foreach ($socials as $social)
                <li><a href="{{ $social->url }}" class="mb-4 text-zinc-600 text-sm inline-block cursor-default hover:underline md-768:cursor-pointer">{{ Str::title($social->name) }}</a></li>
            @endforeach
        </ul>

        {{-- blog --}}
        <ul class="mt-8 sm-550:mt-0">
            <li class="mb-8">Blog</li>
            @foreach ($blogs as $blog)
                <li><a href="{{ $blog->url }}" class="mb-4 text-zinc-600 text-sm inline-block cursor-default hover:underline md-768:cursor-pointer">{{ Str::title($blog->name) }}</a></li>
            @endforeach
        </ul>

        {{-- blog --}}
        <ul class="mt-8 sm-550:mt-0">
            <li class="mb-8">Sponsors</li>
            @foreach ($sponsors as $sponsor)
                <li><a href="{{ $sponsor->url }}" class="mb-4 text-zinc-600 text-sm inline-block cursor-default hover:underline md-768:cursor-pointer">{{ Str::title($sponsor->name) }}</a></li>
            @endforeach
        </ul>
    </div>

    {{-- copyright --}}
    <p class="text-sm text-center mt-20 mb-[78px]">&copy; {{ now()->year }} queezfast. All rights reserved</p>
</div>