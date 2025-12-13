<x-layouts.admin.layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Detail Info Perusahaan</h1>

        <a href="#"
            class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
            Edit Info Perusahaan
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">

        <div class="divide-y divide-gray-200">

            <div class="flex px-6 py-4">
                <div class="w-1/4 text-sm font-medium text-gray-500">Alamat Perusahaan</div>
                <div class="w-3/4 text-sm text-gray-900">
                    {{-- Ganti dengan variabel data dari controller --}}
                    Jalan Contoh Utama No. 123, Blok A, Jakarta Selatan, 12345
                </div>
            </div>

            <div class="flex px-6 py-4 bg-gray-50">
                <div class="w-1/4 text-sm font-medium text-gray-500">Email Perusahaan</div>
                <div class="w-3/4 text-sm text-gray-900">
                    {{-- Ganti dengan variabel data dari controller --}}
                    kontak@nama-perusahaan-anda.com
                </div>
            </div>

            <div class="flex px-6 py-4">
                <div class="w-1/4 text-sm font-medium text-gray-500">Telepon Perusahaan</div>
                <div class="w-3/4 text-sm text-gray-900">
                    {{-- Ganti dengan variabel data dari controller --}}
                    +62 812-3456-7890
                </div>
            </div>

            <div class="flex px-6 py-4 bg-gray-50">
                <div class="w-1/4 text-sm font-medium text-gray-500">Terakhir Diupdate</div>
                <div class="w-3/4 text-sm text-gray-900">
                    {{-- Ganti dengan variabel data dari controller --}}
                    13 Desember 2025, 14:00 WIB
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin.layout>
