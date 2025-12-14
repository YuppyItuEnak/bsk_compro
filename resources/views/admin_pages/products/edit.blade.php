<x-layouts.admin.layout>
    <h1 class="text-3xl font-extrabold text-gray-900 mb-8 border-b pb-2">
        ✨ Edit Product
    </h1>

    <div class="bg-white rounded-xl shadow-2xl p-8 max-w-4xl mx-auto border border-gray-100">

        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                {{-- KOLOM KIRI: Informasi Utama & FAVORIT --}}
                <div>
                    <h2 class="text-xl font-semibold text-indigo-700 mb-4 pb-2 border-b border-indigo-100">
                        Informasi Utama Produk
                    </h2>

                    {{-- 1. Nama Produk (nama_produk) --}}
                    <div class="mb-5">
                        <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-2">Nama Produk</label>
                        <input type="text" id="nama_produk" name="nama_produk"
                            placeholder="Masukkan nama produk yang jelas" {{-- PERBAIKAN 1: Pastikan VALUE-nya benar --}}
                            value="{{ old('nama_produk', $product->nama_produk) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150"
                            required>
                        <p class="mt-1 text-xs text-gray-500">Contoh: Sepatu Lari Ultraboost 22</p>
                    </div>

                    {{-- 2. Harga Produk (harga_produk) --}}
                    <div class="mb-5">
                        <label for="harga_produk" class="block text-sm font-medium text-gray-700 mb-2">Harga Produk
                            (Rp)</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="number" id="harga_produk" name="harga_produk" placeholder="Cth: 150000"
                                {{-- PERBAIKAN 2: VALUE harus di properti value, bukan placeholder. Tambahkan old() untuk validasi error --}} value="{{ old('harga_produk', $product->harga_produk) }}"
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition duration-150"
                                required>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Hanya masukkan angka tanpa titik atau koma.</p>
                    </div>

                    {{-- 3. Field Baru: Is Favorite (is_favorite) --}}
                    <div class="mb-5 border-t pt-4">
                        <label for="is_favorite" class="block text-sm font-medium text-gray-700 mb-2">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 text-red-500 mr-1.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Produk Unggulan?
                            </span>
                        </label>
                        <select id="is_favorite" name="is_favorite"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150"
                            required>
                            {{-- PERBAIKAN 3: Gunakan @selected() untuk menentukan nilai yang tersimpan --}}
                            <option value="1" @selected(old('is_favorite', $product->is_favorite) == 1)>Ya (Tampilkan di Beranda/Featured)
                            </option>
                            <option value="0" @selected(old('is_favorite', $product->is_favorite) == 0)>Tidak</option>
                        </select>
                        <p class="mt-1 text-xs text-gray-500">Tentukan apakah produk ini masuk kategori favorit atau
                            unggulan.</p>
                    </div>
                </div>

                {{-- KOLOM KANAN: Media dan Deskripsi --}}
                <div>
                    <h2 class="text-xl font-semibold text-indigo-700 mb-4 pb-2 border-b border-indigo-100">
                        Media dan Deskripsi
                    </h2>

                    {{-- 4. Deskripsi Produk (deskripsi_produk) --}}
                    <div class="mb-5">
                        <label for="deskripsi_produk" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi
                            Produk</label>
                        <textarea id="deskripsi_produk" name="deskripsi_produk" rows="6"
                            placeholder="Jelaskan detail, fitur, dan spesifikasi produk di sini..."
                            class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 p-3"
                            required>{{ old('deskripsi_produk',$product->deskripsi_produk) }}
                        </textarea>
                    </div>

                    {{-- 5. Gambar Produk Utama (gambar_produk) --}}
                    <div class="mb-5">
                        <label for="gambar_produk" class="block text-sm font-medium text-gray-700 mb-2">Gambar Produk
                            Utama (Saat Ini: {{ basename($product->gambar_produk ?? 'Tidak Ada') }})</label>

                        {{-- Tambahkan Tampilan Gambar Produk Saat Ini (opsional tapi disarankan) --}}
                        @if ($product->gambar_produk ?? false)
                            <div class="mb-3">
                                {{-- Asumsi path gambar_produk disimpan di storage/public --}}
                                <img src="{{ asset('storage/' . $product->gambar_produk) }}"
                                    alt="Gambar Produk Saat Ini"
                                    class="w-24 h-24 object-cover rounded-md border border-gray-200 shadow-sm">
                            </div>
                        @endif

                        <div
                            class="flex items-center space-x-4 p-3 border-2 border-dashed border-gray-300 rounded-lg hover:border-indigo-400 transition duration-150 cursor-pointer">
                            <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <input type="file" id="gambar_produk" name="gambar_produk"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 cursor-pointer"
                                accept="image/*"> {{-- Hapus 'required' jika ini adalah update dan gambar lama sudah ada --}}
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Biarkan kosong jika tidak ingin mengubah gambar. Format:
                            JPG, PNG. Ukuran maksimal: 2MB.</p>
                    </div>
                </div>
            </div>

            <div class="pt-6 mt-8 border-t border-gray-200 flex justify-end">
                <button type="submit"
                    class="px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg hover:bg-indigo-700 transition duration-300 transform hover:scale-[1.02]">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Simpan Perubahan
                    </span>
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin.layout>
