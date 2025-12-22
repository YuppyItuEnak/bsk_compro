<x-layouts.users.layout>
    <section class="relative bg-[#002473] py-32 md:py-48 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 translate-x-32 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-600 rounded-full blur-[150px] opacity-20"></div>
        <div class="absolute top-0 left-1/4 w-64 h-64 bg-blue-400 rounded-full blur-[120px] opacity-10"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center">
                <div
                    class="inline-flex items-center space-x-2 bg-white/10 border border-white/20 px-4 py-2 rounded-full mb-8">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                    </span>
                    <span class="text-blue-100 text-sm font-medium tracking-wider uppercase">Hubungi Kami</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6">
                    Hubungi <span class="text-blue-400">Kami</span>
                </h1>

                <div class="w-24 h-1.5 bg-blue-500 mx-auto mb-8 rounded-full"></div>

                <p class="text-xl md:text-2xl text-blue-100/90 max-w-3xl mx-auto leading-relaxed">
                    Kami siap membantu Anda menemukan <span class="text-white font-semibold">solusi material yang
                        tepat</span> untuk kebutuhan industri Anda. Dapatkan konsultasi gratis hari ini.
                </p>

                <div class="mt-16 animate-bounce opacity-50">
                    <svg class="w-8 h-8 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 max-w-screen-xl mx-auto px-5 py-16">
        <h2 class="text-4xl text-center font-extrabold text-[#002473] mb-20">
            Informasi Perusahaan
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch mb-10">
            <div class="space-y-6">

                <div
                    class="bg-white border border-gray-100 rounded-xl shadow-sm p-6 w-full text-left hover:shadow-md transition-shadow">
                    <div class="flex flex-row gap-4 items-center">
                        <div
                            class="w-12 h-12 bg-[#002473] rounded-lg flex items-center justify-center shadow-lg shadow-blue-900/20">
                            <svg width="28" height="28" viewBox="0 0 54 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M26.9999 29.7C29.1482 29.7 31.2084 28.8466 32.7275 27.3276C34.2465 25.8085 35.0999 23.7483 35.0999 21.6C35.0999 19.4517 34.2465 17.3915 32.7275 15.8724C31.2084 14.3534 29.1482 13.5 26.9999 13.5C24.8516 13.5 22.7914 14.3534 21.2723 15.8724C19.7533 17.3915 18.8999 19.4517 18.8999 21.6C18.8999 23.7483 19.7533 25.8085 21.2723 27.3276C22.7914 28.8466 24.8516 29.7 26.9999 29.7ZM26.9999 16.2C28.4321 16.2 29.8056 16.7689 30.8183 17.7816C31.831 18.7943 32.3999 20.1678 32.3999 21.6C32.3999 23.0322 31.831 24.4057 30.8183 25.4184C29.8056 26.4311 28.4321 27 26.9999 27C25.5677 27 24.1942 26.4311 23.1815 25.4184C22.1688 24.4057 21.5999 23.0322 21.5999 21.6C21.5999 20.1678 22.1688 18.7943 23.1815 17.7816C24.1942 16.7689 25.5677 16.2 26.9999 16.2Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.1001 21.9321C8.1001 32.7375 19.5022 51.3 27.0001 51.3C34.498 51.3 45.9001 32.7375 45.9001 21.9321C45.9001 11.3157 37.4437 2.70001 27.0001 2.70001C16.5565 2.70001 8.1001 11.3157 8.1001 21.9321ZM43.2001 21.9321C43.2001 31.4361 32.6593 48.6 27.0001 48.6C21.3409 48.6 10.8001 31.4361 10.8001 21.9321C10.8001 12.798 18.0577 5.40001 27.0001 5.40001C35.9425 5.40001 43.2001 12.798 43.2001 21.9321Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h3 class="text-[#002473] font-bold text-2xl">Alamat</h3>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mt-4">
                        {{ $companyInfo->alamat_perusahaan }}
                    </p>
                </div>

                <div
                    class="bg-white border border-gray-100 rounded-xl shadow-sm p-6 w-full text-left hover:shadow-md transition-shadow">
                    <div class="flex flex-row gap-4 items-center">
                        <div
                            class="w-12 h-12 bg-[#002473] rounded-lg flex items-center justify-center shadow-lg shadow-blue-900/20">
                            <svg width="28" height="28" viewBox="0 0 47 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4998 40C27.6549 40 31.6398 38.3143 34.5778 35.3137C37.5159 32.3131 39.1665 28.2435 39.1665 24C39.1665 19.7565 37.5159 15.6869 34.5778 12.6863C31.6398 9.68571 27.6549 8 23.4998 8C19.3448 8 15.3599 9.68571 12.4218 12.6863C9.48376 15.6869 7.83317 19.7565 7.83317 24C7.83317 28.2435 9.48376 32.3131 12.4218 35.3137C15.3599 38.3143 19.3448 40 23.4998 40ZM23.4998 4C26.0716 4 28.6181 4.51732 30.9941 5.52241C33.37 6.5275 35.5289 8.00069 37.3473 9.85786C39.1658 11.715 40.6083 13.9198 41.5925 16.3463C42.5766 18.7728 43.0832 21.3736 43.0832 24C43.0832 29.3043 41.0199 34.3914 37.3473 38.1421C33.6748 41.8929 28.6937 44 23.4998 44C12.6703 44 3.9165 35 3.9165 24C3.9165 18.6957 5.97974 13.6086 9.65233 9.85786C13.3249 6.10714 18.306 4 23.4998 4ZM24.479 14V24.5L33.2915 29.84L31.8228 32.3L21.5415 26V14H24.479Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <h3 class="text-[#002473] font-bold text-2xl">Jam Operasional</h3>
                    </div>
                    <p class="text-gray-600 text-base leading-relaxed mt-4">
                        Senin - Jumat: 08.00 - 17.00 WIB <br>
                        Sabtu: 08.00 - 13.00 WIB <br>
                        Minggu & Libur: Tutup
                    </p>
                </div>
            </div>

            <div class="w-full h-64 md:h-full rounded-xl shadow-sm overflow-hidden border border-gray-100">
                <iframe class="w-full h-full border-0" loading="lazy"
                    src="https://www.google.com/maps?q={{ urlencode($companyInfo->alamat_perusahaan) }}&output=embed">
                </iframe>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-stretch">
            <div>
                <h2 class="font-bold text-2xl mb-5 text-[#002473]">Hubungi Kami</h2>
                <p class="text-gray-600 leading-relaxed">Jika Anda memiliki pertanyaan atau butuh informasi lebih
                    lanjut, jangan ragu untuk menghubungi kami
                    melalui form di bawah ini, atau langsung melalui email atau telepon. Kami siap membantu!</p>
            </div>

            <div class="bg-white border border-gray-100 rounded-xl shadow-sm p-8 w-full text-left">
                <p class="font-bold text-2xl">
                    <span class="text-[#002473]">PT. BSK</span> <span class="text-red-700"> Indonesia</span>
                </p>
                <p class="mb-6 text-gray-400 font-bold tracking-wide">
                    Berkah Sarana Karet
                </p>

                <div class="flex flex-row gap-4 items-center mb-4">
                    <div class="w-10 h-10 bg-[#002473] rounded-lg flex items-center justify-center shadow-md">
                        <svg width="24" height="24" viewBox="0 0 49 49" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M31.8501 29.6491C26.9603 34.7941 14.4878 22.4338 19.3959 17.2684C22.3931 14.114 19.008 10.5105 17.1338 7.85836C13.616 2.8869 5.89642 9.75099 6.12917 14.1181C6.8703 27.8912 21.7683 44.2123 36.1948 42.7872C40.7068 42.3421 45.8927 34.1918 40.717 31.213C38.1282 29.7226 34.5737 26.7826 31.8501 29.647"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="text-gray-600 font-bold text-xl">{{ $companyInfo->telepon_perusahaan }}</h3>
                </div>

                <div class="flex flex-row gap-4 items-center">
                    <div class="w-10 h-10 bg-[#002473] rounded-lg flex items-center justify-center shadow-md">
                        <svg width="24" height="24" viewBox="0 0 43 43" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M39.4168 10.75C39.4168 8.77913 37.8043 7.16663 35.8335 7.16663H7.16683C5.196 7.16663 3.5835 8.77913 3.5835 10.75V32.25C3.5835 34.2208 5.196 35.8333 7.16683 35.8333H35.8335C37.8043 35.8333 39.4168 34.2208 39.4168 32.25V10.75ZM35.8335 10.75L21.5002 19.7083L7.16683 10.75H35.8335ZM35.8335 32.25H7.16683V14.3333L21.5002 23.2916L35.8335 14.3333V32.25Z"
                                fill="white" />
                        </svg>
                    </div>
                    <h3 class="text-gray-600 font-bold text-xl">{{ $companyInfo->email_perusahaan }}</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-24 text-center">
        <h2 class="text-4xl text-[#002473] font-bold max-w-3xl mx-auto leading-tight">Siap Bermitra dengan Kami?</h2>
        <p class="text-xl text-gray-500 font-medium max-w-4xl mx-auto leading-relaxed mt-6">Tim profesional kami siap
            membantu Anda menemukan solusi material yang tepat untuk kebutuhan industri Anda. Dapatkan konsultasi gratis
            dan penawaran terbaik hari ini.</p>
    </section>

</x-layouts.users.layout>
