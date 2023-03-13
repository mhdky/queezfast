@if (Route::is('post'))
    {{-- edit post --}}
    <div class="alertEdit bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
        <form action="" method="POST" autocomplete="off" class="formEditPost bg-gray-primary w-[450px] h-[550px] p-7 rounded-[10px] overflow-auto">
            @csrf
            @method('put')
            {{-- category --}}
            <div class="flex flex-col">
                <label for="categoryIdEdit" class="text-sm mb-2 ml-1">Category</label>
                <select name="category_id" required id="categoryIdEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none">
                    @foreach ($categories as $category)                   
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                {{-- error --}}
                @error('category_id')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- github --}}
            <div class="flex flex-col my-5">
                <label for="githubEdit" class="text-sm mb-2 ml-1">Github Link</label>
                <input type="url" required name="github" value="Memuat.." id="githubEdit" minlength="5" maxlength="500" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('github')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- author --}}
            <div class="flex flex-col my-5">
                <label for="authorEdit" class="text-sm mb-2 ml-1">Author</label>
                <input type="text" required name="author" value="Memuat.." id="authorEdit" minlength="3" maxlength="50" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('author')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- date --}}
            <div class="flex flex-col my-5">
                <label for="dateEdit" class="text-sm mb-2 ml-1">Publish Date</label>
                <input type="date" required name="date" id="dateEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('date')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- title --}}
            <div class="flex flex-col my-5">
                <label for="titleEdit" class="text-sm mb-2 ml-1">Tittle</label>
                <input type="text" required name="title" value="Memuat.." minlength="5" maxlength="254" id="titleEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('title')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- slug --}}
            <div class="flex flex-col my-5">
                <label for="slugEdit" class="text-sm mb-2 ml-1">Url</label>
                <input type="url" required name="slug" value="Memuat.." minlength="5" maxlength="254" id="slugEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('slug')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- excerpt --}}
            <div class="flex flex-col my-5">
                <label for="excerptEdit" class="text-sm mb-2 ml-1">Excerpt</label>
                <textarea name="excerpt" required minlength="5" maxlength="100000" id="excerptEdit" class="w-full h-40 bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">Memuat..</textarea>
                {{-- error --}}
                @error('excerpt')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex justify-end">
                <div class="cancelEdit bg-red-600 mr-3 px-4 py-2 rounded-[5px] text-sm cursor-pointer">Batal</div>
                <button type="submit" class="bg-blue-900 px-4 py-2 rounded-[5px] text-sm">Simpan Perubahan</button>
            </div>
        </form>
    </div>
@elseif(Route::is('social-media'))
    {{-- edit social media --}}
    <div class="alertEdit bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
        <form action="" method="POST" autocomplete="off" class="formEditSocialMedia bg-gray-primary w-[450px] p-7 rounded-[10px] overflow-auto">
            @csrf
            @method('put')
            {{-- name --}}
            <div class="flex flex-col my-5">
                <label for="nameEdit" class="text-sm mb-2 ml-1">Tittle</label>
                <input type="text" required name="name" value="Memuat.." minlength="3" maxlength="254" id="nameEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('name')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- url --}}
            <div class="flex flex-col my-5">
                <label for="urlEdit" class="text-sm mb-2 ml-1">Url</label>
                <input type="text" required name="url" value="Memuat.." minlength="3" maxlength="254" id="urlEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('url')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex justify-end">
                <div class="cancelEdit bg-red-600 mr-3 px-4 py-2 rounded-[5px] text-sm cursor-pointer">Batal</div>
                <button type="submit" class="bg-blue-900 px-4 py-2 rounded-[5px] text-sm">Simpan Perubahan</button>
            </div>
        </form>
    </div>
@elseif(Route::is('blog'))
    {{-- edit blog --}}
    <div class="alertEdit bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
        <form action="" method="POST" autocomplete="off" class="formEditBlog bg-gray-primary w-[450px] p-7 rounded-[10px] overflow-auto">
            @csrf
            @method('put')
            {{-- name --}}
            <div class="flex flex-col my-5">
                <label for="nameEdit" class="text-sm mb-2 ml-1">Tittle</label>
                <input type="text" required name="name" value="Memuat.." minlength="3" maxlength="254" id="nameEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('name')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- url --}}
            <div class="flex flex-col my-5">
                <label for="urlEdit" class="text-sm mb-2 ml-1">Url</label>
                <input type="text" required name="url" value="Memuat.." minlength="3" maxlength="254" id="urlEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('url')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex justify-end">
                <div class="cancelEdit bg-red-600 mr-3 px-4 py-2 rounded-[5px] text-sm cursor-pointer">Batal</div>
                <button type="submit" class="bg-blue-900 px-4 py-2 rounded-[5px] text-sm">Simpan Perubahan</button>
            </div>
        </form>
    </div>
@elseif(Route::is('sponsor'))
    {{-- edit sponsor --}}
    <div class="alertEdit bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
        <form action="" method="POST" autocomplete="off" class="formEditSponsor bg-gray-primary w-[450px] p-7 rounded-[10px] overflow-auto">
            @csrf
            @method('put')
            {{-- name --}}
            <div class="flex flex-col my-5">
                <label for="nameEdit" class="text-sm mb-2 ml-1">Tittle</label>
                <input type="text" required name="name" value="Memuat.." minlength="3" maxlength="254" id="nameEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('name')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- url --}}
            <div class="flex flex-col my-5">
                <label for="urlEdit" class="text-sm mb-2 ml-1">Url</label>
                <input type="text" required name="url" value="Memuat.." minlength="3" maxlength="254" id="urlEdit" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
                {{-- error --}}
                @error('url')
                    <p class="text-red-500 text-[12px] mt-1 ml-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full flex justify-end">
                <div class="cancelEdit bg-red-600 mr-3 px-4 py-2 rounded-[5px] text-sm cursor-pointer">Batal</div>
                <button type="submit" class="bg-blue-900 px-4 py-2 rounded-[5px] text-sm">Simpan Perubahan</button>
            </div>
        </form>
    </div>
@endif