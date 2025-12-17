<x-layouts.users.layout>
    <!-- HERO SECTION -->
    <section class="bg-blue-800 text-white py-50 text-center">
        <h1 class="text-4xl font-bold max-w-3xl mx-auto leading-tight">Flexible Strength for Every Industry.</h1>
        <p class="mt-4 max-w-sm mx-auto opacity-90">Solusi material karet dan EVA berkualitas tinggi untuk berbagai
            sektor industri.</p>
        <div class="mt-8 flex justify-center gap-4">
            <button class="px-6 py-3 bg-white text-blue-700 font-semibold rounded-lg shadow">Lihat Produk</button>
            <button class="px-6 py-3 bg-blue-500 border border-white rounded-lg">Hubungi Kami</button>
        </div>
    </section>


    <!-- ABOUT SECTION -->
    <section class="max-w-screen-xl mx-auto py-16 px-6 grid md:grid-cols-2 gap-10">
        <!-- Mobile: gambar di atas (order-1), Desktop: tetap di kanan (md:order-2) -->
        <img src="images/dumm1.jpeg" class="rounded-lg shadow order-1 md:order-2 w-full h-auto" />

        <!-- Mobile: text di bawah (order-2), Desktop: tetap di kiri (md:order-1) -->
        <div class="order-2 md:order-1">
            <h2 class="text-4xl font-bold mb-4 text-blue-600">Tentang PT. BSK Indonesia</h2>

            <p class="text-gray-800 leading-relaxed mb-4 md:mr-25">
                PT. Berkah Sarana Karet (BSK) adalah perusahaan manufaktur terkemuka
                yang berfokus pada produksi material karet dan EVA berkualitas tinggi.
                Dengan pengalaman bertahun-tahun dan teknologi produksi modern, kami
                berkomitmen memberikan solusi material terbaik untuk berbagai kebutuhan industri.
            </p>

            <p class="text-gray-600 leading-relaxed mb-6 md:mr-25">
                Kami melayani berbagai sektor mulai dari otomotif, konstruksi,
                olahraga, hingga elektronik dengan standar kualitas internasional dan harga kompetitif.
            </p>


            <a href="/about" type="button"
                class="text-white bg-blue-800 border border-transparent
           hover:bg-blue-700 focus:ring-4 focus:ring-blue-300
           shadow-md font-medium rounded-lg text-sm px-5 py-2.5
           focus:outline-none transition duration-150">
                Pelajari Lebih Lanjut
            </a>

        </div>
    </section>


    <!-- PRODUK UNGGULAN -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-screen-xl mx-auto px-6 text-center">

            <!-- Title -->
            <h2 class="text-4xl font-extrabold text-blue-800 mb-2">
                Produk unggulan
            </h2>

            <!-- Subtitle -->
            <p class="text-gray-600 text-xl max-w-2xl mx-auto mb-10">
                Rangkaian produk berkualitas tinggi yang dirancang untuk memenuhi
                berbagai kebutuhan industri Anda.
            </p>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- JIKA USER SUDAH LOGIN --}}

                @forelse ($productUnggulan->where('is_favorite', true) as $product)
                    <x-card-product class="h-full" title="{{ $product->nama_produk }}"
                        harga="Rp {{ number_format($product->harga_produk, 0, ',', '.') }}"
                        image="{{ asset('storage/' . $product->gambar_produk) }}"
                        description="{{ Str::limit($product->deskripsi_produk, 100) }}"
                        routeLink="{{ route('products.show', $product->id) }}" />
                @empty
                    <p class="col-span-3 text-center text-gray-500">
                        Produk unggulan belum tersedia.
                    </p>
                @endforelse



                {{-- JIKA USER BELUM LOGIN --}}
                {{-- @guest
                    <x-card-product class="h-full" title="EVA PE" harga="Rp. 450,000" image="images/dumm4.jpg"
                        description="Material ringan, fleksibel, dan tahan air. Ideal untuk alas kaki, packaging, dan aplikasi olahraga." />

                    <x-card-product class="h-full" title="EVA Rubber" harga="Rp. 450,000" image="images/dumm4.jpg"
                        description="Kombinasi kekuatan karet dengan fleksibilitas EVA. Tahan lama, anti-slip, dan tahan cuaca ekstrem." />

                    <x-card-product class="h-full" title="Pylon Rubber" harga="Rp. 450,000" image="images/dumm4.jpg"
                        description="Material karet padat dengan daya tahan tinggi. Cocok untuk aplikasi industri berat dan konstruksi." />
                @endguest --}}

            </div>


        </div>
    </section>




    <!-- KEUNGGULAN KAMI -->
    <section class="py-16 bg-white">
        <div class="max-w-screen-xl mx-auto text-center px-6">
            <h2 class="text-2xl font-bold mb-10">Keunggulan Kami</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <x-card-widget nameIcon="shield" title="Kualitas Konsisten"
                    description="Standar QC ketat di setiap tahap produksi untuk memastikan kualitas terbaik."></x-card-widget>
                <x-card-widget nameIcon="settings" title="Custom Order"
                    description="Kami menerima pesanan custom sesuai spesifikasi dan kebutuhan Anda."></x-card-widget>
                <x-card-widget nameIcon="money" title="Harga Kompetitif"
                    description="Harga yang bersaing dengan kualitas yang tidak pernah kompromi."></x-card-widget>

                <x-card-widget nameIcon="person" title="Tim Profesional"
                    description="Didukung oleh tim ahli yang berpengalaman di bidang material karet."></x-card-widget>
                <x-card-widget nameIcon="feather" title="Ramah Lingkungan"
                    description="Komitmen terhadap proses produksi yang berkelanjutan dan eco-friendly."></x-card-widget>
                <x-card-widget nameIcon="time" title="Pengiriman Tepat Waktu"
                    description="Sistem logistik yang efisien untuk memastikan produk sampai sesuai jadwal."></x-card-widget>
            </div>
        </div>
    </section>

    <!-- TEKNOLOGI PRODUKSI -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-screen-xl mx-auto grid md:grid-cols-2 gap-10 px-6 items-center">

            <!-- Gambar -->
            <img src="images/dumm2.jpeg" class="rounded-lg shadow w-full h-auto object-cover" />

            <!-- Konten -->
            <div class="flex flex-col"> {{-- Hapus justify-center dari sini --}}
                <h2 class="text-4xl font-bold text-blue-800 mb-4">Teknologi Produksi Modern</h2>

                <p class="text-gray-600 leading-relaxed mb-4">
                    Dilengkapi dengan mesin-mesin canggih seperti mixing machine, hydraulic press, dan
                    extruder berkualitas tinggi, kami mampu menghasilkan produk dengan presisi dan
                    konsistensi yang sempurna.
                </p>

                @php
                    $svgIcon = '
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 15C15.866 15 19 11.866 19 8C19 4.13401 15.866 1 12 1C8.13401 1 5 4.13401 5 8C5 11.866 8.13401 15 12 15Z"
                    stroke="#D22F27" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.21 13.8899L7 22.9999L12 19.9999L17 22.9999L15.79 13.8799" stroke="#D22F27"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        ';
                @endphp

                <ul class="space-y-4 mb-6">
                    <li class="flex items-start gap-3">
                        <span>{!! $svgIcon !!}</span>
                        <span class="text-gray-600 leading-relaxed">
                            Proses produksi otomatis untuk efisiensi maksimal.
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span>{!! $svgIcon !!}</span>
                        <span class="text-gray-600 leading-relaxed">
                            Sistem kontrol kualitas terintegrasi di setiap tahap produksi.
                        </span>
                    </li>

                    <li class="flex items-start gap-3">
                        <span>{!! $svgIcon !!}</span>
                        <span class="text-gray-600 leading-relaxed">
                            Kemampuan produksi skala besar dengan waktu pengiriman yang cepat.
                        </span>
                    </li>
                </ul>

                {{-- TOMBOL: Menghapus mx-auto dan menambahkan w-fit --}}
                <a href="/about" class="px-5 py-3 bg-blue-800 text-white rounded-lg w-fit mt-4 hover:bg-blue-700 transition">
                    Pelajari Teknologi Kami
                </a>
            </div>
        </div>
    </section>

    <section class="bg-blue-800 text-white py-50 text-center">
        <h1 class="text-4xl font-bold max-w-3xl mx-auto leading-tight">"Kami percaya, kekuatan industri masa depan
            dimulai dari bahan dasar yang tepat."</h1>
        <div class="w-[20%] h-3 bg-red-600 mx-auto mt-5"></div>

    </section>

</x-layouts.users.layout>
