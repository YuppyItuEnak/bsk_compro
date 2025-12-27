<x-layouts.users.layout>
    <!-- HERO SECTION -->
    <section class="relative bg-[#002473] py-32 md:py-48 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 translate-x-32 pointer-events-none">
        </div>
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
                    <span class="text-blue-100 text-sm font-medium tracking-wider uppercase">Know More About Us</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6">
                    Tentang <span class="text-blue-400">Kami</span>
                </h1>

                <div class="w-24 h-1.5 bg-blue-500 mx-auto mb-8 rounded-full"></div>

                <p class="text-xl md:text-2xl text-blue-100/90 max-w-3xl mx-auto leading-relaxed">
                    Membangun masa depan industri dengan <span class="text-white font-semibold">material berkualitas
                        tinggi</span>
                    serta komitmen pada inovasi berkelanjutan.
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
    @foreach ($companyInfo as $company)
        <section class="max-w-screen-xl px-6 mx-auto py-24">
            <div class="text-center mb-16">
                <h2 class="text-[#002473] font-bold tracking-[0.2em] uppercase text-xs mb-3">Tentang Kami</h2>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">
                    Profil Perusahaan
                </h1>
                <div class="w-16 h-1 bg-[#002473] mx-auto rounded-full mb-8"></div>
                <p class="text-gray-500 text-lg md:text-xl leading-relaxed max-w-3xl mx-auto font-medium">
                    {{ $company->tentang_perusahaan }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-white border border-gray-100 rounded-2xl shadow-sm p-10 hover:shadow-md transition-shadow duration-300">
                    <div class="flex items-center gap-4 mb-8">
                        <div
                            class="w-12 h-12 bg-[#002473] rounded-xl flex items-center justify-center shadow-lg shadow-blue-900/10">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-gray-900 font-bold text-2xl tracking-tight">Visi Perusahaan</h3>
                    </div>

                    <div class="relative">
                        <p class="text-gray-600 text-lg leading-relaxed border-l-4 border-blue-500 pl-6 py-1">
                            {{ $company->visi_perusahaan }}
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white border border-gray-100 rounded-2xl shadow-sm p-10 hover:shadow-md transition-shadow duration-300">
                    <div class="flex items-center gap-4 mb-8">
                        <div
                            class="w-12 h-12 bg-red-700 rounded-xl flex items-center justify-center shadow-lg shadow-red-900/10">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-gray-900 font-bold text-2xl tracking-tight">Misi Kami</h3>
                    </div>

                    <div class="relative">
                        <div
                            class="text-gray-600 text-lg leading-relaxed border-l-4 border-red-500 pl-6 py-1 ">
                            {{ $company->misi_perusahaan }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gray-50 py-20">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-[#002473] tracking-tight">Nilai–Nilai Perusahaan
                    </h2>
                    <div class="w-16 h-1 bg-[#002473] mx-auto mt-4 rounded-full opacity-20"></div>
                    <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-lg">
                        Prinsip–prinsip fundamental yang memandu setiap keputusan dan tindakan strategis kami.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">

                    <!-- CARD 1 -->
                    <div class="border rounded-xl bg-white shadow p-6 text-left flex flex-col items-start">
                        <div class="w-12 h-12 bg-[#002473] rounded-lg flex items-center justify-center">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.0002 26.6667C26.4435 26.6667 31.6668 21.4434 31.6668 15C31.6668 8.55672 26.4435 3.33337 20.0002 3.33337C13.5568 3.33337 8.3335 8.55672 8.3335 15C8.3335 21.4434 13.5568 26.6667 20.0002 26.6667Z"
                                    stroke="white" stroke-width="2.5" />
                                <path
                                    d="M12.2519 25L11.1903 28.8717C10.1436 32.6917 9.62025 34.6017 10.3186 35.6467C10.5636 36.0133 10.8919 36.3067 11.2736 36.5017C12.3603 37.055 14.0403 36.18 17.3986 34.43C18.5153 33.8467 19.0752 33.5567 19.6686 33.4933C19.8891 33.4713 20.1114 33.4713 20.3319 33.4933C20.9253 33.5567 21.4836 33.8483 22.6019 34.43C25.9603 36.18 27.6402 37.055 28.7269 36.5017C29.1086 36.3067 29.4369 36.0133 29.6819 35.6467C30.3819 34.6017 29.8569 32.6917 28.8102 28.8717L27.7486 25"
                                    stroke="white" stroke-width="2.5" stroke-linecap="round" />
                            </svg>

                        </div>
                        <h3 class="text-[#002473] font-bold text-lg mt-3">Integrity</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Integritas dalam setiap aspek bisnis dan komitmen terhadap kejujuran.
                        </p>
                    </div>

                    <!-- CARD 2 -->
                    <div class="border rounded-xl bg-white shadow p-6 text-left flex flex-col items-start">
                        <div class="w-12 h-12 bg-[#002473] rounded-lg flex items-center justify-center">
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.5002 39.4167C19.0217 39.4167 16.6925 38.9461 14.5127 38.0049C12.3328 37.0637 10.4366 35.7874 8.82412 34.1761C7.21162 32.5648 5.93536 30.6686 4.99533 28.4875C4.0553 26.3065 3.58469 23.9773 3.5835 21.5C3.5823 19.0228 4.05292 16.6936 4.99533 14.5125C5.93775 12.3315 7.21401 10.4353 8.82412 8.824C10.4342 7.21269 12.3304 5.93643 14.5127 4.99521C16.6949 4.05399 19.0241 3.58337 21.5002 3.58337C23.9762 3.58337 26.3054 4.05399 28.4877 4.99521C30.6699 5.93643 32.5661 7.21269 34.1762 8.824C35.7863 10.4353 37.0632 12.3315 38.0068 14.5125C38.9504 16.6936 39.4204 19.0228 39.4168 21.5C39.4132 23.9773 38.9426 26.3065 38.005 28.4875C37.0674 30.6686 35.7911 32.5648 34.1762 34.1761C32.5613 35.7874 30.6651 37.0642 28.4877 38.0067C26.3102 38.9491 23.981 39.4191 21.5002 39.4167ZM21.5002 35.8334C25.5016 35.8334 28.8908 34.4448 31.6679 31.6677C34.445 28.8907 35.8335 25.5014 35.8335 21.5C35.8335 17.4987 34.445 14.1094 31.6679 11.3323C28.8908 8.55525 25.5016 7.16671 21.5002 7.16671C17.4988 7.16671 14.1095 8.55525 11.3325 11.3323C8.55537 14.1094 7.16683 17.4987 7.16683 21.5C7.16683 25.5014 8.55537 28.8907 11.3325 31.6677C14.1095 34.4448 17.4988 35.8334 21.5002 35.8334ZM21.5002 32.25C18.5141 32.25 15.9759 31.2049 13.8856 29.1146C11.7953 27.0243 10.7502 24.4862 10.7502 21.5C10.7502 18.5139 11.7953 15.9757 13.8856 13.8855C15.9759 11.7952 18.5141 10.75 21.5002 10.75C24.4863 10.75 27.0245 11.7952 29.1147 13.8855C31.205 15.9757 32.2502 18.5139 32.2502 21.5C32.2502 24.4862 31.205 27.0243 29.1147 29.1146C27.0245 31.2049 24.4863 32.25 21.5002 32.25ZM21.5002 28.6667C23.471 28.6667 25.1581 27.965 26.5616 26.5615C27.9651 25.158 28.6668 23.4709 28.6668 21.5C28.6668 19.5292 27.9651 17.8421 26.5616 16.4386C25.1581 15.0351 23.471 14.3334 21.5002 14.3334C19.5293 14.3334 17.8422 15.0351 16.4387 16.4386C15.0352 17.8421 14.3335 19.5292 14.3335 21.5C14.3335 23.4709 15.0352 25.158 16.4387 26.5615C17.8422 27.965 19.5293 28.6667 21.5002 28.6667ZM21.5002 25.0834C20.5147 25.0834 19.6715 24.7328 18.9703 24.0317C18.2692 23.3305 17.918 22.4867 17.9168 21.5C17.9156 20.5134 18.2668 19.6702 18.9703 18.9702C19.6739 18.2703 20.5171 17.9191 21.5002 17.9167C22.4832 17.9143 23.3271 18.2655 24.0318 18.9702C24.7365 19.6749 25.0871 20.5182 25.0835 21.5C25.0799 22.4819 24.7293 23.3257 24.0318 24.0317C23.3342 24.7376 22.4904 25.0882 21.5002 25.0834Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <h3 class="text-[#002473] font-bold text-lg mt-3">Quality</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Kualitas produk terbaik dengan standar internasional yang konsisten.
                        </p>
                    </div>

                    <!-- CARD 3 -->
                    <div class="border rounded-xl bg-white shadow p-6 text-left flex flex-col items-start">
                        <div class="w-12 h-12 bg-[#002473] rounded-lg flex items-center justify-center">
                            <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.8753 32.5C15.0219 32.5086 12.2695 31.4446 10.1639 29.5188C8.05832 27.593 6.75342 24.9463 6.508 22.1034C6.26257 19.2606 7.09455 16.4293 8.83892 14.1712C10.5833 11.9131 13.1126 10.393 15.9253 9.9125C25.1878 8.125 27.6253 7.28 30.8753 3.25C32.5003 6.5 34.1253 10.0425 34.1253 16.25C34.1253 25.1875 26.3578 32.5 17.8753 32.5Z"
                                    stroke="white" stroke-width="3.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M3.25 34.125C3.25 29.25 6.25625 25.415 11.505 24.375C15.4375 23.595 19.5 21.125 21.125 19.5"
                                    stroke="white" stroke-width="3.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </div>
                        <h3 class="text-[#002473] font-bold text-lg mt-3">Sustainability</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Komitmen terhadap praktik bisnis yang ramah lingkungan.
                        </p>
                    </div>
                </div>

                <!-- ROW 2 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

                    <!-- CARD 4 -->
                    <div class="border rounded-xl bg-white shadow p-6 text-left flex flex-col items-start">
                        <div class="w-12 h-12 bg-[#002473] rounded-lg flex items-center justify-center">
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.5002 3.58337C18.1739 3.58337 14.9839 4.90472 12.6319 7.25674C10.2798 9.60876 8.9585 12.7988 8.9585 16.125C8.9585 20.3892 11.0906 24.1338 14.3335 26.4092V30.4584C14.3335 30.9336 14.5223 31.3893 14.8583 31.7253C15.1943 32.0613 15.65 32.25 16.1252 32.25H26.8752C27.3503 32.25 27.8061 32.0613 28.1421 31.7253C28.4781 31.3893 28.6668 30.9336 28.6668 30.4584V26.4092C31.9097 24.1338 34.0418 20.3892 34.0418 16.125C34.0418 12.7988 32.7205 9.60876 30.3685 7.25674C28.0164 4.90472 24.8264 3.58337 21.5002 3.58337ZM16.1252 37.625C16.1252 38.1002 16.3139 38.5559 16.6499 38.8919C16.9859 39.2279 17.4416 39.4167 17.9168 39.4167H25.0835C25.5587 39.4167 26.0144 39.2279 26.3504 38.8919C26.6864 38.5559 26.8752 38.1002 26.8752 37.625V35.8334H16.1252V37.625Z"
                                    fill="white" />
                            </svg>

                        </div>
                        <h3 class="text-[#002473] font-bold text-lg mt-3">Innovation</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Inovasi berkelanjutan untuk solusi material yang lebih baik.
                        </p>
                    </div>

                    <!-- CARD 5 -->
                    <div class="border rounded-xl bg-white shadow p-6 text-left flex flex-col items-start">
                        <div class="w-12 h-12 bg-[#002473] rounded-lg flex items-center justify-center">
                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.5002 21.5C23.4009 21.5 25.2238 20.7449 26.5678 19.4009C27.9118 18.0569 28.6668 16.234 28.6668 14.3333C28.6668 12.4326 27.9118 10.6097 26.5678 9.26569C25.2238 7.92168 23.4009 7.16663 21.5002 7.16663C19.5994 7.16663 17.7766 7.92168 16.4326 9.26569C15.0886 10.6097 14.3335 12.4326 14.3335 14.3333C14.3335 16.234 15.0886 18.0569 16.4326 19.4009C17.7766 20.7449 19.5994 21.5 21.5002 21.5Z"
                                    stroke="white" stroke-width="2.6875" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M39.4168 30.9599C39.4166 32.0379 38.9903 33.0722 38.2307 33.8373C36.482 35.6003 34.7853 37.4385 32.9704 39.137C32.7676 39.3221 32.5015 39.4222 32.227 39.4166C31.9525 39.4109 31.6907 39.2999 31.4958 39.1066L26.2677 33.8391C25.5073 33.0737 25.0806 32.0387 25.0806 30.9599C25.0806 29.881 25.5073 28.846 26.2677 28.0806C26.647 27.6984 27.0982 27.3949 27.5952 27.1879C28.0923 26.9808 28.6255 26.8742 29.164 26.8742C29.7025 26.8742 30.2356 26.9808 30.7327 27.1879C31.2298 27.3949 31.681 27.6984 32.0602 28.0806L32.2501 28.2723L32.44 28.0806C33.0096 27.5062 33.7371 27.114 34.53 26.9539C35.323 26.7939 36.1457 26.8732 36.8935 27.1818C37.6412 27.4904 38.2804 28.0144 38.7297 28.6871C39.179 29.3598 39.4182 30.1509 39.4168 30.9599Z"
                                    stroke="white" stroke-width="2.6875" stroke-linejoin="round" />
                                <path
                                    d="M8.9585 35.8332V34.0416C8.95806 31.9256 9.49301 29.8438 10.5135 27.9902C11.5341 26.1366 13.007 24.5713 14.7953 23.44C16.5835 22.3088 18.6289 21.6484 20.741 21.5203C22.8531 21.3922 24.9633 21.8006 26.8752 22.7075"
                                    stroke="white" stroke-width="2.6875" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>


                        </div>
                        <h3 class="text-[#002473] font-bold text-lg mt-3">Customer Focus</h3>
                        <p class="text-gray-600 text-sm mt-1">
                            Kepuasan pelanggan adalah prioritas utama kami.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative bg-white py-24 overflow-hidden">
            <div class="absolute top-1/2 right-0 w-64 h-64 bg-blue-50 rounded-full blur-3xl opacity-60"></div>

            <div class="max-w-6xl mx-auto px-6 relative z-10">
                <div class="text-center mb-20">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-slate-800 tracking-tight">
                        Teknologi & <span class="text-blue-800">Fasilitas Produksi</span>
                    </h2>
                    <div class="w-20 h-1.5 bg-blue-600 mx-auto mt-4 rounded-full"></div>
                    <p class="mt-6 text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed">
                        PT. BSK Indonesia dilengkapi dengan mesin-mesin produksi berstandar internasional dan sistem
                        kontrol kualitas yang ketat. Investasi berkelanjutan memastikan presisi dan konsistensi terbaik.
                    </p>
                </div>

                <div class="mb-10">
                    <h3 class="text-2xl font-bold text-slate-800 mb-8 flex items-center">
                        <span class="w-8 h-1 bg-blue-600 mr-3 rounded-full"></span>
                        Peralatan Utama
                    </h3>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div
                            class="group p-8 bg-gray-50 rounded-2xl border border-transparent hover:border-blue-200 hover:bg-white hover:shadow-xl transition-all duration-300">
                            <div class="flex items-start gap-5">
                                <div
                                    class="flex-shrink-0 w-14 h-14 bg-[#002473] text-white rounded-xl flex items-center justify-center shadow-lg shadow-blue-100 group-hover:rotate-6 transition-transform">
                                    <svg width="32" height="32" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.6667 27.1668C15.3333 27.1668 18.3333 24.1168 18.3333 20.4168C18.3333 18.4835 17.3833 16.6502 15.4833 15.1002C13.5833 13.5502 12.15 11.2502 11.6667 8.8335C11.1833 11.2502 9.76667 13.5668 7.85 15.1002C5.93333 16.6335 5 18.5002 5 20.4168C5 24.1168 8 27.1668 11.6667 27.1668Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M20.9332 11.0001C22.0786 9.16818 22.8911 7.14821 23.3332 5.03345C24.1666 9.20011 26.6666 13.2001 29.9999 15.8668C33.3332 18.5334 34.9999 21.7001 34.9999 25.0334C35.0094 27.3373 34.3347 29.592 33.0612 31.5119C31.7878 33.4318 29.9729 34.9304 27.8468 35.8176C25.7206 36.7048 23.3789 36.9408 21.1185 36.4956C18.8581 36.0504 16.7808 34.944 15.1499 33.3168"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="text-xl font-bold text-slate-800 group-hover:text-blue-600 transition-colors">
                                        Mixing Machine</h4>
                                    <p class="text-slate-500 mt-2 leading-relaxed">Mesin pencampur canggih untuk
                                        memastikan komposisi material yang homogen dan konsisten di setiap batch
                                        produksi.</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="group p-8 bg-gray-50 rounded-2xl border border-transparent hover:border-blue-200 hover:bg-white hover:shadow-xl transition-all duration-300">
                            <div class="flex items-start gap-5">
                                <div
                                    class="flex-shrink-0 w-14 h-14 bg-[#002473] text-white rounded-xl flex items-center justify-center shadow-lg shadow-blue-100 group-hover:rotate-6 transition-transform">
                                    <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.444 26.1628L35.569 10.0378C35.7601 9.85979 36.0128 9.76288 36.2739 9.76748C36.535 9.77209 36.7841 9.87786 36.9687 10.0625C37.1534 10.2472 37.2591 10.4963 37.2637 10.7574C37.2684 11.0185 37.1714 11.2711 36.9934 11.4622L20.8684 27.5872C20.6774 27.7652 20.4247 27.8621 20.1636 27.8575C19.9025 27.8529 19.6534 27.7471 19.4687 27.5625C19.2841 27.3778 19.1783 27.1287 19.1737 26.8676C19.1691 26.6065 19.266 26.3539 19.444 26.1628ZM21.5 14.4453C22.7038 14.4441 23.8998 14.6393 25.0408 15.0231C25.2942 15.1084 25.5712 15.0896 25.8108 14.9706C26.0503 14.8517 26.2329 14.6425 26.3182 14.389C26.4035 14.1356 26.3846 13.8586 26.2657 13.619C26.1468 13.3795 25.9376 13.1969 25.6841 13.1116C23.5961 12.4078 21.3644 12.242 19.1954 12.6294C17.0263 13.0168 14.99 13.945 13.2749 15.3282C11.5597 16.7113 10.221 18.5046 9.38277 20.5423C8.5445 22.58 8.23367 24.7962 8.47904 26.9859C8.50644 27.2335 8.6246 27.4622 8.81072 27.6278C8.99683 27.7935 9.23771 27.8843 9.48685 27.8828C9.52432 27.8853 9.56192 27.8853 9.59939 27.8828C9.86483 27.8533 10.1077 27.7195 10.2746 27.5111C10.4415 27.3026 10.5189 27.0363 10.4896 26.7709C10.4423 26.3593 10.4171 25.9455 10.414 25.5312C10.4176 22.5922 11.5867 19.7745 13.665 17.6962C15.7432 15.618 18.5609 14.4489 21.5 14.4453ZM37.9609 17.116C37.9005 16.9982 37.8174 16.8935 37.7165 16.8078C37.6156 16.7221 37.4988 16.6571 37.3728 16.6166C37.2467 16.576 37.114 16.5607 36.982 16.5714C36.8501 16.5822 36.7215 16.6189 36.6037 16.6793C36.4859 16.7397 36.3812 16.8228 36.2955 16.9237C36.2098 17.0246 36.1448 17.1414 36.1043 17.2674C36.0637 17.3935 36.0484 17.5262 36.0592 17.6582C36.0699 17.7902 36.1066 17.9187 36.167 18.0365C37.1818 20.0282 37.7819 22.2051 37.9309 24.4354C38.0799 26.6657 37.7747 28.9031 37.0337 31.0121C37.0114 31.0794 36.9683 31.1379 36.9107 31.1792C36.8531 31.2206 36.7838 31.2426 36.7129 31.2422H6.29209C6.22078 31.2404 6.15174 31.2167 6.09435 31.1743C6.03696 31.132 5.99399 31.073 5.97127 31.0054C5.10497 28.5225 4.84466 25.8686 5.21204 23.2647C5.57942 20.6609 6.56384 18.1825 8.08325 16.0363C9.60267 13.89 11.6131 12.138 13.9469 10.9263C16.2807 9.7146 18.8704 9.07825 21.5 9.07031H21.6511C24.2058 9.08663 26.7208 9.70344 28.9931 10.8709C29.1113 10.9315 29.2403 10.9682 29.3727 10.9789C29.5051 10.9895 29.6383 10.9741 29.7647 10.9333C29.8911 10.8925 30.0083 10.8272 30.1095 10.7411C30.2107 10.6551 30.2939 10.5499 30.3545 10.4317C30.415 10.3135 30.4517 10.1845 30.4624 10.0521C30.4731 9.91967 30.4576 9.78645 30.4168 9.66004C30.376 9.53362 30.3107 9.41648 30.2247 9.31529C30.1386 9.21411 30.0334 9.13086 29.9152 9.07031C27.3623 7.76092 24.5371 7.07045 21.6679 7.05469H21.5C18.5458 7.05615 15.6349 7.76558 13.0113 9.12356C10.3877 10.4815 8.12772 12.4485 6.42076 14.8597C4.7138 17.2708 3.60955 20.056 3.20052 22.9817C2.79149 25.9075 3.08959 28.8887 4.06986 31.6755C4.23152 32.1365 4.53194 32.5361 4.92985 32.8194C5.32776 33.1027 5.80363 33.2559 6.29209 33.2578H36.7062C37.1935 33.2566 37.6684 33.1047 38.066 32.8229C38.4635 32.5412 38.7642 32.1433 38.9267 31.6839C39.7605 29.3168 40.1048 26.805 39.9387 24.3009C39.7727 21.7967 39.0998 19.3524 37.9609 17.116Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="text-xl font-bold text-slate-800 group-hover:text-blue-600 transition-colors">
                                        Hydraulic Press</h4>
                                    <p class="text-slate-500 mt-2 leading-relaxed">Press hidrolik dengan tekanan tinggi
                                        untuk membentuk material sesuai spesifikasi teknis yang sangat presisi.</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="group p-8 bg-gray-50 rounded-2xl border border-transparent hover:border-blue-200 hover:bg-white hover:shadow-xl transition-all duration-300">
                            <div class="flex items-start gap-5">
                                <div
                                    class="flex-shrink-0 w-14 h-14 bg-[#002473] text-white rounded-xl flex items-center justify-center shadow-lg shadow-blue-100 group-hover:rotate-6 transition-transform">
                                    <svg width="43" height="43" viewBox="0 0 43 43" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M37.625 22.1325V29.8259C37.6251 30.0178 37.5738 30.2063 37.4764 30.3717C37.3791 30.5371 37.2392 30.6734 37.0714 30.7665L22.0214 39.1264C21.8618 39.2149 21.6824 39.2613 21.5 39.2613C21.3176 39.2613 21.1382 39.2149 20.9786 39.1264L5.92863 30.7665C5.76078 30.6734 5.62091 30.5371 5.52356 30.3717C5.4262 30.2063 5.37491 30.0178 5.375 29.8259V22.1325C5.37523 21.9408 5.42667 21.7527 5.52401 21.5877C5.62135 21.4226 5.76104 21.2866 5.92863 21.1936L20.9786 12.8319C21.1382 12.7434 21.3176 12.697 21.5 12.697C21.6824 12.697 21.8618 12.7434 22.0214 12.8319L37.0714 21.1936C37.239 21.2866 37.3787 21.4226 37.476 21.5877C37.5733 21.7527 37.6248 21.9408 37.625 22.1325Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.3208 22.0267L20.9766 30.168C21.1364 30.2568 21.3161 30.3034 21.4989 30.3034C21.6817 30.3034 21.8614 30.2568 22.0212 30.168L36.729 21.998M21.4998 38.5208V30.4583M21.4998 21.4999V3.58325M21.4998 3.58325L25.979 8.06242M21.4998 3.58325L17.0206 8.06242"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="text-xl font-bold text-slate-800 group-hover:text-blue-600 transition-colors">
                                        Extruder Machine</h4>
                                    <p class="text-slate-500 mt-2 leading-relaxed">Sistem ekstrusi modern untuk
                                        produksi sheet dan profil dengan dimensi akurat dan permukaan yang halus.</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="group p-8 bg-gray-50 rounded-2xl border border-transparent hover:border-blue-200 hover:bg-white hover:shadow-xl transition-all duration-300">
                            <div class="flex items-start gap-5">
                                <div
                                    class="flex-shrink-0 w-14 h-14 bg-[#002473] text-white rounded-xl flex items-center justify-center shadow-lg shadow-blue-100 group-hover:rotate-6 transition-transform">
                                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.5 4.875C20.5833 9.20833 22.75 12.7292 26 15.4375C29.25 18.1458 30.875 21.125 30.875 24.375C30.875 27.3918 29.6766 30.2851 27.5433 32.4183C25.4101 34.5516 22.5168 35.75 19.5 35.75C16.4832 35.75 13.5899 34.5516 11.4567 32.4183C9.32343 30.2851 8.125 27.3918 8.125 24.375C8.125 22.617 8.6952 20.9064 9.75 19.5C9.75 20.5774 10.178 21.6108 10.9399 22.3726C11.7017 23.1345 12.7351 23.5625 13.8125 23.5625C14.8899 23.5625 15.9233 23.1345 16.6851 22.3726C17.447 21.6108 17.875 20.5774 17.875 19.5C17.875 16.25 15.4375 14.625 15.4375 11.375C15.4375 9.20833 16.7917 7.04167 19.5 4.875Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div>
                                    <h4
                                        class="text-xl font-bold text-slate-800 group-hover:text-blue-600 transition-colors">
                                        Curing System</h4>
                                    <p class="text-slate-500 mt-2 leading-relaxed">Sistem vulkanisasi terkontrol untuk
                                        mengoptimalkan sifat mekanik material agar tahan lama dan kuat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mt-24 p-10 bg-gradient-to-br from-blue-900 to-blue-800 rounded-3xl text-white relative overflow-hidden shadow-2xl">
                    <div class="absolute -bottom-10 -right-10 opacity-10">
                        <svg width="200" height="200" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71z" />
                        </svg>
                    </div>

                    <div class="relative z-10 grid md:grid-cols-3 gap-10 items-center">
                        <div class="md:col-span-2">
                            <h3 class="text-3xl font-bold mb-6">Komitmen Lingkungan</h3>
                            <p class="text-blue-100 text-lg leading-relaxed">
                                Kami berkomitmen menerapkan praktik manufaktur ramah lingkungan: energi efisien,
                                minimalisasi limbah, dan penggunaan material daur ulang. Melalui pengelolaan emisi yang
                                ketat, kami menjaga kontribusi positif bagi bumi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="relative bg-[#002473] py-24 overflow-hidden">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-white/5 skew-x-12 translate-x-32 pointer-events-none">
            </div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-600 rounded-full blur-[120px] opacity-20"></div>

            <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">

                    <div class="space-y-8">
                        <div
                            class="inline-flex items-center space-x-2 bg-white/10 border border-white/20 px-4 py-2 rounded-full">
                            <span class="relative flex h-3 w-3">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500"></span>
                            </span>
                            <span class="text-blue-100 text-sm font-medium tracking-wider uppercase">Our
                                Philosophy</span>
                        </div>

                        <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
                            Filosofi <span class="text-blue-400">Produksi</span> Kami
                        </h2>

                        <div class="space-y-6 text-blue-100/80 text-lg md:text-xl leading-relaxed">
                            <p>
                                Kami percaya bahwa produk berkualitas dimulai dari pemilihan <span
                                    class="text-white font-semibold">bahan baku terbaik</span>,
                                dikombinasikan dengan proses produksi yang presisi, dan didukung oleh tim yang
                                berdedikasi tinggi.
                            </p>
                            <p>
                                Setiap produk yang keluar dari fasilitas kami telah melewati kontrol kualitas ketat
                                untuk memastikan standar terbaik yang konsisten,
                                memenuhi bahkan melampaui ekspektasi pelanggan kami.
                            </p>
                        </div>

                        <div class="pt-4">
                            <button
                                class="bg-blue-800 hover:bg-blue-500 text-white px-8 py-4 rounded-xl font-bold transition-all shadow-lg shadow-black/20 flex items-center group">
                                Pelajari Standar Kami
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute -inset-4 border border-white/10 rounded-3xl pointer-events-none"></div>

                        <div class="grid grid-cols-2 gap-4">
                            <div
                                class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-3xl text-center hover:bg-white/20 transition-all">
                                <span class="block text-4xl font-black text-white mb-2">10+</span>
                                <span class="text-blue-200 text-xs uppercase tracking-widest font-bold">Tahun
                                    Pengalaman</span>
                            </div>
                            <div class="bg-white p-8 rounded-3xl text-center shadow-xl">
                                <span class="block text-4xl font-black text-[#002473] mb-2">500+</span>
                                <span class="text-gray-500 text-xs uppercase tracking-widest font-bold">Klien
                                    Puas</span>
                            </div>
                            <div class="bg-white p-8 rounded-3xl text-center shadow-xl">
                                <span class="block text-4xl font-black text-[#002473] mb-2">50+</span>
                                <span class="text-gray-500 text-xs uppercase tracking-widest font-bold">Tim Ahli</span>
                            </div>
                            <div
                                class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-3xl text-center hover:bg-white/20 transition-all">
                                <span class="block text-4xl font-black text-white mb-2">99%</span>
                                <span class="text-blue-200 text-xs uppercase tracking-widest font-bold">Kepuasan</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endforeach


</x-layouts.users.layout>
