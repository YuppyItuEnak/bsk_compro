<x-layouts.users.layout>

    {{-- ================================================================= --}}
    {{-- A. Pengecekan Ketersediaan Data (Pertahankan, tapi buat lebih smooth) --}}
    {{-- ================================================================= --}}
    @if (!isset($product) || $product === null)
        <div class="container mx-auto p-8 lg:p-16 text-center">
            <div class="bg-white p-10 rounded-xl shadow-lg border border-red-200">
                <h2 class="text-3xl font-extrabold text-red-700 mb-4">Produk Tidak Ditemukan (404)</h2>
                <p class="text-gray-600 mb-6">
                    Produk yang Anda cari mungkin telah dihapus atau ID-nya salah.
                </p>
                <a href="{{ route('home') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition duration-150">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
        {{-- Hentikan eksekusi setelah menampilkan error --}}
        @php return; @endphp
    @endif

    {{-- PENTING: Pastikan $companyPhoneNumber tersedia, jika tidak, atur default. --}}
    @php
        $companyPhoneNumber = $companyPhoneNumber ?? '6281234567890'; // Default jika variabel tidak dikirim Controller

        // URL WhatsApp
        $cleanPhone = preg_replace('/[^0-9+]/', '', $companyPhoneNumber);
        $productName = $product->nama_produk ?? 'Produk Ini';
        $productPrice = number_format($product->harga_produk ?? 0, 0, ',', '.');

        $waMessage = urlencode(
            "Halo, saya tertarik dengan produk *{$productName}* (Rp{$productPrice}). Mohon informasinya lebih lanjut.",
        );
        $waLink = "https://wa.me/{$cleanPhone}?text={$waMessage}";
    @endphp

    {{-- ================================================================= --}}
    {{-- B. Tampilan Utama Produk --}}
    {{-- ================================================================= --}}
    <div class="container mx-auto px-4 py-16 lg:py-24">

        <div class="max-w-6xl mx-auto bg-white rounded-3xl shadow-xl lg:shadow-2xl overflow-hidden border border-gray-100">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 p-8 md:p-12">

                {{-- KOLOM KIRI: GAMBAR PRODUK --}}
                <div class="relative flex justify-center items-center">

                    {{-- Tanda Produk Favorit/Featured (Desain lebih halus) --}}
                    @if ($product->is_favorite)
                        <span
                            class="absolute top-0 right-0 z-10 bg-red-500 text-white text-xs font-bold px-4 py-1.5 rounded-bl-xl tracking-widest uppercase shadow-lg">
                            ⭐ Unggulan
                        </span>
                    @endif

                    @php
                        $imageUrl = asset('storage/' . $product->gambar_produk);
                        $imageExists =
                            $product->gambar_produk && file_exists(public_path('storage/' . $product->gambar_produk));
                    @endphp

                    @if ($imageExists)
                        <img src="{{ $imageUrl }}" alt="{{ $product->nama_produk }}"
                            class="w-full h-auto object-cover rounded-2xl shadow-2xl transition-transform duration-500 hover:scale-105 border border-gray-100">
                    @else
                        {{-- Placeholder lebih menonjol --}}
                        <div class="w-full h-80 lg:h-[450px] bg-gray-100 rounded-2xl flex items-center justify-center shadow-inner border border-gray-300">
                            <span class="text-gray-500 text-lg font-medium">Gambar Produk Tidak Tersedia</span>
                        </div>
                    @endif
                </div>

                {{-- KOLOM KANAN: DETAIL & PEMBELIAN --}}
                <div class="pt-4 lg:pt-0">
                    {{-- Nama Produk --}}
                    <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-4 leading-snug">
                        {{ $product->nama_produk ?? 'Nama Produk Tidak Ditemukan' }}
                    </h1>

                    {{-- Harga (Penekanan Visual Tinggi) --}}
                    <div class="mb-8 p-4 bg-indigo-50 rounded-xl border border-indigo-200">
                        <span class="block text-sm font-medium text-indigo-700">Harga Jual</span>
                        <p class="text-5xl font-black text-indigo-800">
                            Rp{{ number_format($product->harga_produk ?? 0, 0, ',', '.') }}
                        </p>
                    </div>

                    {{-- DESKRIPSI PRODUK --}}
                    <div class="mb-8 border-t pt-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-3">Detail & Spesifikasi</h2>
                        <div class="text-gray-700 leading-relaxed space-y-4 text-base">
                            {{-- Menggunakan nl2br dan e() untuk keamanan dan format --}}
                            {!! nl2br(e($product->deskripsi_produk ?? 'Tidak ada deskripsi yang tersedia untuk produk ini.')) !!}
                        </div>
                    </div>

                    {{-- TOMBOL BELI VIA WHATSAPP (Lebih Berani) --}}
                    <a href="{{ $waLink }}" target="_blank"
                        class="w-full inline-flex items-center justify-center px-8 py-4 border border-transparent text-xl font-black rounded-xl shadow-green-400/50 text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 transition duration-300 transform hover:translate-y-[-2px]">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95l-1.4 5.15 5.34-1.39c1.45.79 3.09 1.21 4.65 1.21 5.46 0 9.91-4.45 9.91-9.91s-4.45-9.91-9.91-9.91zm4.79 14.77c-.12.35-.49.37-.77.37-1.3 0-3.81-1.34-5.34-2.87-1.53-1.53-2.87-4.04-2.87-5.34 0-.28.02-.65.37-.77l.79-.26c.26-.08.57-.02.78.22l.85.99c.14.16.2.39.06.59l-.48.59c-.06.06-.06.18 0 .24 1.12 2.37 3.37 4.54 5.74 5.66.06.06.18.06.24 0l.59-.48c.2-.14.43-.08.59.06l.99.85c.24.21.3.52.22.78l-.26.79z" />
                        </svg>
                        PESAN SEKARANG VIA WHATSAPP
                    </a>

                    {{-- Pilihan Alternatif --}}
                    <div class="mt-4 text-center text-sm text-gray-600">
                        Atau hubungi via telepon: <a href="tel:{{ $companyPhoneNumber }}"
                            class="text-indigo-600 hover:text-indigo-800 hover:underline font-bold transition duration-150">{{ $companyPhoneNumber }}</a>
                    </div>
                </div>
            </div>

            {{-- ================================================================= --}}
            {{-- C. Bagian Metadata / Info Tambahan (Dibuat lebih terstruktur) --}}
            {{-- ================================================================= --}}
            <div class="p-8 md:px-12 bg-gray-50 border-t border-gray-200">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-2">Informasi Produk Tambahan</h3>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-sm">

                    {{-- 1. Status Favorit --}}
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-100">
                        <p class="text-xs font-medium text-gray-500 uppercase tracking-wider">Status Unggulan</p>
                        <p class="font-bold text-lg {{ $product->is_favorite ? 'text-red-600' : 'text-gray-900' }}">
                            {{ $product->is_favorite ? 'Ya' : 'Tidak' }}
                        </p>
                    </div>

                    {{-- 2. Kategori --}}
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-100">
                        <p class="text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</p>
                        <p class="font-semibold text-lg text-gray-900">General (Contoh)</p>
                    </div>

                    {{-- 3. Stok --}}
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-100">
                        <p class="text-xs font-medium text-gray-500 uppercase tracking-wider">Status Stok</p>
                        <p class="font-bold text-lg text-green-600">Tersedia</p>
                    </div>

                    {{-- 4. Tanggal Rilis (Contoh) --}}
                    <div class="p-3 bg-white rounded-lg shadow-sm border border-gray-100">
                        <p class="text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Ditambahkan</p>
                        <p class="font-semibold text-lg text-gray-900">
                            {{ $product->created_at->format('d M Y') ?? '-' }}
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-layouts.users.layout>
