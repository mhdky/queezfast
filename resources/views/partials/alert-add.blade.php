{{-- add post --}}
<div class="alertAdd bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
    <form action="/post" method="POST" autocomplete="off" class="formAddPost bg-gray-primary w-[450px] h-[550px] p-7 rounded-[10px] overflow-auto">
        @csrf
        {{-- category --}}
        <div class="flex flex-col">
            <label for="category_id" class="text-sm mb-2 ml-1">Category</label>
            <select name="category_id" required id="categoryId" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none">
                @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            {{-- error --}}
            @error('category_id')
                <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- github --}}
        <div class="flex flex-col my-5">
            <label for="github" class="text-sm mb-2 ml-1">Github Link</label>
            <input type="url" required name="github" value="{{ old('github') }}" id="github" minlength="5" maxlength="500" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            @error('github')
                <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- author --}}
        <div class="flex flex-col my-5">
            <label for="author" class="text-sm mb-2 ml-1">Author</label>
            <input type="text" required name="author" value="{{ old('author') }}" id="author" minlength="3" maxlength="50" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            @error('author')
                <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- date --}}
        <div class="flex flex-col my-5">
            <label for="date" class="text-sm mb-2 ml-1">Publish Date</label>
            <input type="date" required name="date" id="date" value="{{ old('date') }}" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            @error('date')
                <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- title --}}
        <div class="flex flex-col my-5">
            <label for="title" class="text-sm mb-2 ml-1">Title</label>
            <input type="text" required name="title" value="{{ old('title') }}" minlength="5" maxlength="254" id="title" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            @error('title')
                <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- slug --}}
        <div class="flex flex-col my-5">
            <label for="slug" class="text-sm mb-2 ml-1">Url</label>
            <input type="url" required name="slug" value="{{ old('slug') }}" minlength="5" maxlength="254" id="slug" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            @error('slug')
                <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- excerpt --}}
        <div class="flex flex-col my-5">
            <label for="excerpt" class="text-sm mb-2 ml-1">Excerpt</label>
            <textarea name="excerpt" required minlength="5" maxlength="100000" id="excerpt" class="w-full h-40 bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">{{ old('excerpt') }}</textarea>
            {{-- error --}}
            @error('excerpt')
                <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="w-full flex justify-end">
            <div class="cancelAdd bg-red-600 mr-3 px-4 py-2 rounded-[5px] text-sm cursor-pointer">Batal</div>
            <button type="submit" class="bg-blue-900 px-4 py-2 rounded-[5px] text-sm">Tambahkan</button>
        </div>
    </form>
</div>