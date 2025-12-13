<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - PT BSK Indonesia</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


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
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-8 h-8 mr-2 rounded-lg" src="images/dumm3.jpg" alt="logo">
                PT BSK Indonesia
            </a>
            <div
                class="w-full bg-white rounded-xl shadow-2xl md:mt-0 sm:max-w-md xl:p-0 border border-gray-100">
                <div class="p-6 space-y-6 md:space-y-7 sm:p-8">
                    <h1
                        class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-3xl text-center">
                        Masuk ke Akun Anda
                    </h1>
                    <form class="space-y-6 md:space-y-7" action="{{ route('login.loginProcess') }}" method="POST">
                        @csrf

                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-700">Email Anda</label>
                            <input type="email" name="email" id="email"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-sm transition duration-150"
                                placeholder="nama@perusahaan.com" required>
                        </div>

                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-sm transition duration-150"
                                required>
                        </div>

                        <div class="flex items-center justify-end">
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline">Lupa Password?</a>
                        </div>


                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-semibold rounded-xl text-base px-5 py-2.5 text-center transition duration-200 transform hover:scale-[1.01]">
                            Login
                        </button>

                        <p class="text-sm font-light text-gray-500 text-center">
                            Belum punya akun? <a href="{{ route('auth.create') }}"
                                class="font-medium text-primary-600 hover:underline">Daftar di sini</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
