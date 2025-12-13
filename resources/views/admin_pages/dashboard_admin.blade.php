<x-layouts.admin.layout>

    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Admin</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-indigo-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Produk</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalProducts }}</p>
                </div>
                <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
            </div>
            <a href="#"
                class="text-xs text-indigo-500 hover:text-indigo-700 mt-2 block">Lihat Detail &rarr;</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Artikel</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalArticles }}</p>
                </div>
                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                </svg>
            </div>
            <a href="#" class="text-xs text-green-500 hover:text-green-700 mt-2 block">Lihat
                Detail &rarr;</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-yellow-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Artikel Terbaru</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $recentArticles }}</p>
                </div>
                <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <span class="text-xs text-yellow-500 mt-2 block">7 Hari Terakhir</span>
        </div>

        <div class="bg-white rounded-lg shadow-md p-5 border-l-4 border-red-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Produk Terlaris</p>
                    <p class="text-xl font-bold text-gray-900 truncate">Nama Produk A</p>
                </div>
                <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
            <span class="text-xs text-red-500 mt-2 block">Periode Bulan Ini</span>
        </div>
    </div>

   <div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Aktivitas Terbaru</h2>

    <ul class="space-y-4">
        @forelse ($activities ?? collect() as $activity)
            <li class="flex items-start space-x-3">
                <span class="mt-1 w-2 h-2 rounded-full
                    {{ $activity->type === 'product' ? 'bg-indigo-500' : 'bg-green-500' }}">
                </span>

                <div>
                    <p class="text-sm text-gray-800">
                        Admin menambahkan <br>
                        <strong>
                            {{ $activity->type === 'product' ? 'Produk' : 'Artikel' }}
                        </strong>:
                        {{ $activity->title }} , <strong>
                            {{ $activity->type === 'product' ? 'Dengan Harga': 'Isi Artikel' }}
                        </strong>
                        {{ Str::limit($activity->subtitle, 50) }}
                    </p>
                    <p class="text-xs text-gray-500">
                        {{ $activity->created_at->diffForHumans() }}
                    </p>
                </div>
            </li>
        @empty
            <p class="text-sm text-gray-500">Belum ada aktivitas.</p>
        @endforelse
    </ul>
</div>

</x-layouts.admin.layout>
