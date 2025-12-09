<x-layouts.users.layout>

    <div class="min-h-screen w-full flex justify-center items-center bg-gray-100">
        <div class="relative bg-white max-w-xs w-full p-6 border border-gray-300 rounded-2xl shadow-lg">

            <button id="dropdownButton" data-dropdown-toggle="dropdown"
                class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 bg-white
                       border border-transparent hover:bg-gray-200 rounded-lg p-1.5">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="3"
                        d="M6 12h.01m6 0h.01m5.99 0h.01" />
                </svg>
            </button>

            <!-- Dropdown -->
            <div id="dropdown" class="z-10 bg-white border border-gray-300 rounded-lg shadow-lg w-36 hidden">
                <ul class="p-2 text-sm text-gray-700">
                    <li>
                        <a href="#"
                            class="block w-full p-2 hover:bg-gray-100 hover:text-gray-900 rounded">Edit</a>
                    </li>
                    <li>
                        <a href="#" class="block w-full p-2 hover:bg-gray-100 hover:text-gray-900 rounded">Export
                            Data</a>
                    </li>
                    <li>
                        <a href="#" class="block w-full p-2 text-red-600 hover:bg-gray-100 rounded">Delete</a>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col items-center">
                <img class="w-24 h-24 mb-6 rounded-full"
                    src="{{ $user->image ? asset('storage/' . $user->image) : 'https://ui-avatars.com/api/?name=' . $user->name }}"
                    alt="User Image" />

                <h5 class="text-xl font-semibold text-gray-900">
                    {{ $user->name }}
                </h5>

                <span class="text-sm text-gray-600 capitalize">
                    {{ $user->role }}
                </span>

                <div class="flex mt-4 gap-4">
                    <button type="button"
                        class="text-white bg-blue-600 hover:bg-blue-700 rounded-lg text-sm px-4 py-2">
                        Follow me
                    </button>

                    <button type="button"
                        class="text-gray-800 bg-gray-200 hover:bg-gray-300 rounded-lg text-sm px-4 py-2">
                        Message
                    </button>
                </div>

            </div>
        </div>
    </div>

</x-layouts.users.layout>
