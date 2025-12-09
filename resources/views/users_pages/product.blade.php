<x-layouts.users.layout>
    <!-- HERO SECTION -->
    <section class="bg-blue-800 text-white py-50 text-center">
        <h1 class="text-5xl font-bold max-w-3xl mx-auto leading-tight">Produk Kami</h1>
        <p class="text-2xl mt-4 max-w-xl mx-auto opacity-90">Rangkaian produk berkualitas tinggi untuk kebutuhan industri
            Anda</p>
    </section>

    <section class="max-w-screen-xl mx-auto py-16 px-6">
        <!-- Title -->
        <h2 class="text-4xl text-center font-extrabold text-blue-800 mb-2">
            Solusi Material untuk Setiap Kebutuhan
        </h2>

        <!-- Subtitle -->
        <p class="text-gray-600 font-semibold text-center text-sm max-w-xl mx-auto mb-10">
            Kami menyediakan berbagai jenis material karet dan EVA dengan spesifikasi yang dapat disesuaikan dengan
            kebutuhan aplikasi Anda.
        </p>

        <div class="mb-10">
            <form class="max-w-md mx-auto">
                <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only">Search</label>

                <div class="relative">
                    <!-- Icon -->
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>

                    <!-- Input -->
                    <input type="search" id="search"
                        class="block w-full p-3 ps-9 bg-white border border-gray-300
                       text-gray-800 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 shadow-xs
                       placeholder:text-gray-500"
                        placeholder="Search" required />

                    <!-- Button -->
                    <button type="button"
                        class="absolute end-1.5 bottom-1.5 text-white bg-blue-700 hover:bg-blue-800
                       border border-transparent focus:ring-4 focus:ring-blue-300 shadow-xs
                       font-medium leading-5 rounded text-xs px-3 py-1.5 focus:outline-none">
                        Search
                    </button>
                </div>
            </form>
        </div>



        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <x-card-product class="h-full" title="EVA PE" harga="Rp. 450,000" image="images/dumm4.jpg"
                description="Material ringan, fleksibel, dan tahan air. Ideal untuk alas kaki, packaging, dan aplikasi olahraga."></x-card-product>
            <x-card-product class="h-full" title="EVA Rubber" harga="Rp. 450,000" image="images/dumm4.jpg"
                description="Kombinasi kekuatan karet dengan fleksibilitas EVA. Tahan lama, anti-slip, dan tahan cuaca ekstrem."></x-card-product>
            <x-card-product class="h-full" title="Pylon Rubber" harga="Rp. 450,000" image="images/dumm4.jpg"
                description="Material karet padat dengan daya tahan tinggi. Cocok untuk aplikasi industri berat dan konstruksi."></x-card-product>
        </div>
    </section>


    <section class="bg-blue-800 text-white py-50 text-center">
        <h1 class="text-4xl font-bold max-w-3xl mx-auto leading-tight">Butuh Spesifikasi Custom?</h1>
        <p class="text-2xl font-bold max-w-3xl mx-auto leading-tight mt-2">Kami siap membantu Anda menemukan solusi material yang tepat untuk kebutuhan spesifik Anda.</p>
        <div class="mt-15">
            <a href="#" class="bg-red-600 mx-auto border border-red px-6 py-3 text-white font-semibold rounded-lg">
                Hubungi Kami
            </a>
        </div>

    </section>
</x-layouts.users.layout>
