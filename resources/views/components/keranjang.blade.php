@extends('layouts.app')

@section('content')

{{-- Header --}}
<section class="bg-green-50">
    <div class="mx-auto max-w-7xl px-5 py-10 sm:px-6 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-wider text-green-700">
            Rimbun.id
        </p>

        <h1 class="mt-2 text-3xl font-extrabold text-green-950 sm:text-4xl">
            Keranjang Belanja
        </h1>

        <p class="mt-3 text-gray-600">
            Periksa kembali pilihan tanamanmu sebelum melanjutkan belanja.
        </p>
    </div>
</section>

{{-- Keranjang --}}
<section class="mx-auto max-w-7xl px-5 py-10 sm:px-6 lg:px-8">

    {{-- Keranjang Kosong --}}
    <div id="emptyCart"
         class="hidden rounded-2xl border border-stone-200 bg-white px-6 py-16 text-center">

        <div class="text-7xl">🛒</div>

        <h2 class="mt-5 text-xl font-bold text-green-950">
            Keranjangmu masih kosong
        </h2>

        <p class="mt-2 text-sm text-gray-500">
            Yuk, temukan tanaman favoritmu dan tambahkan ke keranjang.
        </p>

        <a href="{{ url('/produk') }}"
           class="mt-6 inline-flex rounded-xl bg-green-700 px-6 py-3
                  font-semibold text-white transition hover:bg-green-800">
            Mulai Belanja
        </a>
    </div>

    {{-- Isi Keranjang --}}
    <div id="cartContent" class="grid items-start gap-8 lg:grid-cols-3">

        {{-- Daftar Produk --}}
        <div class="space-y-5 lg:col-span-2">

            <div class="flex items-center justify-between gap-4">
                <h2 class="text-xl font-bold text-green-950">
                    Produk Pilihan
                </h2>

                <button id="clearCart"
                        type="button"
                        class="text-sm font-medium text-red-600 transition hover:text-red-800">
                    Kosongkan
                </button>
            </div>

            <div id="cartItems" class="space-y-4"></div>

            <a href="{{ url('/produk') }}"
               class="inline-flex items-center gap-2 text-sm font-semibold text-green-700 hover:text-green-900">
                <span aria-hidden="true">←</span>
                Lanjut Belanja
            </a>
        </div>

        {{-- Ringkasan Belanja --}}
        <aside class="rounded-2xl border border-stone-200 bg-white p-6 shadow-sm">

            <h2 class="text-xl font-bold text-green-950">
                Ringkasan Belanja
            </h2>

            <div class="mt-6 space-y-4 text-sm">
                <div class="flex justify-between gap-4">
                    <span class="text-gray-500">Jumlah barang</span>
                    <span id="totalItems" class="font-medium text-gray-800">0</span>
                </div>

                <div class="flex justify-between gap-4">
                    <span class="text-gray-500">Subtotal</span>
                    <span id="subtotal" class="font-semibold text-gray-800">Rp0</span>
                </div>

                <div class="flex justify-between gap-4">
                    <span class="text-gray-500">Pengiriman</span>
                    <span class="text-right text-gray-500">Dihitung saat checkout</span>
                </div>

                <div class="border-t border-stone-200 pt-4">
                    <div class="flex items-center justify-between gap-4">
                        <span class="font-bold text-green-950">Total sementara</span>
                        <span id="grandTotal"
                              class="text-lg font-extrabold text-green-800">
                            Rp0
                        </span>
                    </div>
                </div>
            </div>

            <button id="checkoutButton"
                    type="button"
                    class="mt-6 w-full rounded-xl bg-green-700 px-5 py-3
                           font-semibold text-white transition hover:bg-green-800
                           disabled:cursor-not-allowed disabled:bg-gray-300">
                Lanjut ke Checkout
            </button>

            <div class="mt-5 rounded-xl bg-green-50 p-4">
                <p class="text-xs leading-5 text-green-800">
                    Pastikan jumlah dan pilihan produk sudah sesuai.
                    Biaya pengiriman akan dihitung pada tahap checkout.
                </p>
            </div>
        </aside>

    </div>
</section>

<script>
    const cartItemsElement = document.getElementById('cartItems');
    const emptyCartElement = document.getElementById('emptyCart');
    const cartContentElement = document.getElementById('cartContent');
    const checkoutButton = document.getElementById('checkoutButton');

    const formatRupiah = (value) =>
        'Rp' + Number(value).toLocaleString('id-ID');

    function getCart() {
        try {
            const cart = JSON.parse(localStorage.getItem('rimbun_cart'));

            return Array.isArray(cart) ? cart : [];
        } catch {
            return [];
        }
    }

    function saveCart(cart) {
        localStorage.setItem('rimbun_cart', JSON.stringify(cart));
        renderCart();
        updateCartBadge();
    }

    function updateCartBadge() {
        const total = getCart().reduce(
            (sum, item) => sum + (Number(item.qty) || 0),
            0
        );

        document.querySelectorAll('[data-cart-count]').forEach((badge) => {
            badge.textContent = total;
            badge.classList.toggle('hidden', total === 0);
        });
    }

    function renderCart() {
        const cart = getCart().filter(
            item => Number(item.qty) > 0 && Number(item.price) >= 0
        );

        const isEmpty = cart.length === 0;

        emptyCartElement.classList.toggle('hidden', !isEmpty);
        cartContentElement.classList.toggle('hidden', isEmpty);

        cartItemsElement.replaceChildren();

        let totalItems = 0;
        let subtotal = 0;

        cart.forEach((item) => {
            const qty = Number(item.qty);
            const price = Number(item.price);

            totalItems += qty;
            subtotal += price * qty;

            const card = document.createElement('article');

            card.className =
                'flex flex-col gap-4 rounded-2xl border border-stone-200 ' +
                'bg-white p-4 sm:flex-row sm:items-center sm:p-5';

            // Gambar atau ilustrasi produk
            const image = document.createElement('div');

            image.className =
                'flex h-28 w-full shrink-0 items-center justify-center ' +
                'rounded-xl bg-green-50 text-5xl sm:h-28 sm:w-28';

            image.textContent = item.emoji || '🪴';

            // Informasi produk
            const details = document.createElement('div');
            details.className = 'min-w-0 flex-1';

            const name = document.createElement('h3');
            name.className = 'font-bold text-green-950';
            name.textContent = item.name || 'Produk Rimbun.id';

            const category = document.createElement('p');
            category.className = 'mt-1 text-sm text-gray-500';
            category.textContent = item.category || 'Tanaman';

            const priceText = document.createElement('p');
            priceText.className = 'mt-3 font-semibold text-green-800';
            priceText.textContent = formatRupiah(price);

            details.append(name, category, priceText);

            // Kontrol jumlah dan hapus
            const actions = document.createElement('div');

            actions.className =
                'flex items-center justify-between gap-3 sm:flex-col ' +
                'sm:items-end sm:justify-center';

            const quantity = document.createElement('div');

            quantity.className =
                'flex items-center rounded-lg border border-stone-200';

            const minus = document.createElement('button');
            minus.type = 'button';
            minus.className =
                'px-3 py-2 text-gray-600 transition hover:bg-stone-100';
            minus.textContent = '−';
            minus.setAttribute('aria-label', 'Kurangi jumlah');

            const count = document.createElement('span');
            count.className = 'min-w-8 text-center text-sm font-semibold';
            count.textContent = qty;

            const plus = document.createElement('button');
            plus.type = 'button';
            plus.className =
                'px-3 py-2 text-gray-600 transition hover:bg-stone-100';
            plus.textContent = '+';
            plus.setAttribute('aria-label', 'Tambah jumlah');

            minus.addEventListener('click', () => {
                const updated = getCart();
                const product = updated.find(p => p.id === item.id);

                if (!product) return;

                product.qty = Number(product.qty) - 1;

                if (product.qty <= 0) {
                    saveCart(updated.filter(p => p.id !== item.id));
                } else {
                    saveCart(updated);
                }
            });

            plus.addEventListener('click', () => {
                const updated = getCart();
                const product = updated.find(p => p.id === item.id);

                if (!product) return;

                const stock = Number(product.stock);

                if (Number.isFinite(stock) && stock > 0 &&
                    Number(product.qty) >= stock) {
                    alert('Jumlah produk sudah mencapai batas stok.');
                    return;
                }

                product.qty = Number(product.qty) + 1;
                saveCart(updated);
            });

            quantity.append(minus, count, plus);

            const remove = document.createElement('button');
            remove.type = 'button';
            remove.className =
                'text-sm font-medium text-red-600 transition hover:text-red-800';
            remove.textContent = 'Hapus';

            remove.addEventListener('click', () => {
                saveCart(getCart().filter(p => p.id !== item.id));
            });

            actions.append(quantity, remove);
            card.append(image, details, actions);

            // Subtotal per produk
            const itemSubtotal = document.createElement('p');

            itemSubtotal.className =
                'border-t border-stone-100 pt-3 text-right text-sm ' +
                'font-semibold text-gray-700 sm:text-left';

            itemSubtotal.textContent =
                'Subtotal: ' + formatRupiah(price * qty);

            const productContent = document.createElement('div');
            productContent.className = 'min-w-0 flex-1';
            productContent.append(card, itemSubtotal);

            cartItemsElement.append(productContent);
        });

        document.getElementById('totalItems').textContent = totalItems;
        document.getElementById('subtotal').textContent = formatRupiah(subtotal);
        document.getElementById('grandTotal').textContent = formatRupiah(subtotal);

        checkoutButton.disabled = isEmpty;
    }

    document.getElementById('clearCart').addEventListener('click', () => {
        if (getCart().length === 0) return;

        if (confirm('Apakah kamu yakin ingin mengosongkan keranjang?')) {
            saveCart([]);
        }
    });

    checkoutButton.addEventListener('click', () => {
        if (getCart().length === 0) return;

        alert(
            'Fitur checkout belum tersedia. ' +
            'Kamu dapat menghubungkan tombol ini ke halaman checkout Laravel.'
        );
    });

    renderCart();
    updateCartBadge();
</script>

@endsection
