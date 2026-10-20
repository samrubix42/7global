<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sign In | 7A Global Machinery' }}</title>

    <link rel="icon" type="image/png" href="/logo.png">

    <link rel="preconnect" href="https://use.typekit.net" crossorigin>
    <link rel="stylesheet" href="https://use.typekit.net/gmh4pjz.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        body { font-family: 'new-hero', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full antialiased text-[#1E252D] bg-[#FCFCFA] selection:bg-[#C59B27] selection:text-white flex flex-col justify-center min-h-screen">

    <main class="relative z-10 w-full py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
