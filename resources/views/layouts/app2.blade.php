<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? '7A GLOBAL MACHINERY PVT. LTD. | Flatwork Ironers & Industrial Laundry' }}</title>
        <meta name="description" content="7A Global Machinery Pvt. Ltd. is a premier manufacturer of flatwork ironers and industrial laundry equipment. Impeccable ironing finish with maximum energy efficiency.">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/logo.png">

        <!-- Exact Typekit font: new-hero -->
        <link rel="preconnect" href="https://use.typekit.net" crossorigin>
        <link rel="stylesheet" href="https://use.typekit.net/gmh4pjz.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-[#FCFCFA] text-[#1E252D] antialiased selection:bg-[#C59B27] selection:text-white min-h-screen flex flex-col"
          style="font-family: 'new-hero', sans-serif;">

        <!-- 1. Header with integrated navigation links (No sidebar) -->
        <livewire:public.header2 />

        <!-- 2. Main Page Content (Full width clean container, no sidebar offset) -->
        <main class="flex-1 w-full min-w-0">
            {{ $slot }}
        </main>

        <!-- 3. Clean Architectural Footer -->
        <livewire:public.footer2 />

        @livewireScripts
    </body>
</html>
