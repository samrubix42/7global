@php
    $pageTitle = 'Dashboard';
    if (request()->routeIs('admin.faqs*')) {
        $pageTitle = 'FAQ';
    } elseif (request()->routeIs('admin.testimonials*')) {
        $pageTitle = 'Testimonials';
    }
@endphp

<header class="h-12 border-b border-zinc-200 bg-white sticky top-0 z-30 px-4 sm:px-6 flex items-center justify-between">
    <!-- Left: Mobile Trigger & Breadcrumb -->
    <div class="flex items-center gap-3">
        <button type="button" 
                @click="sidebarOpen = true"
                class="lg:hidden p-1 rounded-md text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 transition-colors cursor-pointer"
                aria-label="Open navigation">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <div class="flex items-center gap-1.5 text-xs text-zinc-500 font-medium">
            <span>Admin</span>
            <span class="text-zinc-300">/</span>
            <span class="text-zinc-900">{{ $pageTitle }}</span>
        </div>
    </div>

    <!-- Right: View Site & Quick Sign Out -->
    <div class="flex items-center gap-2">
        <a href="{{ route('home') }}" target="_blank"
           class="inline-flex items-center gap-1.5 h-7 px-2.5 text-xs font-medium text-zinc-700 bg-white border border-zinc-200 rounded-md hover:bg-zinc-50 hover:text-zinc-900 shadow-2xs transition-colors">
            <span>View Website</span>
            <svg class="w-3 h-3 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
            </svg>
        </a>

        <button wire:click="logout"
                type="button"
                class="h-7 px-2 text-xs font-medium text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 rounded-md transition-colors cursor-pointer">
            Sign out
        </button>
    </div>
</header>
