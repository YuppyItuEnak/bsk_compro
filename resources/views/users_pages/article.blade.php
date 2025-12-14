<x-layouts.users.layout>
    <!-- HERO SECTION -->
    <section class="bg-blue-800 text-white py-50 text-center">
        <h1 class="text-5xl font-bold max-w-3xl mx-auto leading-tight">Artikel & Berita</h1>
        <p class="text-2xl mt-4 max-w-xl mx-auto opacity-90">Informasi terkini seputar produk, teknologi, dan
            perkembangan PT. BSK Indonesia</p>
    </section>

    <section class="max-w-screen-xl mx-auto py-16">
        <!-- Title -->
        <h2 class="text-4xl text-center font-extrabold text-blue-800 mb-2">
            Article Terbaru dari PT. BSK Indonesia
        </h2>

        <!-- Subtitle -->
        <p class="text-gray-600 font-semibold text-center text-sm max-w-xl mx-auto mb-10">
            Kami menyediakan berbagai jenis material karet dan EVA dengan spesifikasi yang dapat disesuaikan dengan
            kebutuhan aplikasi Anda.
        </p>



        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-6">
            @forelse ($articles as $article)
                <x-card-article image="{{ asset('storage/' . $article->gambar_artikel) }}"
                    date="{{ $article->created_at->translatedFormat('d F Y') }}"
                    time="{{ $article->created_at->format('H:i') }}" title="{{ $article->judul_artikel }}"
                    description="{{ Str::limit($article->isi_artikel, 120) }}" />
            @empty
                <p class="col-span-3 text-center text-gray-500">
                    Artikel belum tersedia.
                </p>
            @endforelse
        </div>

    </section>
</x-layouts.users.layout>
