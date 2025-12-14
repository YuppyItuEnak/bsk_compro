<x-layouts.admin.layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Detail Info Perusahaan</h1>

        <a href="{{ route('companyInfo.edit', $companyInfo->id) }}"
            class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
            Edit Info Perusahaan
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="divide-y divide-gray-200">

            {{-- Alamat --}}
            <div class="flex px-6 py-4">
                <div class="w-1/4 text-sm font-medium text-gray-500">
                    Alamat Perusahaan
                </div>
                <div class="w-3/4 text-sm text-gray-900 whitespace-pre-line">
                    {{ $companyInfo->alamat_perusahaan ?? 'Alamat tidak tersedia.' }}
                </div>
            </div>

            {{-- Email --}}
            <div class="flex px-6 py-4 bg-gray-50">
                <div class="w-1/4 text-sm font-medium text-gray-500">
                    Email Perusahaan
                </div>
                <div class="w-3/4 text-sm text-gray-900">
                    {{ $companyInfo->email_perusahaan ?? 'Email tidak tersedia' }}
                </div>
            </div>

            {{-- Telepon --}}
            <div class="flex px-6 py-4">
                <div class="w-1/4 text-sm font-medium text-gray-500">
                    Telepon Perusahaan
                </div>
                <div class="w-3/4 text-sm text-gray-900">
                    {{ $companyInfo->telepon_perusahaan ?? 'Telepon tidak tersedia' }}
                </div>
            </div>

            {{-- Terakhir Update --}}
            <div class="flex px-6 py-4 bg-gray-50">
                <div class="w-1/4 text-sm font-medium text-gray-500">
                    Terakhir Diupdate
                </div>
                <div class="w-3/4 text-sm text-gray-900">
                    {{ $companyInfo->updated_at->format('d M Y, H:i') }} WIB
                </div>
            </div>

        </div>
    </div>
</x-layouts.admin.layout>
