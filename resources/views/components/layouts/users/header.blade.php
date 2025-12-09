<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 shadow-sm">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="images/dumm3.jpg" class="h-10 rounded" alt="Flowbite Logo">
            <div class="font-bold">
                <p class="self-center text-xl font-bold whitespace-nowrap"><span class="text-blue-800">PT. BSK</span><span
                        class="text-red-800"> Indonesia</span></p>
                <p class="text-sm text-gray-600 font-semibold">
                    Berkah Sarana Karet
                </p>

            </div>

        </a>
        <div class="flex md:order-2 md:hidden space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-sm">Hubungi
                Kami</button>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-600 rounded-lg md:hidden hover:bg-gray-100 focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div class="hidden md:flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class="inline-flex items-center justify-center text-white bg-blue-600 border border-transparent hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none"
                type="button">
                Masuk/Registrasi
                <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 9-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white border border-gray-200 rounded-base shadow-lg w-44">
                <ul class="p-2 text-sm text-gray-700 font-medium" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="{{ route('auth.index') }}"
                            class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-gray-900 rounded">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"
                            class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-gray-900 rounded">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('auth.create') }}"
                            class="inline-flex items-center w-full p-2 hover:bg-gray-100 hover:text-gray-900 rounded">Registrasi</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-200 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                <li><a href="/" class="block py-2 px-3 hover:text-blue-600" aria-current="page">Beranda</a></li>
                <li><a href="/product" class="block py-2 px-3 hover:text-blue-600">Produk</a></li>
                <li><a href="/article" class="block py-2 px-3 hover:text-blue-600">Artikel</a></li>
                <li><a href="/about" class="block py-2 px-3 hover:text-blue-600">Tentang</a></li>
                <li><a href="/contact" class="block py-2 px-3 hover:text-blue-600">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
