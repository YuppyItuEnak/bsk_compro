<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="icon" href="{{ asset('photos/predator-logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('photos/predator-logo.png') }}" type="image/x-icon">

    <!-- Primary Meta Tags -->
    <title>{{ $metaTitle ?? 'Predator - Karpet Alas Sapi Berkualitas' }}</title>
    <meta name="description" content="{{ $metaDescription ?? '' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? '' }}"> --}}


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://metatags.io/" />
    <meta property="og:title" content="Predator" />
    {{-- <meta property="og:description"
        content="Dapatkan karpet alas sapi terbaik! Dirancang khusus untuk kenyamanan ternak, anti selip, mudah dibersihkan, dan tahan lama. Cocok untuk peternakan modern!" />
    <meta property="og:image" content="{{ asset('photos/predator-logo.png') }}" /> --}}


    {{-- <title>{{ $title ?? 'Predator' }}</title> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins'],
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="./assets/vendor/leaflet/dist/leaflet.css">

    <script src="./assets/vendor/lodash/lodash.min.js"></script>
    <script src="./assets/vendor/leaflet/dist/leaflet.js"></script>

</head>

<body class="font-poppins">
    {{-- Header --}}
    <x-layouts.users.header />

    {{-- Main Content --}}
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <x-layouts.users.footer />

    {{-- Flowbite JS (boleh pakai CDN) --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>


</html>
