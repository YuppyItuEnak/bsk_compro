@php
    $user = auth()->user();
@endphp

<x-layouts.admin.layout>

    <h1 class="text-3xl font-extrabold text-gray-900 mb-8 border-b pb-2">
        Kelola Profil & Pengaturan Akun
    </h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        {{-- SIDEBAR PROFIL --}}
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-xl p-6 border border-gray-100">

                <div class="flex flex-col items-center pb-8 border-b border-gray-200">
                    {{-- AVATAR --}}
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover"
                        src="{{ asset('storage/' . auth()->user()->image_url) ?? 'images/default_avatar.jpg' }}"
                        alt="{{ $user->name }}" />

                    <h5 class="mb-1 text-xl font-medium text-gray-900">
                        {{ $user->name }}
                    </h5>

                    <span class="text-sm text-gray-500">
                        {{ ucfirst($user->role ?? 'User') }}
                    </span>

                    <a href="#"
                        class="mt-4 px-4 py-2 text-sm font-semibold text-indigo-700 bg-indigo-50 rounded-lg hover:bg-indigo-100 transition">
                        Upload Foto Baru
                    </a>
                </div>

                {{-- RINGKASAN AKTIVITAS --}}
                <div class="mt-6 space-y-4">
                    <h3 class="text-lg font-semibold text-gray-800">Ringkasan Aktivitas</h3>

                    {{-- TOTAL PRODUK --}}
                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                        <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Produk</p>
                            <p class="text-xl font-bold text-green-700">
                                {{ $products->count() ?? 0 }}
                            </p>
                        </div>
                    </div>

                    {{-- TOTAL ARTIKEL (OPSIONAL) --}}
                    <div class="flex items-center p-3 bg-yellow-50 rounded-lg">
                        <svg class="w-6 h-6 text-yellow-600 mr-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Artikel</p>
                            <p class="text-xl font-bold text-yellow-700">
                                {{ $articles->count() ?? 0 }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- FORM --}}
        <div class="lg:col-span-2 space-y-8">

            {{-- UPDATE PROFIL --}}
            <div class="bg-white rounded-xl shadow-xl p-6 border border-gray-100">
                <h2 class="text-2xl font-semibold text-indigo-700 mb-6 pb-3 border-b border-indigo-100">
                    Informasi Profil
                </h2>

                <form action="#" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                            required>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>

            {{-- GANTI PASSWORD --}}
            <div class="bg-white rounded-xl shadow-xl p-6 border border-gray-100">
                <h2 class="text-2xl font-semibold text-red-700 mb-6 pb-3 border-b border-red-100">
                    Keamanan (Ganti Password)
                </h2>

                <form action="#" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password Saat Ini</label>
                        <input type="password" name="current_password"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password Baru</label>
                        <input type="password" name="password"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                            required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500"
                            required>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-6 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700">
                            Ganti Password
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layouts.admin.layout>
