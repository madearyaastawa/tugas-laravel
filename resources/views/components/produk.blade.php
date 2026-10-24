@extends('layouts.app')

@section('content')

{{-- Header --}}
<section class="bg-green-50">
    <div class="mx-auto max-w-7xl px-5 py-10 sm:px-6 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-wider text-green-700">
            Rimbun.id
        </p>

        <h1 class="mt-2 text-3xl font-extrabold text-green-950 sm:text-4xl">
            Produk
        </h1>

        <p class="mt-3 text-gray-600">
            Temukan tanaman yang sesuai dengan ruang dan gayamu.
        </p>
    </div>
</section>

{{-- Produk --}}
<section id="produk" class="border-y border-green-100 bg-white">
    <div class="mx-auto max-w-7xl px-5 pb-16">

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

@endsection