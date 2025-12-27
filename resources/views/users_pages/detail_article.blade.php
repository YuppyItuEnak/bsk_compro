<x-layouts.users.layout>

    {{-- ===============================
        A. DATA GUARD
    ================================ --}}
    @if (!$article)
        <section class="min-h-[60vh] flex items-center justify-center px-6">
            <div class="max-w-lg text-center bg-white p-10 rounded-2xl shadow-xl border border-red-200">
                <h2 class="text-2xl font-bold text-gray-900 mb-3">
                    Artikel Tidak Ditemukan
                </h2>
                <p class="text-gray-600 mb-6">
                    Artikel tidak tersedia atau telah dihapus.
                </p>
                <a href="{{ route('articles.index') }}"
                    class="inline-flex items-center px-6 py-3 rounded-xl bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition">
                    Kembali ke Artikel
                </a>
            </div>
        </section>
        @php return; @endphp
    @endif

    {{-- ===============================
        B. VARIABLES
    ================================ --}}
    @php
        $imagePath = 'storage/' . $article->gambar_artikel;
        $imageExists = $article->gambar_artikel && file_exists(public_path($imagePath));

        $publishDate = $article->waktu_publikasi
            ? \Carbon\Carbon::parse($article->waktu_publikasi)->translatedFormat('d F Y')
            : 'Belum dipublikasikan';
    @endphp

    {{-- ===============================
    C. ARTICLE DETAIL (READING MODE)
================================ --}}
    <section class="bg-[#f7f8fa] pt-28 pb-32">
        <div class="max-w-3xl mx-auto px-6">

            {{-- ARTICLE HEADER --}}
            <header class="mb-14 text-center">
                <p class="text-xs uppercase tracking-widest text-indigo-600 mb-4">
                    Artikel & Berita
                </p>

                <h1 class="text-4xl md:text-[2.75rem] font-extrabold text-gray-900 leading-tight">
                    {{ $article->judul_artikel }}
                </h1>

                <p class="mt-6 text-sm text-gray-500">
                    Dipublikasikan pada
                    <span class="font-medium text-gray-700">
                        {{ $publishDate }}
                    </span>
                </p>
            </header>

            {{-- ARTICLE IMAGE --}}
            @if ($imageExists)
                <figure class="mb-14">
                    <img src="{{ asset($imagePath) }}" alt="Gambar artikel {{ $article->judul_artikel }}"
                        class="w-full h-[360px] object-cover rounded-3xl shadow-lg">

                    <figcaption class="mt-3 text-xs text-center text-gray-400">
                        Ilustrasi kegiatan operasional BSK Indonesia
                    </figcaption>
                </figure>
            @endif

            <article
                class="bg-white rounded-3xl shadow-sm border border-gray-200
           px-8 md:px-12 py-12 space-y-14
           prose prose-lg prose-gray max-w-none
           prose-p:leading-[1.9]
           prose-p:mb-6">

                @php
                    $content = e($article->isi_artikel);

                    /*
    |--------------------------------------------------------------------------
    | 1. CALLOUT BLOCK (dipadatkan)
    |--------------------------------------------------------------------------
    */
                    $content = preg_replace(
                        '/\[CALLOUT\](.*?)\[\/CALLOUT\]/s',
                        '<div class="my-8 bg-gray-50 border-l-4 border-indigo-600 rounded-xl p-6">
            <p class="font-medium text-gray-800 leading-relaxed">$1</p>
        </div>',
                        $content,
                    );

                    /*
    |--------------------------------------------------------------------------
    | 2. INSIGHT BLOCK
    |--------------------------------------------------------------------------
    */
                    $content = preg_replace(
                        '/\[INSIGHT\](.*?)\[\/INSIGHT\]/s',
                        '<blockquote class="my-10 pl-6 border-l-2 border-gray-300 italic text-gray-600 text-lg">
            $1
        </blockquote>',
                        $content,
                    );

                    /*
    |--------------------------------------------------------------------------
    | 3. TIPS BLOCK
    |--------------------------------------------------------------------------
    */
                    $content = preg_replace(
                        '/\[TIPS\](.*?)\[\/TIPS\]/s',
                        '<div class="my-8 bg-indigo-50 border-l-4 border-indigo-600 rounded-xl p-6">
            <h3 class="text-sm uppercase tracking-widest text-indigo-700 mb-2">
                Tips Penting
            </h3>
            <p class="text-indigo-900 leading-relaxed">$1</p>
        </div>',
                        $content,
                    );

                    /*
    |--------------------------------------------------------------------------
    | 4. SECTION TITLE ##
    |--------------------------------------------------------------------------
    */
                    $content = preg_replace(
                        '/^## (.*)$/m',
                        '<h2 class="mt-12 mb-4 text-xl md:text-2xl font-semibold text-gray-900">$1</h2>',
                        $content,
                    );

                    /*
    |--------------------------------------------------------------------------
    | 5. BULLET LIST
    |--------------------------------------------------------------------------
    */
                    $content = preg_replace(
                        '/^- (.*)$/m',
                        '<li class="flex gap-3">
            <span class="mt-2 h-2 w-2 rounded-full bg-indigo-600"></span>
            <span class="text-gray-700">$1</span>
        </li>',
                        $content,
                    );

                    $content = preg_replace('/(<li.*<\/li>)+/s', '<ul class="my-6 space-y-2">$0</ul>', $content);

                    /*
    |--------------------------------------------------------------------------
    | 6. DIVIDER
    |--------------------------------------------------------------------------
    */
                    $content = str_replace('[DIVIDER]', '<div class="my-12 h-px bg-gray-200"></div>', $content);

                    /*
    |--------------------------------------------------------------------------
    | 7. FINAL RENDER (tanpa nl2br)
    |--------------------------------------------------------------------------
    */
                    echo $content;
                @endphp



            </article>


            {{-- READING FOOTER --}}
            <footer class="mt-20 flex flex-col gap-10">

                {{-- Divider --}}
                <div class="h-px bg-gray-200"></div>

                {{-- Navigation --}}
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
                    <a href="{{ route('articles.index') }}"
                        class="inline-flex items-center gap-3 text-indigo-600 font-semibold hover:underline">
                        ← Kembali ke Daftar Artikel
                    </a>

                    <p class="text-xs text-gray-400">
                        Terakhir diperbarui:
                        {{ $article->updated_at->translatedFormat('d F Y') }}
                    </p>
                </div>
            </footer>

        </div>
    </section>



</x-layouts.users.layout>
