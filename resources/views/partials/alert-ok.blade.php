{{-- alert tanpa with pada controller --}}
<div class="alert-ok fixed top-0 bottom-0 right-0 left-0 hidden justify-center items-end transition-all duration-300">
    <div class="bg-white-primary mb-5 px-4 py-2 rounded-[5px] text-zinc-900 text-sm font-semibold shadow-md shadow-zinc-800">Postingan berhasil dihapus</div>
</div>

{{-- alert dengan with pada controller --}}
@if (session()->has('ok'))
    <div class="alert-ok-with fixed top-0 bottom-0 right-0 left-0 flex justify-center items-end transition-all duration-300">
        <div class="bg-white-primary mb-5 px-4 py-2 rounded-[5px] text-zinc-900 text-sm font-semibold shadow-md shadow-zinc-800">{{ session('ok') }}</div>
    </div>
@endif