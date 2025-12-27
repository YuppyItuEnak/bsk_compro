<div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden w-full">
    <img src="{{ $image }}" class="w-full h-48 object-cover" />

    <div class="p-4 text-left">
        <div class="flex items-center gap-4 text-gray-800 text-sm font-medium mb-1">

            {{-- Icon Kalender + Date --}}
            <div class="flex items-center gap-1">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.4583 13.4584H3.54167V5.66671H13.4583M11.3333 0.708374V2.12504H5.66667V0.708374H4.25V2.12504H3.54167C2.75542 2.12504 2.125 2.75546 2.125 3.54171V13.4584C2.125 13.8341 2.27426 14.1944 2.53993 14.4601C2.80561 14.7258 3.16594 14.875 3.54167 14.875H13.4583C13.8341 14.875 14.1944 14.7258 14.4601 14.4601C14.7257 14.1944 14.875 13.8341 14.875 13.4584V3.54171C14.875 3.16598 14.7257 2.80565 14.4601 2.53997C14.1944 2.2743 13.8341 2.12504 13.4583 2.12504H12.75V0.708374M12.0417 8.50004H8.5V12.0417H12.0417V8.50004Z"
                        fill="#757575" />
                </svg>

                <span>{{ $date }}</span>
            </div>

            {{-- Icon Jam + Time --}}
            <div class="flex items-center gap-1">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2092_3579)">
                        <path d="M7 3.5V7L9.33333 8.16667" stroke="#757575" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M7.00008 12.8333C10.2217 12.8333 12.8334 10.2216 12.8334 6.99996C12.8334 3.7783 10.2217 1.16663 7.00008 1.16663C3.77842 1.16663 1.16675 3.7783 1.16675 6.99996C1.16675 10.2216 3.77842 12.8333 7.00008 12.8333Z"
                            stroke="#757575" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2092_3579">
                            <rect width="14" height="14" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <span>{{ $time }}</span>
            </div>

        </div>


        <h3 class="font-bold text-gray-900 text-base mb-2">{{ $title }}</h3>

        <p class="text-gray-600 text-sm leading-relaxed mb-4">
            {{ $description }}
        </p>

        <a href="{{ $routeLink }}" class=" w-full text-center text-blue-800 font-medium text-sm">
            Baca Lebih Lanjut →
        </a>
    </div>
</div>
