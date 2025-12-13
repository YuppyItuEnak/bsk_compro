<x-layouts.admin.layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Artikel</h1>
        <a href="#"
            class="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition duration-300">
            + Tambah Artikel Baru
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul
                        Artikel</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu
                        Publikasi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Deskripsi
                    </th>
                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi
                    </th>

                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <img class="h-10 w-10 object-cover rounded-md" src="/path/to/artikel1.jpg" alt="Gambar Artikel">
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700 max-w-md truncate">Strategi Bisnis Pemasaran Digital
                        Tahun 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">10 Des 2025 14:30</td>
                    <td class="px-6 py-4 text-sm text-gray-700 max-w-md truncate">Deskripsi singkat artikel...</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-green-600 hover:text-green-900 mr-3">Edit</a>
                        <form action="#" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900"
                                onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layouts.admin.layout>
