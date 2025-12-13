<x-layouts.admin.layout>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Produk Baru</h1>

    <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
                <input type="text" id="nama_produk" name="nama_produk"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="harga_produk" class="block text-sm font-medium text-gray-700 mb-1">Harga Produk (Rp)</label>
                <input type="number" id="harga_produk" name="harga_produk"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    required>
            </div>

            <div class="mb-4">
                <label for="deskripsi_produk" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi
                    Produk</label>
                <textarea id="deskripsi_produk" name="deskripsi_produk" rows="4"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
            </div>

            <div class="mb-6">
                <label for="gambar_produk" class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk</label>
                <input type="file" id="gambar_produk" name="gambar_produk"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                    accept="image/*" required>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition duration-300">
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin.layout>
