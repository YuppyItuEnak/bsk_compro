<x-layouts.admin.layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-extrabold text-gray-900">Manajemen Produk</h1>

        <a href="{{ route('products.create') }}"
            class="px-6 py-2 bg-indigo-600 text-white font-bold rounded-xl shadow-lg hover:bg-indigo-700 transition duration-300 transform hover:scale-[1.02] flex items-center">
            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Tambah Produk Baru
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-xl overflow-hidden border border-gray-100">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Gambar</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nama Produk</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Harga</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Deskripsi</th>
                         <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Produk Unggulan</th>
                        <th class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z">
                                </path>
                            </svg>
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($products as $product)
                        <tr class="hover:bg-indigo-50/50 transition duration-100">
                            {{-- ID --}}
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                {{ $product->id }}
                            </td>

                            {{-- Gambar --}}
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img class="h-12 w-12 object-cover rounded-lg shadow-md border border-gray-200"
                                    src="{{ asset('storage/' . $product->gambar_produk) }}"
                                    alt="{{ $product->nama_produk }}"
                                    onerror="this.src='https://via.placeholder.com/150?text=No+Image'">
                            </td>

                            {{-- Nama --}}
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 font-medium">
                                {{ $product->nama_produk }}
                            </td>

                            {{-- Harga --}}
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600 font-medium">
                                Rp {{ number_format($product->harga_produk, 0, ',', '.') }}
                            </td>

                            {{-- Deskripsi --}}
                            <td class="px-6 py-4 text-sm text-gray-600 max-w-xs truncate"
                                title="{{ $product->deskripsi_produk }}">
                                {{ $product->deskripsi_produk }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 font-medium">
                                {{ $product->is_favorite ? 'Ya' : 'Tidak' }}
                            </td>

                            {{-- Aksi --}}
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                                {{-- Bungkus Dropdown dan Tombol dalam DIV RELATIVE --}}
                                <div class="relative inline-block text-left">

                                    {{-- Tombol Trigger Dropdown --}}
                                    <button id="dropdownMenu{{ $product->id }}"
                                        data-dropdown-toggle="dropdown{{ $product->id }}"
                                        class="inline-flex items-center p-2 bg-white rounded-lg hover:bg-gray-100"
                                        type="button">
                                        {{-- Pastikan SVG ada di sini --}}
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                            </path>
                                        </svg>
                                    </button>

                                    {{-- Konten Dropdown (Ditambahkan ABSOLUTE dan RIGHT-0) --}}
                                    <div id="dropdown{{ $product->id }}"
                                        class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 absolute right-0 mt-2 origin-top-right">

                                        <ul class="py-2 text-sm text-gray-700">

                                            {{-- Tombol Edit --}}
                                            <li>
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                    class="block px-4 py-2 hover:bg-gray-100 text-indigo-600 font-medium flex items-center">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.284-8.284z">
                                                        </path>
                                                    </svg>
                                                    Edit
                                                </a>
                                            </li>

                                            {{-- Tombol Hapus --}}
                                            <li>
                                                <form action="{{ route('products.destroy', $product->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Yakin ingin hapus produk ini?')"
                                                        class="block w-full text-left px-4 py-2 text-red-600 hover:bg-red-50 font-medium flex items-center">
                                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                        Hapus
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-8 text-gray-500">
                                Data produk belum tersedia
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

        <div class="p-4 border-t border-gray-200 bg-gray-50 flex justify-between items-center text-sm text-gray-600">
            <span>Menampilkan 1 hingga {{ $products->count() }} dari {{ $products->count() }} entri</span>
            <div class="flex space-x-1">
                <button class="px-3 py-1 border rounded-lg hover:bg-gray-200">Sebelumnya</button>
                <button class="px-3 py-1 border rounded-lg bg-indigo-600 text-white">1</button>
                <button class="px-3 py-1 border rounded-lg hover:bg-gray-200">Berikutnya</button>
            </div>
        </div>
    </div>
</x-layouts.admin.layout>
