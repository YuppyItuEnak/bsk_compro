<div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden w-full">
    <img src="{{ $image }}" class="w-full h-48 object-cover" />

    <div class="p-4 text-left">
        <p class="text-gray-800 font-medium text-sm mb-1">{{ $harga }}</p>

        <h3 class="font-bold text-gray-900 text-base mb-2">{{ $title }}</h3>

        <p class="text-gray-600 text-sm leading-relaxed mb-4">
           {{$description}}
        </p>

        <a href="#"
            class="block w-full text-center text-blue-800 font-medium text-sm
            border border-blue-600 rounded-lg py-2 hover:bg-blue-50 transition">
            Lihat Detail
        </a>
    </div>
</div>
