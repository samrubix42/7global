<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-zinc-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sign In | 7A Global Admin' }}</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/logo.png">

    <!-- Fonts: Plus Jakarta Sans for shadcn aesthetic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full antialiased text-zinc-900 bg-zinc-50 selection:bg-zinc-900 selection:text-white flex flex-col justify-center min-h-screen">
    
    <!-- Subtle Background Grid Effect -->
    <div class="fixed inset-0 bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:24px_24px] pointer-events-none"></div>

    <main class="relative z-10 w-full py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
