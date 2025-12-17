<x-layouts.users.layout>

    {{-- ================================================================= --}}
    {{-- A. Pengecekan Ketersediaan Data --}}
    {{-- (Tetap dipertahankan untuk penanganan error) --}}
    {{-- ================================================================= --}}
    @if (!isset($product) || $product === null)
        <div class="container mx-auto p-4 md:p-12 lg:p-20 min-h-[60vh] flex items-center justify-center">
            <div
                class="max-w-xl w-full bg-white p-10 rounded-2xl shadow-xl border border-red-300/50 text-center animate-fadeIn">
                <svg class="w-16 h-16 mx-auto mb-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                </svg>
                <h2 class="text-3xl font-extrabold text-gray-800 mb-4">Produk Tidak Ditemukan</h2>
                <p class="text-gray-600 mb-6">
                    Produk yang Anda cari tidak tersedia, telah dihapus, atau ID-nya tidak valid.
                </p>
                <a href="{{ route('home') }}"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-semibold rounded-xl shadow-md text-white bg-indigo-600 hover:bg-indigo-700 transition duration-200">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
        @php return; @endphp
    @endif

    {{-- PENTING: Variabel PHP --}}
    @php
        $companyPhoneNumber = $companyPhoneNumber ?? '';
        $cleanPhone = preg_replace('/[^0-9+]/', '', $companyPhoneNumber);
        $productName = $product->nama_produk ?? 'Produk Ini';
        $productPrice = number_format($product->harga_produk ?? 0, 0, ',', '.');
        $productPriceRaw = $product->harga_produk ?? 0;

        $waMessage = urlencode(
            "Halo, saya tertarik dengan produk *{$productName}* (Rp{$productPrice}). Mohon informasinya lebih lanjut.",
        );
        $waLink = "https://wa.me/{$cleanPhone}?text={$waMessage}";
        $imageUrl = asset('storage/' . $product->gambar_produk);
        $imageExists = $product->gambar_produk && file_exists(public_path('storage/' . $product->gambar_produk));

        $fullDescription = $product->deskripsi_produk ?? 'Tidak ada deskripsi yang tersedia.';
        // Mengambil hanya paragraf pertama/sekitar 200 karakter untuk ringkasan di atas tombol aksi
        $shortDescription = Str::limit(trim(explode("\n", $fullDescription)[0] ?? $fullDescription), 200);

        $categoryName = $product->category_name ?? 'Uncategorized';
        $tags = $product->tags ?? 'general, premium';
    @endphp

    {{-- ================================================================= --}}
    {{-- B. Tampilan Utama Produk (Lebih Dinamis) --}}
    {{-- ================================================================= --}}
    <div class="bg-white flex-1 p-6 pt-20 sm:pt-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">

            {{-- Grid utama 2 kolom --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">

                <div class="relative">
                    <div class="sticky top-4 lg:top-10">
                        {{-- Tanda Produk Featured (jika ada) --}}
                        @if ($product->is_favorite)
                            <span
                                class="absolute top-0 left-0 z-10 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-br-lg tracking-wider uppercase shadow-md">
                                Unggulan
                            </span>
                        @endif

                        <div class="w-full aspect-square border border-gray-200 shadow-lg">
                            @if ($imageExists)
                                <img src="{{ $imageUrl }}" alt="{{ $product->nama_produk }}"
                                    class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                    <span class="text-gray-500 text-xl font-semibold flex items-center">
                                        Gambar Tidak Tersedia
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="pt-2">

                    {{-- Nama Produk --}}
                    <h1 class="text-4xl md:text-5xl font-poppins text-gray-900 mb-2 leading-tight">
                        {{ $productName }}
                    </h1>



                    {{-- Harga --}}
                    <p class="text-3xl font-black text-red-600 mb-6">
                        Rp{{ $productPrice }}
                    </p>

                    {{-- Ringkasan Deskripsi (Di atas tombol aksi) --}}
                    <div class="text-gray-700 leading-relaxed text-base mb-8">
                        {!! nl2br(e($fullDescription)) !!}
                    </div>


                    <div class="pb-8 border-b border-gray-200">
                        <div class="flex items-center space-x-4 mb-4">


                            {{-- TOMBOL BELI VIA WHATSAPP --}}
                            <a href="{{ $waLink }}" target="_blank"
                                class="flex-grow inline-flex items-center justify-center px-6 py-2.5 border border-transparent text-lg font-bold rounded-sm text-white bg-green-600 hover:bg-green-700 transition duration-200 shadow-lg shadow-green-500/40">
                                <i class="fab fa-whatsapp text-xl mr-3"></i> CHAT UNTUK PEMESANAN
                            </a>
                        </div>

                        {{-- Pilihan Alternatif Kontak --}}
                        <div class="text-center text-sm text-gray-500 mt-2">
                            Atau telepon langsung:
                            <a href="tel:{{ $companyPhoneNumber }}"
                                class="text-indigo-600 hover:text-indigo-800 hover:underline font-bold transition duration-150">{{ $companyPhoneNumber }}</a>
                        </div>

                    </div>




        </div>
    </div>
</x-layouts.users.layout>
