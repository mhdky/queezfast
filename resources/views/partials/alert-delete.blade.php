<form id="delete-post-form" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- input field untuk CSRF token -->
</form>
@if (Route::is('post'))
    @foreach ($posts as $post)
        <div class="alertDelete bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
            <div class="bg-gray-primary w-96 h-52 p-4 rounded-[10px] flex flex-col justify-center items-center">
                <p>Postingan akan dihapus</p>
                <p class="mt-5 mb-7 text-sm">Apakah kamu yakin?</p>
                <div class="w-full flex justify-end items-center">
                    <div class="calcelDelete bg-blue-900 mr-3 px-5 py-2 text-sm rounded-[5px] cursor-pointer">Tidak</div>
                    <button type="submit" class="text-sm btnDelete" onclick="deletePost('{{ $post->id }}')">Hapus</button>
                </div>
            </div>
        </div>
    @endforeach
@elseif(Route::is('social-media'))
    @foreach ($socials as $social)
        <div class="alertDelete bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
            <div class="bg-gray-primary w-96 h-52 p-4 rounded-[10px] flex flex-col justify-center items-center">
                <p>Media Sosial akan dihapus</p>
                <p class="mt-5 mb-7 text-sm">Apakah kamu yakin?</p>
                <div class="w-full flex justify-end items-center">
                    <div class="calcelDelete bg-blue-900 mr-3 px-5 py-2 text-sm rounded-[5px] cursor-pointer">Tidak</div>
                    
                    <form action="#" method="post">
                        @csrf
                        <button type="submit" class="text-sm">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@elseif(Route::is('blog'))
    @foreach ($blogs as $blog)
        <div class="alertDelete bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
            <div class="bg-gray-primary w-96 h-52 p-4 rounded-[10px] flex flex-col justify-center items-center">
                <p>Blog akan dihapus</p>
                <p class="mt-5 mb-7 text-sm">Apakah kamu yakin?</p>
                <div class="w-full flex justify-end items-center">
                    <div class="calcelDelete bg-blue-900 mr-3 px-5 py-2 text-sm rounded-[5px] cursor-pointer">Tidak</div>
                    
                    <form action="#" method="post">
                        @csrf
                        <button type="submit" class="text-sm">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@elseif(Route::is('sponsor'))
    @foreach ($sponsors as $sponsor)
        <div class="alertDelete bg-[#00000089] w-full h-screen fixed top-0 right-0 bottom-0 left-0 z-20 hidden justify-center items-center">
            <div class="bg-gray-primary w-96 h-52 p-4 rounded-[10px] flex flex-col justify-center items-center">
                <p>Sponsor akan dihapus</p>
                <p class="mt-5 mb-7 text-sm">Apakah kamu yakin?</p>
                <div class="w-full flex justify-end items-center">
                    <div class="calcelDelete bg-blue-900 mr-3 px-5 py-2 text-sm rounded-[5px] cursor-pointer">Tidak</div>
                    
                    <form action="#" method="post">
                        @csrf
                        <button type="submit" class="text-sm">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endif