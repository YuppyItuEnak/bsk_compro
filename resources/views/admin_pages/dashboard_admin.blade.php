<x-layouts.admin.layout>

    <h1 class="text-3xl font-extrabold text-gray-900 mb-8 border-b pb-2">
        <span class="text-indigo-600">Dashboard</span> Admin
    </h1>

    {{-- ======================================================= --}}
    {{-- A. WIDGET KARTU RINGKASAN DATA (Quick Stats Cards) --}}
    {{-- ======================================================= --}}

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

        {{-- 1. Total Produk --}}
        <div
            class="bg-white rounded-xl shadow-xl p-6 border-l-4 border-indigo-600 hover:shadow-2xl transition duration-300 transform hover:scale-[1.01]">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-indigo-600 uppercase tracking-wider">Total Produk</p>
                    <p class="text-4xl font-extrabold text-gray-900 mt-1">{{ $totalProducts ?? 0 }}</p>
                </div>
                <svg class="w-10 h-10 text-indigo-500 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
            </div>
            <a href="{{ route('products.index') ?? '#' }}"
                class="text-xs font-medium text-indigo-700 hover:text-indigo-900 mt-4 block border-t pt-2">Lihat Detail
                &rarr;</a>
        </div>

        {{-- 2. Total Artikel --}}
        <div
            class="bg-white rounded-xl shadow-xl p-6 border-l-4 border-green-600 hover:shadow-2xl transition duration-300 transform hover:scale-[1.01]">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-green-600 uppercase tracking-wider">Total Artikel</p>
                    <p class="text-4xl font-extrabold text-gray-900 mt-1">{{ $totalArticles ?? 0 }}</p>
                </div>
                <svg class="w-10 h-10 text-green-500 opacity-80" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </div>
            <a href="{{ route('articles.index') ?? '#' }}"
                class="text-xs font-medium text-green-700 hover:text-green-900 mt-4 block border-t pt-2">
                Lihat Detail &rarr;
            </a>
        </div>

        {{-- 3. Artikel Terbaru --}}
        <div
            class="bg-white rounded-xl shadow-xl p-6 border-l-4 border-yellow-600 hover:shadow-2xl transition duration-300 transform hover:scale-[1.01]">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-yellow-600 uppercase tracking-wider">Artikel Baru</p>
                    <p class="text-4xl font-extrabold text-gray-900 mt-1">{{ $recentArticles ?? 0 }}</p>
                </div>
                <svg class="w-10 h-10 text-yellow-500 opacity-80" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <span class="text-xs font-medium text-gray-500 mt-4 block border-t pt-2">7 Hari Terakhir</span>
        </div>

        {{-- 4. Placeholder Tambahan (Contoh: Total Pengguna) --}}
        <div
            class="bg-white rounded-xl shadow-xl p-6 border-l-4 border-red-600 hover:shadow-2xl transition duration-300 transform hover:scale-[1.01]">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-semibold text-red-600 uppercase tracking-wider">Total Pengguna</p>
                    <p class="text-4xl font-extrabold text-gray-900 mt-1">{{ $totalUser }}</p>
                </div>
                <svg class="w-10 h-10 text-red-500 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m0 0v-2a3 3 0 014.514-2.368M7 20h10a2 2 0 002-2v-2a2 2 0 00-2-2H7a2 2 0 00-2 2v2a2 2 0 002 2zm0 0h.01M10 9a2 2 0 100-4 2 2 0 000 4zm7 0a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
            </div>
            <span class="text-xs font-medium text-gray-500 mt-4 block border-t pt-2">Lihat Daftar Pengguna &rarr;</span>
        </div>
    </div>

    {{-- ======================================================= --}}
    {{-- B. AKTIVITAS TERBARU (Timeline/Log View) --}}
    {{-- ======================================================= --}}

    <div class="bg-white rounded-xl shadow-2xl p-6 border border-gray-100">
        <h2 class="text-2xl font-extrabold text-gray-900 mb-6 pb-2 border-b border-gray-100">
            Aktivitas Terbaru Admin
        </h2>

        {{-- Struktur Timeline Vertikal --}}
        <ol class="relative border-s border-gray-200 ml-3">
            @forelse ($activities ?? collect() as $activity)
                @php
                    $type = $activity->type ?? 'company';

                    switch ($type) {
                        case 'product':
                            $color = 'indigo';
                            $titleText = 'Produk Baru Ditambahkan';
                            $icon = '<svg class="w-3 h-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4m-5 9h14l1 2H4l1-2z"/>
                             </svg>';
                            break;

                        case 'article':
                            $color = 'green';
                            $titleText = 'Artikel Baru Dipublikasikan';
                            $icon = '<svg class="w-3 h-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                             </svg>';
                            break;

                        default:
                            // company
                            $color = 'orange';
                            $titleText = 'Info Perusahaan Diperbarui';
                            $icon = '<svg class="w-3 h-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 21h18M5 21V7l7-4 7 4v14"/>
                             </svg>';
                    }
                @endphp

                <li class="mb-8 ms-6">
                    {{-- DOT Timeline --}}
                    <span
                        class="absolute flex items-center justify-center w-4 h-4 bg-{{ $color }}-100 rounded-full -start-2 ring-4 ring-white shadow-md">
                        {!! $icon !!}
                    </span>

                    {{-- Judul --}}
                    <h3 class="mb-1 text-base font-semibold text-gray-900">
                        {{ $titleText }}
                    </h3>

                    {{-- Waktu --}}
                    <time class="block mb-2 text-xs font-normal leading-none text-gray-500">
                        {{ $activity->created_at->diffForHumans() }} - {{ $activity->waktu_publikasi}}
                    </time>

                    {{-- Detail --}}
                    <p
                        class="text-sm font-medium text-gray-800 bg-{{ $color }}-50 p-3 rounded-lg border-s-4 border-{{ $color }}-400">
                        @if ($type === 'product')
                            <span class="font-bold">Produk:</span> {{ $activity->title }}<br>
                            <span class="font-bold">Harga:</span>
                            Rp{{ number_format($activity->subtitle, 0, ',', '.') }}
                        @elseif ($type === 'article')
                            <span class="font-bold">Artikel:</span> {{ $activity->title }}<br>
                            <span class="font-bold">Ringkasan:</span> {{ Str::limit($activity->subtitle, 100) }}
                        @else
                            <span class="font-bold">Perubahan:</span><br>
                            Alamat: {{ Str::limit($activity->title, 120) }}
                            <span class="font-bold"></span><br>
                            Email: {{ Str::limit($activity->subtitle, 120) }}
                        @endif
                    </p>
                </li>

            @empty
                <li class="p-6 text-center text-gray-500 text-base bg-gray-50 rounded-lg">
                    Belum ada aktivitas terbaru.
                </li>
            @endforelse
        </ol>

    </div>

</x-layouts.admin.layout>
