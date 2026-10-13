<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? '7A GLOBAL MACHINERY PVT. LTD. | Flatwork Ironers & Industrial Laundry' }}</title>
        <meta name="description" content="7A Global Machinery Pvt. Ltd. is a premier manufacturer of flatwork ironers and industrial laundry equipment. Impeccable ironing finish with maximum energy efficiency.">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/logo.png">

        <!-- Google Fonts: Instrument Sans & Outfit -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-[#FCFCFA] text-[#1E252D] font-sans antialiased selection:bg-[#C59B27] selection:text-white min-h-screen flex flex-col">

        <!-- 1. Left Fixed Architectural Sidebar (GMP Reference) -->
        <livewire:public.sidebar />

        <!-- 2. Main Page Wrapper (Offset on desktop by sidebar width: 64px / 80px) -->
        <div class="flex-1 flex flex-col md:pl-16 lg:pl-20 transition-all duration-300 w-full min-w-0">
            <!-- Header Component -->
            <livewire:public.header />

            <!-- Page Main Content Slot -->
            <main class="flex-1 w-full">
                {{ $slot }}
            </main>

            <!-- Architectural Footer -->
            @include('components.public.footer')
        </div>

        @livewireScripts
    </body>
</html>
