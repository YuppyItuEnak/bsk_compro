<x-layouts.admin.layout>
    <h1 class="text-3xl font-extrabold text-gray-900 mb-8 border-b pb-2">
        ✨ Tambah Produk Baru
    </h1>

    <div class="bg-white rounded-xl shadow-2xl p-8 max-w-4xl mx-auto border border-gray-100">

        <form action="{{ route('adminProducts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div>
                    <h2 class="text-xl font-semibold text-indigo-700 mb-4 pb-2 border-b border-indigo-100">
                        Informasi Utama
                    </h2>

                    <div class="mb-5">
                        <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-2">Nama Produk</label>
                        <input type="text" id="nama_produk" name="nama_produk"
                            placeholder="Masukkan nama produk yang jelas"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150"
                            required>
                        <p class="mt-1 text-xs text-gray-500">Contoh: Sepatu Lari Ultraboost 22</p>
                    </div>

                    <div class="mb-5">
                        <label for="harga_produk" class="block text-sm font-medium text-gray-700 mb-2">Harga Produk
                            (Rp)</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="number" id="harga_produk" name="harga_produk" placeholder="Cth: 450000"
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 transition duration-150"
                                required>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Hanya masukkan angka tanpa titik atau koma.</p>
                    </div>
                </div>

                <div>
                    <h2 class="text-xl font-semibold text-indigo-700 mb-4 pb-2 border-b border-indigo-100">
                        Media dan Deskripsi
                    </h2>

                    <div class="mb-5">
                        <label for="deskripsi_produk" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi
                            Produk</label>
                        <textarea id="deskripsi_produk" name="deskripsi_produk" rows="6"
                            placeholder="Jelaskan detail, fitur, dan spesifikasi produk di sini..."
                            class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition duration-150 p-3"
                            required></textarea>
                    </div>

                    <div class="mb-5">
                        <label for="gambar_produk" class="block text-sm font-medium text-gray-700 mb-2">Gambar Produk
                            Utama</label>

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
                                accept="image/*" required>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Format: JPG, PNG. Ukuran maksimal: 2MB.</p>
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
                        Simpan Produk Baru
                    </span>
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin.layout>
