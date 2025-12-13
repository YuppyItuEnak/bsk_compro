@php
    $user = auth()->user();
@endphp

<header
    class="fixed top-0 left-0 right-0 sm:ml-64 bg-white shadow-sm h-16 flex items-center justify-between px-6 border-b border-gray-200 z-30">
    <div class="flex items-center">
        <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
            aria-controls="sidebar-multi-level-sidebar" type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>

        <h2 class="text-xl font-semibold text-gray-800 ml-4 hidden md:block">
            @yield('title', 'Dashboard')
        </h2>
    </div>

    <div class="flex items-center space-x-4">

        {{-- NOTIFIKASI (STATIC / BISA DIHUBUNGKAN KE DB) --}}
        <button
            class="relative p-1 text-gray-500 rounded-full hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="sr-only">Lihat Notifikasi</span>
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                </path>
            </svg>
        </button>

        {{-- USER DROPDOWN --}}
        <button id="user-menu-button" type="button"
            class="flex text-sm bg-gray-200 rounded-full focus:ring-4 focus:ring-gray-300"
            data-dropdown-toggle="user-dropdown">
            <span class="sr-only">Open user menu</span>
            <img class="w-9 h-9 object-cover rounded-full border-2 border-blue-500"
                src="{{ asset('storage/' . auth()->user()->image_url) ?? 'images/default_avatar.jpg' }}"
                alt="User Avatar">
        </button>

        <div id="user-dropdown"
            class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow">
            <div class="px-4 py-3">
                <span class="block text-sm font-semibold text-gray-900">
                    {{ $user?->name ?? 'Guest' }}
                </span>
                <span class="block text-sm text-gray-500 truncate">
                    {{ $user?->email ?? '-' }}
                </span>
            </div>

            <ul class="py-2">
                <li>
                    <a href="{{ route('auth.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Profil Anda
                    </a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                            Log Out
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</header>
