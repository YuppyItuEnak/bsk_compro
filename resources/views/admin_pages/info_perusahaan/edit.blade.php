<x-layouts.admin.layout>

    <h1 class="text-3xl font-extrabold text-gray-900 mb-8 border-b pb-2">
        ⚙️ Perbarui Informasi Kontak Perusahaan
    </h1>

    <div class="bg-white rounded-xl shadow-2xl p-8 max-w-4xl mx-auto border border-gray-100">

        {{-- PERHATIAN PADA METHOD: Untuk update, gunakan PUT/PATCH.
             Pastikan route Anda disetel untuk menerima PUT/PATCH --}}
        <form action="{{ route('companyInfo.update', $companyInfo->id) }}" method="POST">
            @csrf
            {{-- Menggunakan @method('PUT') adalah standar untuk operasi update --}}
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Kolom Kiri: Alamat --}}
                <div>
                    <h2 class="text-xl font-semibold text-blue-700 mb-4 pb-2 border-b border-blue-100">
                        Lokasi & Kontak Utama
                    </h2>

                    {{-- 1. Alamat Perusahaan --}}
                    <div class="mb-5">
                        <label for="alamat_perusahaan" class="flex items-center text-sm font-medium text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Alamat Perusahaan
                        </label>
                        <textarea id="alamat_perusahaan" name="alamat_perusahaan" rows="4"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3 transition duration-150"
                            required>{{ $companyInfo->alamat_perusahaan ?? 'Masukan Alamat Perusahaan' }}</textarea>
                    </div>

                    {{-- 2. Email Perusahaan --}}
                    <div class="mb-5">
                        <label for="email_perusahaan" class="flex items-center text-sm font-medium text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-2 4v7a2 2 0 01-2 2H5a2 2 0 01-2-2v-7"></path>
                            </svg>
                            Email Perusahaan
                        </label>
                        <input type="email" id="email_perusahaan" name="email_perusahaan"
                            value="{{ $companyInfo->email_perusahaan ?? 'contact@perusahaananda.com' }}"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 transition duration-150"
                            required>
                    </div>
                </div>

                {{-- Kolom Kanan: Telepon dan Opsi Tambahan --}}
                <div>
                    <h2 class="text-xl font-semibold text-blue-700 mb-4 pb-2 border-b border-blue-100">
                        Detail Tambahan
                    </h2>

                    {{-- 3. Telepon Perusahaan --}}
                    <div class="mb-5">
                        <label for="telepon_perusahaan"
                            class="flex items-center text-sm font-medium text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            Telepon Perusahaan
                        </label>
                        <input type="tel" id="telepon_perusahaan" name="telepon_perusahaan"
                            value="{{ $companyInfo->telepon_perusahaan ?? '+62xxxxx' }}"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 transition duration-150"
                            required>
                    </div>

                    {{-- 4. Contoh Field Opsional: Link Media Sosial --}}
                    <div class="mb-5">
                        <label for="social_media" class="flex items-center text-sm font-medium text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                </path>
                            </svg>
                            Link Media Sosial (Opsional)
                        </label>
                        <input type="url" id="social_media" name="social_media"
                            placeholder="https://instagram.com/perusahaananda"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 transition duration-150">
                    </div>

                </div>
            </div>

            {{-- Separator dan Tombol Submit --}}
            <div class="pt-6 mt-8 border-t border-gray-200 flex justify-end">
                <button type="submit"
                    class="px-8 py-3 bg-blue-600 text-white font-bold rounded-xl shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-[1.02]">
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
