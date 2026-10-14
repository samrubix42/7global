<div>
    <!-- Desktop Sidebar -->
    <aside class="hidden lg:flex lg:flex-col lg:w-60 lg:shrink-0 lg:border-r lg:border-zinc-200/80 lg:bg-white lg:min-h-screen">
        <div class="flex flex-col flex-1 h-full">
            
            <!-- Logo Header -->
            <div class="h-14 flex items-center px-5 border-b border-zinc-200/80">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5">
                    <img src="/logo.png" alt="7A Global Logo" class="h-7 w-auto object-contain">
                    <span class="text-sm font-semibold tracking-tight text-zinc-900">7A Global</span>
                </a>
            </div>

            <!-- Navigation Links (Only available routes) -->
            <div class="flex-1 px-3 py-4 space-y-1">
                <!-- Dashboard -->
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-zinc-900 text-white shadow-2xs' : 'text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>

                <!-- FAQs -->
                <a href="{{ route('admin.faqs') }}" 
                   class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.faqs*') ? 'bg-zinc-900 text-white shadow-2xs' : 'text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>FAQs</span>
                </a>

                <!-- Testimonials -->
                <a href="{{ route('admin.testimonials') }}" 
                   class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('admin.testimonials*') ? 'bg-zinc-900 text-white shadow-2xs' : 'text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                    <span>Testimonials</span>
                </a>

                <div class="pt-2 pb-1">
                    <div class="border-t border-zinc-200/80"></div>
                </div>

                <!-- Home -->
                <a href="{{ route('home') }}" target="_blank"
                   class="flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 transition-colors">
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span>Main Website</span>
                    </div>
                    <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>

                <!-- Home 2 -->
                <a href="{{ route('home2') }}" target="_blank"
                   class="flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 transition-colors">
                    <div class="flex items-center gap-2.5">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <span>Home V2</span>
                    </div>
                    <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>

            <!-- User Footer -->
            <div class="p-3 border-t border-zinc-200/80">
                <div class="flex items-center justify-between px-2 py-1.5 rounded-lg">
                    <div class="min-w-0 pr-2">
                        <p class="text-xs font-semibold text-zinc-900 truncate">{{ auth()->user()->name ?? 'Admin User' }}</p>
                        <p class="text-[11px] text-zinc-500 truncate">{{ auth()->user()->email ?? 'admin@7global.com' }}</p>
                    </div>
                    <button wire:click="logout" 
                            title="Sign out"
                            type="button"
                            class="p-1.5 text-zinc-400 hover:text-zinc-900 hover:bg-zinc-100 rounded-md transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </aside>

    <!-- Mobile Drawer -->
    <div x-show="sidebarOpen" 
         x-cloak
         class="relative z-50 lg:hidden" 
         role="dialog" 
         aria-modal="true">
        <div x-show="sidebarOpen"
             class="fixed inset-0 bg-zinc-900/30 backdrop-blur-xs"
             @click="sidebarOpen = false"></div>

        <div class="fixed inset-0 flex">
            <div class="relative mr-16 flex w-full max-w-xs flex-1 bg-white border-r border-zinc-200">
                <div class="flex flex-col flex-1">
                    <div class="h-14 flex items-center justify-between px-5 border-b border-zinc-200">
                        <div class="flex items-center gap-2.5">
                            <img src="/logo.png" alt="7A Global Logo" class="h-7 w-auto object-contain">
                            <span class="text-sm font-semibold text-zinc-900">7A Global</span>
                        </div>
                        <button type="button" @click="sidebarOpen = false" class="p-1 text-zinc-400 hover:text-zinc-900">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex-1 px-3 py-4 space-y-1">
                        <a href="{{ route('admin.dashboard') }}" 
                           class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'bg-zinc-900 text-white' : 'text-zinc-600 hover:bg-zinc-100' }}">
                            Dashboard
                        </a>
                        <a href="{{ route('admin.faqs') }}" 
                           class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('admin.faqs*') ? 'bg-zinc-900 text-white' : 'text-zinc-600 hover:bg-zinc-100' }}">
                            FAQs
                        </a>
                        <a href="{{ route('admin.testimonials') }}" 
                           class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('admin.testimonials*') ? 'bg-zinc-900 text-white' : 'text-zinc-600 hover:bg-zinc-100' }}">
                            Testimonials
                        </a>
                        <div class="pt-2 pb-1">
                            <div class="border-t border-zinc-200"></div>
                        </div>
                        <a href="{{ route('home') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-zinc-600 hover:bg-zinc-100">
                            <span>Main Website</span>
                            <span class="text-xs text-zinc-400">↗</span>
                        </a>
                        <a href="{{ route('home2') }}" class="flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-zinc-600 hover:bg-zinc-100">
                            <span>Home V2</span>
                            <span class="text-xs text-zinc-400">↗</span>
                        </a>
                    </div>

                    <div class="p-4 border-t border-zinc-200">
                        <div class="flex items-center justify-between">
                            <div class="min-w-0 pr-2">
                                <p class="text-xs font-semibold text-zinc-900 truncate">{{ auth()->user()->name ?? 'Admin User' }}</p>
                                <p class="text-[11px] text-zinc-500 truncate">{{ auth()->user()->email ?? 'admin@7global.com' }}</p>
                            </div>
                            <button wire:click="logout" type="button" class="text-xs font-medium text-zinc-600 hover:text-zinc-900">
                                Sign Out
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>