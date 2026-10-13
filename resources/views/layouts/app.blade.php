<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? '7A GLOBAL MACHINERY PVT. LTD. | Flatwork Ironers & Industrial Laundry' }}</title>
        <meta name="description" content="7A Global Machinery Pvt. Ltd. is a premier manufacturer of flatwork ironers and industrial laundry equipment. Impeccable ironing finish with maximum energy efficiency.">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/logo.png">

        <!-- GMP Ironers exact Typekit font: new-hero -->
        <link rel="preconnect" href="https://use.typekit.net" crossorigin>
        <link rel="stylesheet" href="https://use.typekit.net/gmh4pjz.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-[#FCFCFA] text-[#1E252D] antialiased selection:bg-[#C59B27] selection:text-white min-h-screen flex flex-col"
          style="font-family: 'new-hero', sans-serif;">

        <!-- 1. Left Fixed Architectural Sidebar (GMP Clean Reference) -->
        <livewire:public.sidebar />

        <!-- 2. Full-Screen Drawer Menu (Image 2 GMP Reference) -->
        <livewire:public.menu />

        <!-- 3. Main Page Wrapper (Offset on desktop by sidebar width) -->
        <div class="flex-1 flex flex-col md:pl-16 lg:pl-20 transition-all duration-300 w-full min-w-0">
            <!-- Clean Header Component (Logo Left, Hamburger Right) -->
            <livewire:public.header />

            <!-- Page Main Content Slot -->
            <main class="flex-1 w-full">
                {{ $slot }}
            </main>

            <!-- Architectural Footer -->
            <livewire:public.footer />
        </div>

        @livewireScripts
    </body>
</html>
