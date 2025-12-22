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
                    <span class="text-blue-100 text-sm font-medium tracking-wider uppercase">Update & Insight</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6">
                    Artikel & <span class="text-blue-400">Berita</span>
                </h1>

                <div class="w-24 h-1.5 bg-blue-500 mx-auto mb-8 rounded-full"></div>

                <p class="text-xl md:text-2xl text-blue-100/90 max-w-3xl mx-auto leading-relaxed">
                    Informasi terkini seputar <span class="text-white font-semibold">inovasi produk</span>, teknologi
                    industri, dan perkembangan terbaru dari PT. BSK Indonesia.
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

    <section class="max-w-7xl mx-auto py-24 px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6 border-b border-gray-100 pb-8">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 tracking-tight">
                    Update Terbaru
                </h2>
                <p class="text-slate-500 mt-3 text-lg">
                    Eksplorasi wawasan mendalam mengenai material karet, EVA, dan solusi manufaktur masa depan.
                </p>
            </div>
            <div class="hidden md:block">
                <span
                    class="text-sm font-bold text-[#002473] bg-blue-50 px-4 py-2 rounded-lg uppercase tracking-widest border border-blue-100">
                    {{ count($articles) }} Artikel Tersedia
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse ($articles as $article)
                <div class="group cursor-pointer">
                    <x-card-article image="{{ asset('storage/' . $article->gambar_artikel) }}"
                        date="{{ \Carbon\Carbon::parse($article->waktu_publikasi)->translatedFormat('d F Y') }}"
                        time="{{ \Carbon\Carbon::parse($article->waktu_publikasi)->format('H:i') }}"
                        title="{{ $article->judul_artikel }}" description="{{ Str::limit($article->isi_artikel, 120) }}"
                        class="transition-all duration-500 transform group-hover:-translate-y-2" />
                </div>
            @empty
                <div class="col-span-full py-20 text-center">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gray-50 rounded-full mb-4">
                        <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2zM14 4V8H18"></path>
                        </svg>
                    </div>
                    <p class="text-xl text-gray-400 font-medium">Belum ada artikel yang dipublikasikan saat ini.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-20 flex justify-center">
            {{-- $articles->links() --}}
        </div>
    </section>
</x-layouts.users.layout>
