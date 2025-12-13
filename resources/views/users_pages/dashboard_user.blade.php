<x-layouts.users.layout>

    <div class="min-h-screen w-full bg-gray-50 pt-10 pb-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">👤 Dashboard Profil Pengguna</h2>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div class="lg:col-span-1 space-y-8">

                    <div class="bg-white p-8 border border-gray-100 rounded-2xl shadow-xl">
                        <div class="flex flex-col items-center">
                            <img class="w-32 h-32 mb-4 rounded-full object-cover border-4 border-white ring-4 ring-blue-200 shadow-lg"
                                src="{{ $user->image_url ? asset('storage/' . $user->image_url) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&color=ffffff&background=2563eb&size=128' }}"
                                alt="User Image" />

                            <h5 class="text-2xl font-bold text-gray-800 tracking-tight mb-1">
                                {{ $user->name }}
                            </h5>
                            <span
                                class="text-sm text-blue-700 font-medium bg-blue-100 px-3 py-1 rounded-full capitalize mb-4">
                                {{ $user->role }}
                            </span>

                            <div class="flex gap-3 w-full justify-center">
                                <button type="button"
                                    class="flex-1 text-white bg-blue-600 hover:bg-blue-700 rounded-xl text-base font-semibold px-4 py-2 transition duration-200 shadow-md">
                                    Edit Profil
                                </button>
                                <button type="button"
                                    class="flex-1 text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-xl text-base font-medium px-4 py-2 transition duration-200 border border-gray-200">
                                    Hapus Akun
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100">
                        <h6 class="text-lg font-semibold text-gray-700 mb-4 border-b pb-2">Aktivitas Ringkas</h6>

                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-600 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-red-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Aktivitas Terakhir
                            </span>
                            <span class="font-bold text-sm text-gray-600">
                                @if (isset($user) && $user->updated_at)
                                    @if (\Carbon\Carbon::parse($user->updated_at)->isToday())
                                        Hari ini
                                    @elseif (\Carbon\Carbon::parse($user->updated_at)->isYesterday())
                                        Kemarin
                                    @else
                                        {{ \Carbon\Carbon::parse($user->updated_at)->format('d M Y') }}
                                    @endif
                                @else
                                    Belum Ada Aktivitas
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-8">

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

                        <div
                            class="rounded-xl border-l-4 border-blue-600 bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium uppercase tracking-wider text-gray-500">
                                    <i class="fas fa-calendar-day mr-2 text-blue-500"></i> Hari Menjadi Member
                                </p>
                                <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-4 4h4M4 11h16m-2 4h-4m-6 0h-4m-2 4h12M4 7h16"></path>
                                </svg>
                            </div>
                            <p class="mt-2 text-2xl font-extrabold text-gray-900">
                                {{ \Carbon\Carbon::parse($user->created_at)->diffInDays(\Carbon\Carbon::now()) }}
                            </p>
                        </div>


                        <div
                            class="rounded-xl border-l-4 border-yellow-600 bg-white p-6 shadow-lg transition duration-300 hover:shadow-xl">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium uppercase tracking-wider text-gray-500">
                                    <i class="fas fa-user-plus mr-2 text-yellow-500"></i> Tanggal Registrasi
                                </p>
                                <svg class="h-6 w-6 text-yellow-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m-6 2a9 9 0 1118 0 9 9 0 01-18 0z"></path>
                                </svg>
                            </div>
                            <p class="mt-2 text-xl font-extrabold text-gray-900">
                                {{-- Format tanggal lengkap --}}
                                {{ \Carbon\Carbon::parse($user->created_at)->format('d F Y') }}
                            </p>
                        </div>

                    </div>

                    {{-- Membutuhkan Font Awesome untuk ikon yang lebih baik --}}
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

                    <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-800 mb-6 border-b pb-2">Informasi Kontak & Akun</h3>
                        <div class="space-y-4">
                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8V6a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2z">
                                    </path>
                                </svg>
                                <span class="font-semibold w-32">Email:</span>
                                <span>{{ $user->email }}</span>
                            </div>

                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="font-semibold w-32">Bergabung Sejak:</span>
                                <span> {{ \Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</span>
                            </div>

                            <div class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 mr-3 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <span class="font-semibold w-32">Nomor Telepon:</span>
                                <span>+62 {{ $user->phone }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
                        <h3 class="text-xl font-bold text-gray-800 mb-6 border-b pb-2">Riwayat Aktivitas Penting</h3>
                        <ol class="relative border-l border-gray-200 ml-4">

                            <li class="mb-4 ml-6">
                                <span
                                    class="absolute flex items-center justify-center w-3 h-3 bg-blue-100 rounded-full -left-1.5 ring-4 ring-white">
                                    <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                </span>
                                <h4 class="mb-1 text-base font-semibold text-gray-900">Akun Dibuat</h4>
                                <time class="block mb-2 text-sm font-normal leading-none text-gray-400">
                                    {{ \Carbon\Carbon::parse($user->created_at)->format('d F Y, H:i') }}
                                    ({{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }})
                                </time>
                                <p class="text-sm font-normal text-gray-500">Selamat datang di sistem. Akun Anda telah
                                    berhasil
                                    didaftarkan.</p>
                            </li>

                            @if ($user->last_login_at)
                                <li class="mb-4 ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-3 h-3 bg-green-100 rounded-full -left-1.5 ring-4 ring-white">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <h4 class="mb-1 text-base font-semibold text-gray-900">Login Terakhir Berhasil</h4>
                                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400">
                                        {{ \Carbon\Carbon::parse($user->last_login_at)->format('d F Y, H:i') }}
                                        ({{ \Carbon\Carbon::parse($user->last_login_at)->diffForHumans() }})
                                    </time>
                                    <p class="text-sm font-normal text-gray-500">Akses terakhir dilakukan. Periksa
                                        Keamanan & Privasi jika ada aktivitas mencurigakan.</p>
                                </li>
                            @endif

                            @if ($user->phone)
                                <li class="mb-4 ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-3 h-3 bg-purple-100 rounded-full -left-1.5 ring-4 ring-white">
                                        <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                            </path>
                                        </svg>
                                    </span>
                                    <h4 class="mb-1 text-base font-semibold text-gray-900">Penambahan/Perubahan Nomor
                                        Telepon</h4>
                                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400">
                                        Data diverifikasi pada:
                                        {{ \Carbon\Carbon::parse($user->updated_at)->format('d F Y') }}
                                    </time>
                                    <p class="text-sm font-normal text-gray-500">Nomor telepon telah disimpan:
                                        **+62 {{ $user->phone }}**.</p>
                                </li>
                            @endif

                            @if ($user->image_url)
                                <li class="mb-4 ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-3 h-3 bg-yellow-100 rounded-full -left-1.5 ring-4 ring-white">
                                        <svg class="w-3 h-3 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zm-7.5 10.5a1 1 0 01-1-1v-4a1 1 0 012 0v4a1 1 0 01-1 1zM9 14.5a1 1 0 01-1-1v-4a1 1 0 012 0v4a1 1 0 01-1 1zM11.5 14.5a1 1 0 01-1-1v-4a1 1 0 012 0v4a1 1 0 01-1 1zM14 14.5a1 1 0 01-1-1v-4a1 1 0 012 0v4a1 1 0 01-1 1z">
                                            </path>
                                        </svg>
                                    </span>
                                    <h4 class="mb-1 text-base font-semibold text-gray-900">Foto Profil Diunggah</h4>
                                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400">
                                        Diunggah pada: {{ \Carbon\Carbon::parse($user->updated_at)->format('d F Y') }}
                                    </time>
                                    <p class="text-sm font-normal text-gray-500">Foto profil telah berhasil
                                        diunggah/diperbarui.</p>
                                </li>
                            @endif

                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layouts.users.layout>
