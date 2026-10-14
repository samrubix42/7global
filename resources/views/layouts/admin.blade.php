<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-zinc-50/70">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard | 7A Global Machinery' }}</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/logo.png">

    <!-- Fonts: Plus Jakarta Sans for crisp, modern shadcn aesthetic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="h-full antialiased text-zinc-900 bg-zinc-50/70 selection:bg-zinc-900 selection:text-white"
      x-data="{ sidebarOpen: false }">

    <div class="min-h-screen flex">
        <!-- Sidebar Component -->
        <livewire:admin.sidebar />

        <!-- Main Workspace -->
        <div class="flex-1 flex flex-col min-w-0 transition-all duration-200">
            <!-- Header Component -->
            <livewire:admin.header />

            <!-- Main Page View Content -->
            <main class="flex-1 p-4 sm:p-6 lg:p-8 max-w-[1600px] w-full mx-auto">
                {{ $slot }}
            </main>

            <!-- Minimal Shadcn Footer -->
            <footer class="border-t border-zinc-200/80 bg-white py-4 px-6 sm:px-8 mt-auto">
                <div class="max-w-[1600px] mx-auto flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-zinc-500">
                    <div class="flex items-center gap-2">
                        <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span>7A Global Industrial Machinery Platform</span>
                        <span class="text-zinc-300">•</span>
                        <span>Admin Console v1.0</span>
                    </div>
                    <div class="flex items-center gap-4 text-zinc-500">
                        <a href="{{ route('home') }}" class="hover:text-zinc-900 transition-colors">View Live Website</a>
                        <span class="text-zinc-300">•</span>
                        <a href="{{ route('home2') }}" class="hover:text-zinc-900 transition-colors">Home V2</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @livewireScripts
</body>
</html>
