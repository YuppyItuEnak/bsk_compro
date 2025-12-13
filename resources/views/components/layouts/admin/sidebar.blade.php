<div class="flex flex-col w-64 bg-gray-800 text-white shadow-xl">
    <div class="flex items-center justify-center h-16 bg-indigo-700">
        <span class="text-xl font-semibold uppercase tracking-wider">Admin Panel</span>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">

        <a href="{{ route('dashboard.index') }}" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition duration-200
            ">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            Dashboard
        </a>

        <p class="text-xs font-semibold text-gray-500 uppercase pt-4 pb-1 tracking-wider">Manajemen Konten</p>

        <a href="{{ route('adminProducts.index') }}" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition duration-200
            ">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
            Produk
        </a>

        <a href="/admin/articles" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition duration-200
            ">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            Artikel
        </a>

        <p class="text-xs font-semibold text-gray-500 uppercase pt-4 pb-1 tracking-wider">Pengaturan Sistem</p>

        <a href="/admin/company-info" class="flex items-center px-4 py-2 text-sm font-medium rounded-lg transition duration-200
            ">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-2a3 3 0 00-3-3H9a3 3 0 00-3 3v2"></path></svg>
            Info Perusahaan
        </a>
    </nav>

    <div class="p-4 border-t border-gray-700">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center w-full px-4 py-2 text-sm font-medium text-red-400 rounded-lg hover:bg-gray-700 transition duration-200">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3v-3m0-6V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                Log Out
            </button>
        </form>
    </div>
</div>
