<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? '7A GLOBAL MACHINERY PVT. LTD. | Commercial Flatwork Ironers & Laundry Systems' }}</title>
        <meta name="description" content="7A Global Machinery Pvt. Ltd. delivers world-class industrial laundry equipment and flatwork ironers. High thermal efficiency, heavy-duty engineering, and impeccable linen finish.">

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/logo.png">

        <!-- Clean, Modern Sans-Serif Font Family (Plus Jakarta Sans) -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-[#F8FAFC] text-[#0F172A] antialiased selection:bg-[#C59B27] selection:text-white min-h-screen flex flex-col font-sans"
          style="font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;">

        <!-- 1. Clean Top Header with Integrated Navigation & CTA (No sidebar) -->
        <livewire:public.header2 />

        <!-- 2. Main Page Content Slot (Full-width clean container) -->
        <main class="flex-1 w-full">
            {{ $slot }}
        </main>

        <!-- 3. Professional Corporate Footer -->
        <livewire:public.footer2 />

        @livewireScripts
    </body>
</html>
