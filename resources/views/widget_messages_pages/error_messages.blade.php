<x-layouts.users.layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 p-4 sm:p-6">

        <div class="w-full max-w-lg bg-white rounded-xl shadow-2xl p-8 sm:p-12 text-center border-t-8 border-amber-500">

            <div class="mb-6">
                <svg class="mx-auto h-16 w-16 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>

            <h1 class="text-3xl font-extrabold text-gray-900 mb-2">Sistem Sedang dalam Perbaikan</h1>

            <p class="text-lg text-gray-600 mb-6">
                Kami sedang melakukan pembaruan dan peningkatan kualitas sistem untuk memberikan layanan yang lebih baik.
                Mohon maaf atas ketidaknyamanan ini. Kami akan segera kembali!
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-6">
                <a href="{{ route('dashboard.index') }}"
                    class="px-6 py-3 bg-amber-500 text-white font-semibold rounded-lg shadow-md hover:bg-amber-600 transition duration-300 ease-in-out w-full sm:w-auto">
                    Kembali ke Beranda
                </a>
            </div>

            <details class="text-left text-sm text-gray-500 mt-6 pt-4 border-t border-gray-200 cursor-pointer">
                <summary class="font-medium text-gray-700 hover:text-amber-500">Informasi Tambahan</summary>
                <div class="mt-2 bg-gray-50 p-3 rounded-md overflow-x-auto">
                    <code class="block whitespace-pre-wrap">
                        Status Sistem: Maintenance (Service Unavailable)
                    </code>
                </div>
            </details>

        </div>
    </div>
</x-layouts.users.layout>
