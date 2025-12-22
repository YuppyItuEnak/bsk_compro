<x-layouts.users.layout>
    <section class="relative bg-[#002473] py-32 md:py-48 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 translate-x-32 pointer-events-none">
        </div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-600 rounded-full blur-[150px] opacity-20"></div>
        <div class="absolute top-0 left-1/4 w-64 h-64 bg-blue-400 rounded-full blur-[120px] opacity-10"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center">
                <div
                    class="inline-flex items-center space-x-2 bg-white/10 border border-white/20 px-4 py-2 rounded-full mb-8">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                    </span>
                    <span class="text-blue-100 text-sm font-medium tracking-wider uppercase">Katalog Industri</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6">
                    Produk <span class="text-blue-400">Kami</span>
                </h1>

                <div class="w-24 h-1.5 bg-blue-500 mx-auto mb-8 rounded-full"></div>

                <p class="text-xl md:text-2xl text-blue-100/90 max-w-3xl mx-auto leading-relaxed">
                    Rangkaian <span class="text-white font-semibold">produk berkualitas tinggi</span> untuk memenuhi
                    kebutuhan presisi industri Anda dengan standar internasional.
                </p>

                <div class="mt-16 animate-bounce opacity-50">
                    <svg class="w-8 h-8 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto py-20 px-6">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 mb-16">
            <div class="max-w-xl">
                <h2 class="text-3xl font-bold text-slate-800 mb-3">Solusi Material Presisi</h2>
                <p class="text-slate-500 text-base leading-relaxed">
                    Kami menyediakan berbagai jenis material karet dan EVA dengan spesifikasi yang dapat disesuaikan
                    dengan kebutuhan aplikasi Anda.
                </p>
            </div>

            <div class="w-full lg:max-w-md">
                <form action="#" method="GET" class="relative group">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none transition-colors group-focus-within:text-[#002473]">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="search" name="search"
                        class="block w-full py-4 pl-12 pr-32 bg-gray-50 border border-gray-200 text-slate-800 text-sm rounded-2xl focus:ring-4 focus:ring-blue-100 focus:border-[#002473] focus:bg-white transition-all outline-none shadow-sm"
                        placeholder="Cari produk (misal: EVA Sheet, Rubber Roll)..." />
                    <button type="submit"
                        class="absolute right-2 top-2 bottom-2 bg-[#002473] hover:bg-[#001c5a] text-white px-6 rounded-xl text-sm font-bold transition-all shadow-md active:scale-95">
                        Cari
                    </button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse ($products as $product)
                <div class="group h-full">
                    <x-card-product
                        class="h-full border-none shadow-sm group-hover:shadow-2xl transition-all duration-500 rounded-3xl overflow-hidden"
                        title="{{ $product->nama_produk }}"
                        harga="Rp {{ number_format($product->harga_produk, 0, ',', '.') }}"
                        image="{{ asset('storage/' . $product->gambar_produk) }}"
                        description="{{ Str::limit($product->deskripsi_produk, 100) }}"
                        routeLink="{{ route('products.show', $product->id) }}" />
                </div>
            @empty
                <div class="col-span-full py-24 text-center">
                    <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-700">Produk Tidak Ditemukan</h3>
                    <p class="text-slate-500 mt-2">Maaf, saat ini katalog produk kami belum tersedia atau tidak
                        ditemukan.</p>
                </div>
            @endforelse
        </div>
    </section>

    <section class="relative bg-[#002473] py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <svg class="h-full w-full" fill="none" viewBox="0 0 400 400">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" stroke="white" stroke-width="0.5" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white leading-tight">Butuh Spesifikasi <span
                    class="text-blue-400">Custom?</span></h2>
            <p class="text-xl text-blue-100/90 mt-4 leading-relaxed font-medium">
                Kami siap membantu Anda menemukan solusi material yang tepat untuk kebutuhan spesifik proyek Anda.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#"
                    class="bg-white text-[#002473] hover:bg-blue-50 px-8 py-4 rounded-2xl font-bold transition-all shadow-xl hover:-translate-y-1">
                    Konsultasi Gratis
                </a>
                <a href="#"
                    class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-2xl font-bold transition-all shadow-xl hover:-translate-y-1">
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </section>
</x-layouts.users.layout>
