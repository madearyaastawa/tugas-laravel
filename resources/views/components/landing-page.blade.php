@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="overflow-hidden bg-green-50">
    <div class="mx-auto grid max-w-7xl items-center gap-10 px-5 py-16 md:grid-cols-2 md:py-24">

        <div>
            <span class="inline-flex items-center gap-2 rounded-full bg-green-100 px-4 py-2 text-sm font-medium text-green-800">
                <span class="h-2 w-2 rounded-full bg-green-600"></span>
                Temukan tanaman favoritmu
            </span>

            <h1 class="mt-6 max-w-xl text-4xl font-extrabold leading-tight tracking-tight text-green-950 sm:text-5xl lg:text-6xl">
                Hadirkan suasana
                <span class="text-green-700">hijau</span>
                di setiap sudut rumah.
            </h1>

            <p class="mt-5 max-w-lg text-base leading-7 text-gray-600">
                Pilihan tanaman hias dan perlengkapannya untuk menemani
                keseharianmu dengan suasana yang lebih alami.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#produk"
                   class="rounded-xl bg-green-700 px-6 py-3 font-semibold text-white transition hover:bg-green-800">
                    Jelajahi Tanaman
                </a>

                <a href="#kategori"
                   class="rounded-xl border border-green-200 bg-white px-6 py-3 font-semibold text-green-800 transition hover:bg-green-100">
                    Lihat Kategori
                </a>
            </div>

            <div class="mt-10 flex flex-wrap gap-x-7 gap-y-3 text-sm text-gray-600">
                <span>✓ Pilihan tanaman beragam</span>
                <span>✓ Cocok untuk pemula</span>
            </div>
        </div>

        <div class="relative">
            <div class="absolute -inset-4 rounded-[2rem] bg-green-200/50 blur-2xl"></div>

            <div class="relative flex min-h-80 items-center justify-center overflow-hidden rounded-3xl bg-green-200 sm:min-h-[420px]">
                <div class="absolute -right-12 -top-12 h-48 w-48 rounded-full bg-lime-300/60"></div>
                <div class="absolute -bottom-16 -left-10 h-56 w-56 rounded-full bg-green-300/70"></div>

                <div class="relative text-center">
                    <div class="text-9xl sm:text-[10rem]">🪴</div>
                    <p class="mt-3 text-lg font-semibold text-green-950">
                        Tumbuh bersama alam
                    </p>
                    <p class="mt-1 text-sm text-green-800">
                        Temukan hijau versimu di Rimbun.id
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Kategori --}}
<section id="kategori" class="mx-auto max-w-7xl px-5 py-16">
    <div class="flex flex-col justify-between gap-3 sm:flex-row sm:items-end">
        <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-green-700">
                Temukan pilihanmu
            </p>
            <h2 class="mt-2 text-3xl font-bold text-green-950">
                Jelajahi Kategori
            </h2>
        </div>

        <p class="max-w-md text-sm leading-6 text-gray-500">
            Mulai dari tanaman untuk mempercantik ruangan hingga koleksi
            kecil yang mudah dirawat.
        </p>
    </div>

    <div class="mt-8 grid grid-cols-2 gap-4 lg:grid-cols-4">

        <a href="#produk" class="group rounded-2xl border border-green-100 bg-white p-5 transition hover:-translate-y-1 hover:shadow-lg">
            <div class="flex h-24 items-center justify-center rounded-xl bg-green-50 text-5xl">🌿</div>
            <h3 class="mt-4 font-bold text-green-950">Tanaman Indoor</h3>
            <p class="mt-1 text-sm text-gray-500">Untuk ruang yang lebih asri</p>
        </a>

        <a href="#produk" class="group rounded-2xl border border-green-100 bg-white p-5 transition hover:-translate-y-1 hover:shadow-lg">
            <div class="flex h-24 items-center justify-center rounded-xl bg-lime-50 text-5xl">🌵</div>
            <h3 class="mt-4 font-bold text-green-950">Sukulen</h3>
            <p class="mt-1 text-sm text-gray-500">Kecil dan menarik</p>
        </a>

        <a href="#produk" class="group rounded-2xl border border-green-100 bg-white p-5 transition hover:-translate-y-1 hover:shadow-lg">
            <div class="flex h-24 items-center justify-center rounded-xl bg-emerald-50 text-5xl">🌳</div>
            <h3 class="mt-4 font-bold text-green-950">Tanaman Outdoor</h3>
            <p class="mt-1 text-sm text-gray-500">Untuk area luar rumah</p>
        </a>

        <a href="#produk" class="group rounded-2xl border border-green-100 bg-white p-5 transition hover:-translate-y-1 hover:shadow-lg">
            <div class="flex h-24 items-center justify-center rounded-xl bg-orange-50 text-5xl">🪴</div>
            <h3 class="mt-4 font-bold text-green-950">Pot Tanaman</h3>
            <p class="mt-1 text-sm text-gray-500">Lengkapi koleksimu</p>
        </a>

    </div>
</section>

{{-- Produk --}}
<section id="produk" class="border-y border-green-100 bg-white">
    <div class="mx-auto max-w-7xl px-5 py-16">

        <div class="text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-green-700">
                Pilihan untukmu
            </p>
            <h2 class="mt-2 text-3xl font-bold text-green-950">
                Tanaman Pilihan
            </h2>
            <p class="mt-3 text-gray-500">
                Temukan tanaman yang sesuai dengan ruang dan gayamu.
            </p>
        </div>

        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
            <div class="relative flex-1">
                <input
                    type="search"
                    id="searchProduct"
                    placeholder="Cari tanaman..."
                    class="w-full rounded-xl border border-gray-200 bg-stone-50 px-4 py-3 outline-none transition focus:border-green-600 focus:ring-2 focus:ring-green-100"
                >
            </div>

            <select
                id="filterCategory"
                class="rounded-xl border border-gray-200 bg-stone-50 px-4 py-3 outline-none focus:border-green-600 sm:w-64"
            >
                <option value="">Semua Kategori</option>
                <option value="Tanaman Indoor">Tanaman Indoor</option>
                <option value="Sukulen">Sukulen</option>
                <option value="Tanaman Outdoor">Tanaman Outdoor</option>
                <option value="Pot Tanaman">Pot Tanaman</option>
            </select>
        </div>

        @php
            $products = [
                ['id' => 1, 'name' => 'Monstera Deliciosa', 'category' => 'Tanaman Indoor', 'price' => 150000, 'description' => 'Tanaman tropis dengan daun lebar untuk dekorasi ruangan.', 'emoji' => '🌿'],
                ['id' => 2, 'name' => 'Snake Plant', 'category' => 'Tanaman Indoor', 'price' => 85000, 'description' => 'Tanaman yang mudah dirawat untuk berbagai kondisi ruangan.', 'emoji' => '🪴'],
                ['id' => 3, 'name' => 'Echeveria', 'category' => 'Sukulen', 'price' => 45000, 'description' => 'Sukulen kecil dengan bentuk daun yang menarik.', 'emoji' => '🌱'],
                ['id' => 4, 'name' => 'Peace Lily', 'category' => 'Tanaman Indoor', 'price' => 95000, 'description' => 'Tanaman dengan daun hijau dan bunga putih yang elegan.', 'emoji' => '🌿'],
                ['id' => 5, 'name' => 'Kaktus Mini', 'category' => 'Sukulen', 'price' => 35000, 'description' => 'Kaktus mini untuk meja kerja atau rak kecil.', 'emoji' => '🌵'],
                ['id' => 6, 'name' => 'Calathea', 'category' => 'Tanaman Indoor', 'price' => 120000, 'description' => 'Tanaman dengan pola daun yang cantik dan unik.', 'emoji' => '🍃'],
            ];
        @endphp

        <div id="productGrid" class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ($products as $product)
                <article
                    class="product-card overflow-hidden rounded-2xl border border-gray-100 bg-white transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                    data-name="{{ strtolower($product['name']) }}"
                    data-category="{{ $product['category'] }}"
                >
                    <div class="flex h-52 items-center justify-center bg-green-50">
                        <span class="text-7xl">{{ $product['emoji'] }}</span>
                    </div>

                    <div class="p-5">
                        <span class="rounded-full bg-green-50 px-3 py-1 text-xs font-semibold text-green-700">
                            {{ $product['category'] }}
                        </span>

                        <h3 class="mt-3 text-lg font-bold text-gray-900">
                            {{ $product['name'] }}
                        </h3>

                        <p class="mt-2 min-h-10 text-sm leading-6 text-gray-500">
                            {{ $product['description'] }}
                        </p>

                        <div class="mt-5 flex items-center justify-between gap-3">
                            <span class="text-lg font-extrabold text-green-800">
                                Rp{{ number_format($product['price'], 0, ',', '.') }}
                            </span>

                            <a href="{{ url('/product/' . $product['id']) }}"
                               class="rounded-lg bg-green-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-green-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach

        </div>

        <p id="emptyMessage" class="mt-8 hidden text-center text-gray-500">
            Produk tidak ditemukan. Coba kata kunci atau kategori lain.
        </p>

    </div>
</section>

{{-- Keunggulan --}}
<section id="tentang" class="mx-auto max-w-7xl px-5 py-16">
    <div class="text-center">
        <p class="text-sm font-semibold uppercase tracking-wider text-green-700">
            Mengapa Rimbun.id?
        </p>
        <h2 class="mt-2 text-3xl font-bold text-green-950">
            Membuat pengalaman merawat tanaman lebih mudah
        </h2>
    </div>

    <div class="mt-10 grid gap-6 sm:grid-cols-3">

        <div class="rounded-2xl bg-white p-6 text-center shadow-sm">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-3xl">🌱</div>
            <h3 class="mt-4 font-bold text-green-950">Pilihan Beragam</h3>
            <p class="mt-2 text-sm leading-6 text-gray-500">
                Jelajahi beragam tanaman dan perlengkapan sesuai kebutuhanmu.
            </p>
        </div>

        <div class="rounded-2xl bg-white p-6 text-center shadow-sm">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-3xl">💚</div>
            <h3 class="mt-4 font-bold text-green-950">Ramah Pemula</h3>
            <p class="mt-2 text-sm leading-6 text-gray-500">
                Temukan tanaman yang sesuai dengan pengalaman merawatmu.
            </p>
        </div>

        <div class="rounded-2xl bg-white p-6 text-center shadow-sm">
            <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-3xl">🏡</div>
            <h3 class="mt-4 font-bold text-green-950">Ruang Lebih Asri</h3>
            <p class="mt-2 text-sm leading-6 text-gray-500">
                Tambahkan sentuhan alami pada rumah dan ruang kerjamu.
            </p>
        </div>

    </div>
</section>

<script>
    const searchInput = document.getElementById('searchProduct');
    const categoryFilter = document.getElementById('filterCategory');
    const productCards = document.querySelectorAll('.product-card');
    const emptyMessage = document.getElementById('emptyMessage');

    function filterProducts() {
        const keyword = searchInput.value.toLowerCase().trim();
        const category = categoryFilter.value;
        let visibleCount = 0;

        productCards.forEach((card) => {
            const name = card.dataset.name;
            const productCategory = card.dataset.category;

            const matchesName = name.includes(keyword);
            const matchesCategory = !category || productCategory === category;
            const visible = matchesName && matchesCategory;

            card.classList.toggle('hidden', !visible);

            if (visible) visibleCount++;
        });

        emptyMessage.classList.toggle('hidden', visibleCount > 0);
    }

    searchInput.addEventListener('input', filterProducts);
    categoryFilter.addEventListener('change', filterProducts);
</script>

@endsection
