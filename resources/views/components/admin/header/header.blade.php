<header class="h-14 border-b border-zinc-200/80 bg-white sticky top-0 z-30 px-4 sm:px-6 flex items-center justify-between">
    <!-- Left: Mobile Trigger & Title -->
    <div class="flex items-center gap-3">
        <button type="button" 
                @click="sidebarOpen = true"
                class="lg:hidden p-1.5 rounded-md text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 transition-colors"
                aria-label="Open navigation">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <span class="text-sm font-semibold text-zinc-900">Dashboard</span>
    </div>

    <!-- Right: View Site & Quick Sign Out -->
    <div class="flex items-center gap-3">
        <a href="{{ route('home') }}" target="_blank"
           class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-zinc-700 bg-white border border-zinc-200 rounded-md hover:bg-zinc-50 hover:text-zinc-900 shadow-2xs transition-colors">
            <span>View Website</span>
            <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
            </svg>
        </a>

        <button wire:click="logout"
                type="button"
                class="text-xs font-medium text-zinc-500 hover:text-zinc-900 px-2 py-1.5 rounded-md hover:bg-zinc-100 transition-colors">
            Sign out
        </button>
    </div>
</header>