<div class="alertAdd bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
    <form action="" autocomplete="off" class="formAddPost bg-gray-primary w-[450px] h-[550px] p-7 rounded-[10px] overflow-auto">
        {{-- category --}}
        <div class="flex flex-col">
            <label for="category_id" class="text-sm mb-2 ml-1">Category</label>
            <select name="category_id" id="categoryId" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            {{-- error --}}
            {{-- <p class="text-red-500 text-[12px] mt-1 ml-2">gagal membuat table</p> --}}
        </div>

        {{-- github --}}
        <div class="flex flex-col my-5">
            <label for="github" class="text-sm mb-2 ml-1">Github Link</label>
            <input type="url" name="github" id="github" minlength="5" maxlength="500" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            {{-- <p class="text-red-500 text-[12px] mt-1 ml-2">gagal membuat table</p> --}}
        </div>

        {{-- author --}}
        <div class="flex flex-col my-5">
            <label for="author" class="text-sm mb-2 ml-1">Author</label>
            <input type="text" name="author" id="author" minlength="3" maxlength="50" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            {{-- <p class="text-red-500 text-[12px] mt-1 ml-2">gagal membuat table</p> --}}
        </div>

        {{-- date --}}
        <div class="flex flex-col my-5">
            <label for="date" class="text-sm mb-2 ml-1">Publish Date</label>
            <input type="date" name="date" id="date" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            {{-- <p class="text-red-500 text-[12px] mt-1 ml-2">gagal membuat table</p> --}}
        </div>

        {{-- title --}}
        <div class="flex flex-col my-5">
            <label for="title" class="text-sm mb-2 ml-1">Title</label>
            <input type="text" name="title" minlength="5" maxlength="254" id="title" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            {{-- <p class="text-red-500 text-[12px] mt-1 ml-2">gagal membuat table</p> --}}
        </div>

        {{-- slug --}}
        <div class="flex flex-col my-5">
            <label for="slug" class="text-sm mb-2 ml-1">Url</label>
            <input type="url" name="slug" minlength="5" maxlength="254" id="slug" class="w-full bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none">
            {{-- error --}}
            {{-- <p class="text-red-500 text-[12px] mt-1 ml-2">gagal membuat table</p> --}}
        </div>

        {{-- excerpt --}}
        <div class="flex flex-col my-5">
            <label for="excerpt" class="text-sm mb-2 ml-1">Excerpt</label>
            <textarea name="excerpt" minlength="5" maxlength="100000" id="excerpt" class="w-full h-40 bg-zinc-600 py-2 px-3 text-sm rounded-[5px] focus:outline-none focus:shadow-none"></textarea>
            {{-- error --}}
            {{-- <p class="text-red-500 text-[12px] mt-1 ml-2">gagal membuat table</p> --}}
        </div>

        <div class="w-full flex justify-end">
            <div class="cancelAdd bg-red-600 mr-3 px-4 py-2 rounded-[5px] text-sm cursor-pointer">Batal</div>
            <button type="submit" class="bg-blue-900 px-4 py-2 rounded-[5px] text-sm">Tambahkan</button>
        </div>
    </form>
</div>

<script>
    const formAddPost = document.querySelector('.formAddPost');
    formAddPost.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(event.target);

    fetch('{{ route('posts.store') }}', {
        method: 'POST',
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
        if (data.success) {
            alert(data.message);
            formAddPost.reset();
        } else {
            alert('Terjadi kesalahan saat menambahkan postingan');
        }
        })
        .catch((error) => console.error(error));
    });
</script>