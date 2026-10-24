<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Rimbun.id — Toko Tanaman Online' }}</title>
    <meta name="description" content="Temukan tanaman hias, sukulen, dan perlengkapan tanaman untuk menghadirkan suasana alami di rumah bersama Rimbun.id.">

    <!-- Styles / Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-stone-50 text-gray-800 antialiased">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    <footer class="bg-green-950 text-green-100">
        <div class="mx-auto max-w-7xl px-5 py-8">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-xl font-bold">Rimbun<span class="text-lime-400">.id</span></h2>
                    <p class="mt-1 text-sm text-green-200">
                        Hadirkan alam di setiap sudut rumah.
                    </p>
                </div>

                <p class="text-sm text-green-300">
                    &copy; {{ date('Y') }} Rimbun.id. Semua hak dilindungi.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
