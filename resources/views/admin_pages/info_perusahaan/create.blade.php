<x-layouts.admin.layout>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Update Info Perusahaan</h1>

    <div class="bg-white rounded-lg shadow-md p-6 max-w-3xl">
        <form action="{{ route('company_info.update', 1) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="alamat_perusahaan" class="block text-sm font-medium text-gray-700 mb-1">Alamat
                    Perusahaan</label>
                <textarea id="alamat_perusahaan" name="alamat_perusahaan" rows="3"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500" required>Jl. Contoh No. 123, Kota ABC</textarea>
            </div>

            <div class="mb-4">
                <label for="email_perusahaan" class="block text-sm font-medium text-gray-700 mb-1">Email
                    Perusahaan</label>
                <input type="email" id="email_perusahaan" name="email_perusahaan" value="contact@perusahaananda.com"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div class="mb-6">
                <label for="telepon_perusahaan" class="block text-sm font-medium text-gray-700 mb-1">Telepon
                    Perusahaan</label>
                <input type="tel" id="telepon_perusahaan" name="telepon_perusahaan" value="+628123456789"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                    Update Info Perusahaan
                </button>
            </div>
        </form>
    </div>
</x-layouts.admin.layout>
