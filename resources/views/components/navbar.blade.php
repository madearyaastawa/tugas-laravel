<nav class="sticky top-0 z-50 border-b border-green-100 bg-white/95 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4">

        <a href="{{ url('/') }}" class="text-2xl font-extrabold tracking-tight text-green-800">
            Rimbun<span class="text-lime-500">.id</span>
        </a>

        <div class="hidden items-center gap-8 text-sm font-medium md:flex">
            <a href="{{ url('/') }}" class="text-green-800">Beranda</a>
            <a href="{{ url('/produk') }}" class="text-gray-600 transition hover:text-green-700">Produk</a>
            <a href="{{ url('/keranjang') }}" class="text-gray-600 transition hover:text-green-700">Keranjang</a>
            <a href="{{ url('/tentang') }}" class="text-gray-600 transition hover:text-green-700">Tentang Kami</a>
        </div>

        <div class="flex items-center gap-3">
            <a href="{{ url('/produk') }}"
               class="rounded-lg bg-green-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-green-800">
                Belanja Sekarang
            </a>
        </div>

    </div>
</nav>
