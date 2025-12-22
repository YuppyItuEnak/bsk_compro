<x-layouts.admin.layout>
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-extrabold text-gray-900">Detail Profil Perusahaan</h1>
            <p class="text-sm text-gray-500 mt-1">Informasi ini akan ditampilkan pada halaman profil publik perusahaan.</p>
        </div>

        <a href="{{ route('companyInfo.edit', $companyInfo->id) }}"
            class="inline-flex items-center px-5 py-2.5 bg-blue-600 text-white font-bold rounded-xl shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            Edit Informasi
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        {{-- KOLOM KIRI: INFO UTAMA & KONTAK --}}
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="bg-blue-600 px-6 py-4">
                    <h3 class="text-white font-bold flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-10V4m0 10V4m-4 10h4"></path></svg>
                        Identitas Dasar
                    </h3>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <label class="text-xs font-bold text-gray-400 uppercase">Nama Perusahaan</label>
                        <p class="text-lg font-extrabold text-gray-900">{{ $companyInfo->nama_perusahaan }}</p>
                    </div>
                    <div>
                        <label class="text-xs font-bold text-gray-400 uppercase">Email Resmi</label>
                        <p class="text-gray-900 font-medium">{{ $companyInfo->email_perusahaan }}</p>
                    </div>
                    <div>
                        <label class="text-xs font-bold text-gray-400 uppercase">Telepon</label>
                        <p class="text-gray-900 font-medium">{{ $companyInfo->telepon_perusahaan ?? '-' }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                <h3 class="text-gray-900 font-bold mb-4 flex items-center border-b pb-2">
                    <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    Media Sosial
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-pink-600 font-bold">Instagram</span>
                        @if($companyInfo->insta_link)
                            <a href="{{ $companyInfo->insta_link }}" target="_blank" class="text-blue-600 hover:underline">Kunjungi &rarr;</a>
                        @else
                            <span class="text-gray-400">Tidak ada</span>
                        @endif
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-blue-700 font-bold">Facebook</span>
                        @if($companyInfo->facebook_link)
                            <a href="{{ $companyInfo->facebook_link }}" target="_blank" class="text-blue-600 hover:underline">Kunjungi &rarr;</a>
                        @else
                            <span class="text-gray-400">Tidak ada</span>
                        @endif
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-900 font-bold">TikTok</span>
                        @if($companyInfo->tiktok_link)
                            <a href="{{ $companyInfo->tiktok_link }}" target="_blank" class="text-blue-600 hover:underline">Kunjungi &rarr;</a>
                        @else
                            <span class="text-gray-400">Tidak ada</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- KOLOM KANAN: KONTEN NARASI (TENTANG, VISI, MISI, ALAMAT) --}}
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8">
                <section class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center">
                        <span class="w-1.5 h-6 bg-blue-600 rounded-full mr-3"></span>
                        Tentang Perusahaan
                    </h3>
                    <p class="text-gray-700 leading-relaxed text-justify">
                        {{ $companyInfo->tentang_perusahaan ?? 'Belum ada informasi tentang perusahaan.' }}
                    </p>
                </section>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <section>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center">
                            <span class="w-1.5 h-6 bg-green-500 rounded-full mr-3"></span>
                            Visi
                        </h3>
                        <p class="text-gray-700 leading-relaxed italic">
                            "{{ $companyInfo->visi_perusahaan ?? 'Visi belum diatur.' }}"
                        </p>
                    </section>
                    <section>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center">
                            <span class="w-1.5 h-6 bg-yellow-500 rounded-full mr-3"></span>
                            Misi
                        </h3>
                        <div class="text-gray-700 leading-relaxed whitespace-pre-line text-sm">
                            {{ $companyInfo->misi_perusahaan ?? 'Misi belum diatur.' }}
                        </div>
                    </section>
                </div>

                <section class="pt-6 border-t border-gray-100">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Alamat Operasional
                    </h3>
                    <p class="text-gray-700 whitespace-pre-line">
                        {{ $companyInfo->alamat_perusahaan }}
                    </p>
                </section>
            </div>

            <div class="flex justify-between items-center px-4 text-xs text-gray-400 font-medium">
                <span>Dibuat: {{ $companyInfo->created_at->format('d/m/Y H:i') }}</span>
                <span>Terakhir Diperbarui: {{ $companyInfo->updated_at->diffForHumans() }}</span>
            </div>
        </div>
    </div>
</x-layouts.admin.layout>
