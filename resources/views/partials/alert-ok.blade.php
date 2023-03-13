{{-- alert tanpa with pada controller --}}
@if (Route::is('post'))
    <div class="alert-ok fixed top-0 bottom-0 right-0 left-0 hidden justify-center items-end transition-all duration-300">
        <div class="bg-white-primary mb-5 px-4 py-2 rounded-[5px] text-zinc-900 text-sm font-semibold shadow-md shadow-zinc-800">Postingan berhasil dihapus</div>
    </div>
@elseif(Route::is('social-media'))
    <div class="alert-ok fixed top-0 bottom-0 right-0 left-0 hidden justify-center items-end transition-all duration-300">
        <div class="bg-white-primary mb-5 px-4 py-2 rounded-[5px] text-zinc-900 text-sm font-semibold shadow-md shadow-zinc-800">Social media berhasil dihapus</div>
    </div>
@elseif(Route::is('blog'))
    <div class="alert-ok fixed top-0 bottom-0 right-0 left-0 hidden justify-center items-end transition-all duration-300">
        <div class="bg-white-primary mb-5 px-4 py-2 rounded-[5px] text-zinc-900 text-sm font-semibold shadow-md shadow-zinc-800">Blog berhasil dihapus</div>
    </div>
@endif

{{-- alert dengan with pada controller --}}
@if (session()->has('ok'))
    <div class="alert-ok-with fixed top-0 bottom-0 right-0 left-0 flex justify-center items-end transition-all duration-300">
        <div class="bg-white-primary mb-5 px-4 py-2 rounded-[5px] text-zinc-900 text-sm font-semibold shadow-md shadow-zinc-800">{{ session('ok') }}</div>
    </div>
@endif