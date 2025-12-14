<x-layouts.admin.layout>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Artikel</h1>
        <a href="{{ route('articles.create') }}"
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
                @forelse ($articles as $article)
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">
                            {{ $article->id }}
                        </td>

                        <td class="px-6 py-4">
                            @if ($article->gambar_artikel)
                                <img class="h-10 w-10 object-cover rounded-md"
                                    src="{{ asset('storage/' . $article->gambar_artikel) }}"
                                    alt="{{ $article->judul_artikel }}">
                            @else
                                <span class="text-gray-400 text-sm">Tidak ada</span>
                            @endif
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-700 max-w-xs truncate">
                            {{ $article->judul_artikel }}
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-700">
                            {{ $article->waktu_publikasi ? \Carbon\Carbon::parse($article->waktu_publikasi)->format('d M Y H:i') : '-' }}
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-700 max-w-md truncate">
                            {{ Str::limit(strip_tags($article->isi_artikel), 60) }}
                        </td>

                        <td class="px-6 py-4 text-right text-sm font-medium">
                            <a href="{{ route('articles.edit', $article->id) }}"
                                class="text-green-600 hover:text-green-900 mr-3">
                                Edit
                            </a>

                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')

                                <button type="submit" onclick="return confirm('Yakin ingin hapus artikel ini?')"
                                    class="text-red-600 hover:text-red-900">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                            Belum ada artikel
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layouts.admin.layout>
