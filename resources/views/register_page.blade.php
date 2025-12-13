<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins'],
                    },
                    colors: {
                        'primary-600': '#2563eb', // Blue-600
                        'primary-700': '#1d4ed8', // Blue-700
                    }
                },
            },
        }
    </script>
    <link rel="stylesheet" href="./assets/vendor/leaflet/dist/leaflet.css">

    <script src="./assets/vendor/lodash/lodash.min.js"></script>
    <script src="./assets/vendor/leaflet/dist/leaflet.js"></script>
</head>

<body class="font-poppins">
    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:min-h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-8 h-8 mr-2 rounded-lg" src="images/dumm3.jpg" alt="logo">
                PT BSK Indonesia
            </a>
            <div class="w-full bg-white rounded-xl shadow-2xl md:mt-0 sm:max-w-lg xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-3xl text-center">
                        Buat Akun Baru
                    </h1>
                    <form class="space-y-6" action="{{ route('auth.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-700" for="image_url">
                                Upload Foto Profil <span class="text-gray-500">(Opsional)</span>
                            </label>
                            <div class="flex items-center justify-center w-full">
                                <label for="image_url"
                                    class="flex flex-col items-center justify-center w-full h-28 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition duration-300 ease-in-out">
                                    <div class="flex flex-col items-center justify-center">
                                        <svg class="w-6 h-6 mb-2 text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.207a5.52 5.52 0 0 0-1.78.63 3.5 3.5 0 0 0 1.259 1.496l.334-.334z" />
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M12 5l-2-2m0 0-2 2m2-2v10" />
                                        </svg>
                                        <p class="text-sm text-gray-600"><span class="font-semibold">Klik untuk
                                                upload</span> (Max 2MB)</p>
                                    </div>
                                    <input id="image_url" name="image_url" type="file" class="hidden"
                                        accept="image/*" />
                                </label>
                            </div>
                            <div class="mt-4 flex justify-center">
                                <img id="image-preview"
                                    class="hidden w-20 h-20 object-cover rounded-full border-2 border-primary-600"
                                    src="#" alt="Pratinjau Gambar" />
                            </div>
                            @error('image_url')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Username</label>
                            <input type="text" name="name" id="name"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-sm"
                                placeholder="Masukkan username Anda" required value="{{ old('name') }}">
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-sm"
                                placeholder="nama@perusahaan.com" required value="{{ old('email') }}">
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-700">
                                Nomor Telepon <span class="text-gray-500">(Opsional)</span>
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border border-r-0 border-gray-300 rounded-l-lg">
                                    +62
                                </span>
                                <input type="text" name="phone" id="phone"
                                    class="bg-white border border-gray-300 text-gray-900 text-sm rounded-r-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-sm"
                                    placeholder="81234567890" value="{{ old('phone') }}">
                            </div>
                            @error('phone')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password" id="password"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-sm"
                                placeholder="••••••••" required>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-semibold rounded-xl text-base px-5 py-2.5 text-center transition duration-300 ease-in-out transform hover:scale-[1.01]">
                            Daftar Sekarang
                        </button>

                        <p class="text-sm font-light text-gray-500 text-center">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline">
                                Login di sini
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        // JS untuk pratinjau gambar
        document.getElementById('image_url').onchange = function(event) {
            const preview = document.getElementById('image-preview');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                preview.classList.add('block');
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.classList.add('hidden');
                preview.classList.remove('block');
                preview.src = '';
            }
        };

        // JS untuk memastikan input hanya angka (opsional tapi disarankan untuk input string telepon)
        document.getElementById('phone').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/[^0-9]/g, '');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
