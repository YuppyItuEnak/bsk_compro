<x-layouts.admin.layout>
    <h1 class="text-3xl font-extrabold text-gray-900 mb-8 border-b border-gray-200 pb-2">
        ⚙️ Perbarui Informasi Perusahaan
    </h1>

    <div class="bg-white rounded-xl shadow-xl p-8 max-w-5xl mx-auto border border-gray-200">

        <form action="{{ route('companyInfo.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- KOLOM KIRI: IDENTITAS PERUSAHAAN --}}
                <div class="space-y-6">
                    <h2 class="text-xl font-bold text-blue-700 mb-4 pb-2 border-b border-blue-100 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-10V4m0 10V4m-4 10h4">
                            </path>
                        </svg>
                        Profil Perusahaan
                    </h2>

                    {{-- Nama Perusahaan --}}
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-2">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}"
                            class="w-full bg-gray-50 text-gray-900 border border-gray-400 rounded-lg p-3 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all @error('nama_perusahaan') border-red-500 @enderror"
                            placeholder="Masukkan nama perusahaan..." required>
                        @error('nama_perusahaan')
                            <p class="text-red-600 text-xs mt-1 font-semibold">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tentang Perusahaan --}}
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-2">Tentang Perusahaan</label>
                        <textarea name="tentang_perusahaan" rows="3"
                            class="w-full bg-gray-50 text-gray-900 border border-gray-400 rounded-lg p-3 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                            placeholder="Ceritakan singkat tentang perusahaan...">{{ old('tentang_perusahaan') }}</textarea>
                    </div>

                    {{-- Visi --}}
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-2">Visi</label>
                        <input type="text" name="visi_perusahaan" value="{{ old('visi_perusahaan') }}"
                            class="w-full bg-gray-50 text-gray-900 border border-gray-400 rounded-lg p-3 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                    </div>

                    {{-- Misi --}}
                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-2">Misi</label>
                        <textarea name="misi_perusahaan" rows="2"
                            class="w-full bg-gray-50 text-gray-900 border border-gray-400 rounded-lg p-3 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">{{ old('misi_perusahaan') }}</textarea>
                    </div>
                </div>

                {{-- KOLOM KANAN: KONTAK & SOSIAL MEDIA --}}
                <div class="space-y-6">
                    <h2 class="text-xl font-bold text-blue-700 mb-4 pb-2 border-b border-blue-100 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-2 4v7a2 2 0 01-2 2H5a2 2 0 01-2-2v-7"></path>
                        </svg>
                        Kontak & Sosial Media
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold text-gray-800 mb-2">Email Perusahaan</label>
                            <input type="email" name="email_perusahaan" value="{{ old('email_perusahaan') }}"
                                class="w-full bg-gray-50 text-gray-900 border border-gray-400 rounded-lg p-3 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-800 mb-2">Telepon</label>
                            <input type="text" name="telepon_perusahaan" value="{{ old('telepon_perusahaan') }}"
                                class="w-full bg-gray-50 text-gray-900 border border-gray-400 rounded-lg p-3 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-800 mb-2">Alamat Lengkap</label>
                        <textarea name="alamat_perusahaan" rows="2"
                            class="w-full bg-gray-50 text-gray-900 border border-gray-400 rounded-lg p-3 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                            required>{{ old('alamat_perusahaan') }}</textarea>
                    </div>

                    {{-- Sosial Media Section --}}
                    <div class="p-4 bg-blue-50 rounded-lg border border-blue-200 space-y-4">
                        <p class="text-xs font-black text-blue-800 uppercase tracking-widest">Tautan Media Sosial</p>

                        <div class="flex items-center space-x-3">
                            <span class="text-pink-600 font-bold text-xs w-20">Instagram</span>
                            <input type="url" name="insta_link" placeholder="https://..."
                                value="{{ old('insta_link') }}"
                                class="flex-1 bg-white text-gray-900 border border-gray-400 rounded p-2 text-sm focus:ring-2 focus:ring-pink-500 outline-none">
                        </div>

                        <div class="flex items-center space-x-3">
                            <span class="text-blue-600 font-bold text-xs w-20">Facebook</span>
                            <input type="url" name="facebook_link" placeholder="https://..."
                                value="{{ old('facebook_link') }}"
                                class="flex-1 bg-white text-gray-900 border border-gray-400 rounded p-2 text-sm focus:ring-2 focus:ring-blue-600 outline-none">
                        </div>

                        <div class="flex items-center space-x-3">
                            <span class="text-gray-900 font-bold text-xs w-20">TikTok</span>
                            <input type="url" name="tiktok_link" placeholder="https://..."
                                value="{{ old('tiktok_link') }}"
                                class="flex-1 bg-white text-gray-900 border border-gray-400 rounded p-2 text-sm focus:ring-2 focus:ring-gray-800 outline-none">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8 mt-10 border-t border-gray-200 flex justify-between items-center">
                <a href="{{ route('companyInfo.index') }}"
                    class="text-gray-600 hover:text-red-600 font-bold transition-colors">
                    &larr; Batal
                </a>
                <button type="submit"
                    class="px-12 py-4 bg-blue-600 text-white font-black rounded-lg shadow-lg hover:bg-blue-700 hover:-translate-y-1 transition-all active:scale-95">
                    SIMPAN INFORMASI
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin.layout>
