<x-layouts.users.layout>

    {{-- ===============================
        A. DATA GUARD
    ================================ --}}
    @if (!$product)
        <section class="min-h-[60vh] flex items-center justify-center px-6">
            <div class="max-w-lg text-center bg-white p-10 rounded-2xl shadow-xl border border-red-200">
                <h2 class="text-2xl font-bold text-gray-900 mb-3">
                    Produk Tidak Ditemukan
                </h2>
                <p class="text-gray-600 mb-6">
                    Produk tidak tersedia atau telah dihapus.
                </p>
                <a href="{{ route('home') }}"
                    class="inline-flex items-center px-6 py-3 rounded-xl bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition">
                    Kembali ke Beranda
                </a>
            </div>
        </section>
        @php return; @endphp
    @endif

    {{-- ===============================
        B. VARIABLES
    ================================ --}}
    @php
        $cleanPhone = preg_replace('/[^0-9+]/', '', $companyPhoneNumber ?? '');
        $productName = $product->nama_produk;
        $priceFormatted = number_format($product->harga_produk, 0, ',', '.');

        $waText = urlencode("Halo, saya tertarik dengan produk *{$productName}* (Rp{$priceFormatted}).");
        $waLink = "https://wa.me/{$cleanPhone}?text={$waText}";

        $imagePath = 'storage/' . $product->gambar_produk;
        $imageExists = $product->gambar_produk && file_exists(public_path($imagePath));

        $shortDesc = Str::limit(strip_tags($product->deskripsi_produk), 180);
    @endphp

    {{-- ===============================
        C. PRODUCT DETAIL
    ================================ --}}
    <section class="bg-slate-50 pt-28 pb-24">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-2 gap-16 items-start">

                {{-- PRODUCT IMAGE --}}
                <div class="lg:sticky lg:top-28">
                    <div class="relative bg-white rounded-3xl border shadow-lg overflow-hidden">
                        @if ($product->is_favorite)
                            <span
                                class="absolute top-6 left-6 z-10 bg-red-600 text-white text-xs font-semibold px-4 py-1 rounded-full">
                                Produk Unggulan
                            </span>
                        @endif

                        @if ($imageExists)
                            <img src="{{ asset($imagePath) }}" alt="Foto {{ $productName }}"
                                class="w-full h-[520px] object-cover">
                        @else
                            <div class="h-[520px] flex items-center justify-center text-gray-400">
                                Gambar tidak tersedia
                            </div>
                        @endif
                    </div>
                </div>

                {{-- PRODUCT CONTENT --}}
                <div class="space-y-10">

                    {{-- HEADER --}}
                    <header class="space-y-4">

                        <h1 class="text-4xl font-bold text-gray-900 leading-tight">
                            {{ $productName }}
                        </h1>

                        <p class="text-3xl font-extrabold text-red-600">
                            Rp{{ $priceFormatted }}
                        </p>
                    </header>

                    {{-- SHORT DESCRIPTION --}}
                    <p class="text-gray-700 max-w-xl leading-relaxed">
                        {{ $shortDesc }}
                    </p>



                    {{-- FULL DESCRIPTION --}}
                    <article class="bg-white border rounded-2xl shadow-sm p-8">
                        <h2 class="text-2xl font-bold mb-4 text-gray-900">
                            Deskripsi Produk
                        </h2>

                        <div class="prose max-w-none">
                            {!! nl2br(e($product->deskripsi_produk)) !!}
                        </div>
                    </article>
                    {{-- CTA --}}
                    <div class="bg-white border rounded-2xl shadow-md p-8 space-y-4">
                        <a href="{{ $waLink }}" target="_blank"
                            class="flex items-center justify-center gap-3 w-full py-4 rounded-xl bg-green-600 text-white font-semibold text-lg hover:bg-green-700 transition">
                            <i class="fab fa-whatsapp text-2xl"></i>
                            Konsultasi via WhatsApp
                        </a>

                        <p class="text-center text-sm text-gray-500">
                            Atau hubungi:
                            <a href="tel:{{ $companyPhoneNumber }}"
                                class="text-indigo-600 font-semibold hover:underline">
                                {{ $companyPhoneNumber }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.users.layout>
