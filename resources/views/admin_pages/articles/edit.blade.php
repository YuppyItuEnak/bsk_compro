<x-layouts.admin.layout>
    <h1 class="text-3xl font-extrabold text-gray-900 mb-8 border-b pb-2">
        📝 Edit Artikel
    </h1>

    <div class="bg-white rounded-xl shadow-2xl p-8 max-w-4xl mx-auto border border-gray-100">

        {{-- Ganti route Products.store menjadi articles.store --}}
        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- KOLOM KIRI: Informasi Utama Artikel --}}
                <div>
                    <h2 class="text-xl font-semibold text-green-700 mb-4 pb-2 border-b border-green-100">
                        Detail Artikel
                    </h2>

                    {{-- 1. Judul Artikel (dari judul_artikel) --}}
                    <div class="mb-5">
                        <label for="judul_artikel" class="block text-sm font-medium text-gray-700 mb-2">Judul
                            Artikel</label>
                        <input type="text" id="judul_artikel" name="judul_artikel"
                            placeholder="Masukkan judul artikel yang menarik" {{-- Ubah fokus warna ke hijau (green) --}}
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 transition duration-150"
                            value="{{ old('judul_artikel', $article->judul_artikel) }}" required>
                        <p class="mt-1 text-xs text-gray-500">Contoh: 5 Tips Optimasi SEO Website</p>
                    </div>

                    {{-- 2. Waktu Publikasi (dari waktu_publikasi) --}}
                    <div class="mb-5">
                        <label for="waktu_publikasi" class="block text-sm font-medium text-gray-700 mb-2">Jadwal
                            Publikasi (Opsional)</label>
                        {{-- Menggunakan type="datetime-local" untuk tanggal dan waktu --}}
                        <input type="datetime-local" id="waktu_publikasi" name="waktu_publikasi"
                            value="{{ old('waktu_publikasi', optional($article->waktu_publikasi)->format('Y-m-d\TH:i')) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 transition duration-150">
                        <p class="mt-1 text-xs text-gray-500">Kosongkan jika ingin segera dipublikasikan.</p>
                    </div>
                </div>

                {{-- KOLOM KANAN: Isi dan Media --}}
                <div>
                    <h2 class="text-xl font-semibold text-green-700 mb-4 pb-2 border-b border-green-100">
                        Konten & Media
                    </h2>

                    {{-- 3. Isi Artikel (dari isi_artikel) --}}
                    <div class="mb-5">
                        <label for="isi_artikel" class="block text-sm font-medium text-gray-700 mb-2">Isi
                            Artikel</label>
                        <textarea id="isi_artikel" name="isi_artikel" rows="6" placeholder="Tulis seluruh konten artikel Anda di sini..."
                            {{-- Ubah fokus warna ke hijau (green) --}}
                            class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 transition duration-150 p-3"
                            required>{{ old('isi_artikel', $article->isi_artikel) }}</textarea>
                    </div>

                    {{-- 4. Gambar Artikel (dari gambar_artikel) --}}
                    <div class="mb-5">
                        <label for="gambar_artikel" class="block text-sm font-medium text-gray-700 mb-2">Gambar Utama
                            Artikel</label>

                        @if (!empty($article->gambar_artikel))
                            <div class="mb-4">
                                <p class="text-sm text-gray-600 mb-2">Gambar saat ini:</p>
                                <img src="{{ asset('storage/' . $article->gambar_artikel) }}" alt="Gambar Artikel"
                                    class="w-full h-48 object-cover rounded-xl border">
                            </div>
                        @endif


                        <div {{-- Ubah hover warna ke hijau --}}
                            class="flex items-center space-x-4 p-3 border-2 border-dashed border-gray-300 rounded-lg hover:border-green-400 transition duration-150 cursor-pointer">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <input type="file" id="gambar_artikel" name="gambar_artikel" {{-- Ubah warna tombol file ke hijau --}}
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 cursor-pointer"
                                accept="image/*" required>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Gambar akan digunakan sebagai *thumbnail* artikel. Format:
                            JPG, PNG.</p>
                    </div>
                </div>
            </div>

            {{-- TOMBOL SUBMIT --}}
            <div class="pt-6 mt-8 border-t border-gray-200 flex justify-end">
                <button type="submit" {{-- Ubah warna tombol submit ke hijau --}}
                    class="px-8 py-3 bg-green-600 text-white font-bold rounded-xl shadow-lg hover:bg-green-700 transition duration-300 transform hover:scale-[1.02]">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Simpan Artikel Baru
                    </span>
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin.layout>
