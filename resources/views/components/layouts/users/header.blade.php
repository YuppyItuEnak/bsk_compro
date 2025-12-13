<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 shadow-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse group">
            <img src="{{ $user->image_url ?? 'images/dumm3.jpg' }}"
                class="h-10 w-10 object-cover rounded-full transition duration-300 group-hover:shadow-md"
                alt="Logo Perusahaan">
            <div class="font-bold">
                <p class="self-center text-xl font-extrabold whitespace-nowrap"><span class="text-blue-700">PT.
                        BSK</span><span class="text-red-600"> Indonesia</span></p>
                <p class="text-xs text-gray-500 font-semibold">
                    Berkah Sarana Karet
                </p>
            </div>
        </a>

        <div class="flex md:order-2 space-x-2 rtl:space-x-reverse items-center">

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-600 rounded-lg md:hidden hover:bg-gray-100 focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            @auth
                <button id="userDropdownButton" data-dropdown-toggle="userDropdown"
                    class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:shadow-md transition duration-200 p-1"
                    type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-9 h-9 object-cover rounded-full border-2 border-blue-500"
                        src="{{ asset('storage/' . auth()->user()->image_url) ?? 'images/default_avatar.jpg' }}" alt="User Avatar">
                    <span class="ml-2 text-sm font-semibold hidden lg:inline">{{ auth()->user()->name ?? 'Pengguna' }}</span>
                    <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <div id="userDropdown" class="z-10 hidden bg-white border border-gray-200 rounded-lg shadow-xl w-48">
                    <div class="px-4 py-3 text-sm text-gray-900 border-b">
                        <div>{{ auth()->user()->name ?? 'Pengguna' }}</div>
                        <div class="font-medium truncate">{{auth()->user()->email }}</div>
                    </div>
                    <ul class="py-1 text-sm text-gray-700" aria-labelledby="userDropdownButton">
                        <li>
                            <a href="{{ route('auth.index') }}" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                        </li>
                    </ul>
                    <div class="py-1 border-t">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endauth

            @guest
                <button id="dropdownDefaultButton" data-dropdown-toggle="guestDropdown"
                    class="inline-flex items-center justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 transition duration-200 shadow-md"
                    type="button">
                    Masuk/Registrasi
                    <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 9-7 7-7-7" />
                    </svg>
                </button>

                <div id="guestDropdown" class="z-10 hidden bg-white border border-gray-200 rounded-lg shadow-xl w-44">
                    <ul class="p-2 text-sm text-gray-700 font-medium" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('login') }}"
                                class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-blue-700 rounded transition duration-150">
                                <i class="fas fa-sign-in-alt mr-2"></i> Login
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('auth.create') }}"
                                class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-blue-700 rounded transition duration-150">
                                <i class="fas fa-user-plus mr-2"></i> Registrasi
                            </a>
                        </li>
                    </ul>
                </div>
            @endguest

        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-semibold border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li><a href="/"
                        class="block py-2 px-3 text-gray-700 hover:text-blue-700 transition duration-150 md:p-0"
                        aria-current="page">Beranda</a></li>
                <li><a href="/product"
                        class="block py-2 px-3 text-gray-700 hover:text-blue-700 transition duration-150 md:p-0">Produk</a>
                </li>
                <li><a href="/article"
                        class="block py-2 px-3 text-gray-700 hover:text-blue-700 transition duration-150 md:p-0">Artikel</a>
                </li>
                <li><a href="/about"
                        class="block py-2 px-3 text-gray-700 hover:text-blue-700 transition duration-150 md:p-0">Tentang</a>
                </li>
                <li><a href="/contact"
                        class="block py-2 px-3 text-gray-700 hover:text-blue-700 transition duration-150 md:p-0">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- Membutuhkan Font Awesome untuk ikon yang lebih baik (jika diperlukan) --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
