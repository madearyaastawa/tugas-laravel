@extends('layouts.app')

@section('content')

{{-- Hero About --}}
<section class="overflow-hidden bg-green-50">
    <div class="mx-auto grid max-w-7xl items-center gap-10 px-5 py-16 sm:px-6 md:grid-cols-2 md:py-24 lg:px-8">

        <div>
            <span class="inline-flex items-center rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-800">
                Tentang Rimbun.id
            </span>

            <h1 class="mt-6 text-4xl font-extrabold leading-tight tracking-tight text-green-950 sm:text-5xl">
                Tumbuhkan suasana
                <span class="text-green-700">alami</span>
                dari rumah.
            </h1>

            <p class="mt-5 max-w-lg text-base leading-7 text-gray-600">
                Rimbun.id hadir untuk membantu siapa saja menemukan tanaman
                dan perlengkapan yang sesuai untuk menciptakan ruang yang
                lebih hijau, nyaman, dan menyenangkan.
            </p>

            <a href="{{ url('/produk') }}"
               class="mt-8 inline-flex rounded-xl bg-green-700 px-6 py-3 font-semibold text-white transition hover:bg-green-800">
                Jelajahi Produk
            </a>
        </div>

        <div class="relative">
            <div class="absolute -inset-4 rounded-[2rem] bg-green-200/50 blur-2xl"></div>

            <div class="relative flex min-h-80 items-center justify-center overflow-hidden rounded-3xl bg-green-200 sm:min-h-[400px]">
                <div class="absolute -right-10 -top-10 h-48 w-48 rounded-full bg-lime-300/60"></div>
                <div class="absolute -bottom-12 -left-10 h-56 w-56 rounded-full bg-green-300/70"></div>

                <div class="relative text-center">
                    <div class="text-9xl">🪴</div>
                    <p class="mt-4 text-xl font-bold text-green-950">
                        Tumbuh Bersama Alam
                    </p>
                    <p class="mt-2 text-sm text-green-800">
                        Mulai dari satu tanaman.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Cerita Kami --}}
<section class="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-3xl text-center">
        <p class="text-sm font-semibold uppercase tracking-wider text-green-700">
            Cerita Kami
        </p>

        <h2 class="mt-3 text-3xl font-bold text-green-950 sm:text-4xl">
            Lebih Dekat dengan Alam
        </h2>

        <p class="mt-6 leading-8 text-gray-600">
            Kami percaya bahwa tanaman dapat memberikan sentuhan alami
            yang membuat sebuah ruangan terasa lebih hidup. Karena itu,
            Rimbun.id menyediakan pilihan tanaman hias dan perlengkapan
            untuk membantu pelanggan memulai maupun mengembangkan koleksi
            tanaman mereka.
        </p>

        <p class="mt-4 leading-8 text-gray-600">
            Kami ingin membuat pengalaman memilih dan merawat tanaman
            terasa lebih mudah, baik bagi pemula maupun pencinta tanaman.
            Setiap pilihan menjadi langkah kecil untuk menghadirkan
            suasana hijau dalam keseharian.
        </p>
    </div>
</section>

{{-- Visi dan Misi --}}
<section class="border-y border-green-100 bg-white">
    <div class="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8">

        <div class="mb-10 text-center">
            <p class="text-sm font-semibold uppercase tracking-wider text-green-700">
                Tujuan Kami
            </p>
            <h2 class="mt-3 text-3xl font-bold text-green-950">
                Visi dan Misi
            </h2>
        </div>

        <div class="grid gap-6 md:grid-cols-2">

            {{-- Visi --}}
            <div class="rounded-2xl border border-green-100 bg-green-50 p-7 sm:p-9">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-3xl">
                    🌱
                </div>

                <h3 class="mt-5 text-2xl font-bold text-green-950">
                    Visi
                </h3>

                <p class="mt-4 leading-7 text-gray-600">
                    Menjadi pilihan terpercaya dalam memenuhi kebutuhan
                    tanaman hias dan perlengkapannya untuk menciptakan
                    lingkungan yang lebih hijau dan nyaman.
                </p>
            </div>

            {{-- Misi --}}
            <div class="rounded-2xl border border-stone-200 bg-white p-7 sm:p-9">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-lime-50 text-3xl">
                    🍃
                </div>

                <h3 class="mt-5 text-2xl font-bold text-green-950">
                    Misi
                </h3>

                <ul class="mt-4 space-y-3 text-sm leading-6 text-gray-600">
                    <li class="flex gap-3">
                        <span class="font-bold text-green-700">✓</span>
                        Menyediakan pilihan tanaman dan perlengkapan yang beragam.
                    </li>
                    <li class="flex gap-3">
                        <span class="font-bold text-green-700">✓</span>
                        Membantu pelanggan memilih tanaman sesuai kebutuhannya.
                    </li>
                    <li class="flex gap-3">
                        <span class="font-bold text-green-700">✓</span>
                        Mendorong kebiasaan merawat tanaman dalam kehidupan sehari-hari.
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

{{-- Nilai Kami --}}
<section class="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-8">

    <div class="text-center">
        <p class="text-sm font-semibold uppercase tracking-wider text-green-700">
            Nilai Kami
        </p>

        <h2 class="mt-3 text-3xl font-bold text-green-950">
            Hal yang Kami Utamakan
        </h2>

        <p class="mx-auto mt-3 max-w-2xl text-gray-500">
            Kami ingin menjadikan pengalaman berbelanja tanaman
            lebih praktis dan menyenangkan.
        </p>
    </div>

    <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

        <article class="rounded-2xl border border-stone-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-lg">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-3xl">
                🌿
            </div>

            <h3 class="mt-5 text-lg font-bold text-green-950">
                Pilihan Beragam
            </h3>

            <p class="mt-2 text-sm leading-6 text-gray-500">
                Beragam tanaman dan perlengkapan untuk kebutuhan rumah
                maupun ruang kerja.
            </p>
        </article>

        <article class="rounded-2xl border border-stone-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-lg">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-lime-50 text-3xl">
                💚
            </div>

            <h3 class="mt-5 text-lg font-bold text-green-950">
                Mudah untuk Pemula
            </h3>

            <p class="mt-2 text-sm leading-6 text-gray-500">
                Membantu pelanggan menemukan tanaman yang sesuai
                dengan pengalaman dan kebutuhannya.
            </p>
        </article>

        <article class="rounded-2xl border border-stone-200 bg-white p-6 transition hover:-translate-y-1 hover:shadow-lg sm:col-span-2 lg:col-span-1">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-3xl">
                🏡
            </div>

            <h3 class="mt-5 text-lg font-bold text-green-950">
                Ruang Lebih Asri
            </h3>

            <p class="mt-2 text-sm leading-6 text-gray-500">
                Menginspirasi lebih banyak orang untuk menghadirkan
                tanaman dalam ruang sehari-hari.
            </p>
        </article>

    </div>
</section>

{{-- CTA --}}
<section class="bg-green-950">
    <div class="mx-auto max-w-7xl px-5 py-14 text-center sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white">
            Siap Menambah Sentuhan Hijau?
        </h2>

        <p class="mx-auto mt-4 max-w-xl leading-7 text-green-200">
            Temukan tanaman dan perlengkapan yang sesuai untuk
            melengkapi ruang favoritmu.
        </p>

        <a href="{{ url('/produk') }}"
           class="mt-7 inline-flex rounded-xl bg-lime-400 px-6 py-3 font-semibold text-green-950 transition hover:bg-lime-300">
            Lihat Semua Produk
        </a>
    </div>
</section>

@endsection