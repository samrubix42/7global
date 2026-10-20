<header x-data="{ mobileNavOpen: false }" 
        class="sticky top-0 z-40 bg-white border-b border-[#C59B27] transition-all duration-200 select-none">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-8 lg:px-14 py-3.5 sm:py-4 flex items-center justify-between">
        <!-- 1. Brand Logo (left) -->
        <a href="{{ route('home') }}" class="flex items-center group shrink-0" aria-label="7A Global Machinery Pvt. Ltd.">
            <img src="/logo.png" 
                 alt="7A GLOBAL MACHINERY PVT. LTD." 
                 class="h-9 sm:h-11 lg:h-13 w-auto object-contain transition-transform duration-200 group-hover:scale-[1.01]">
        </a>

        <!-- 2. Centered Navigation Links (Desktop: >= 1024px) -->
        <nav class="hidden lg:flex items-center justify-center gap-6 xl:gap-9 absolute left-1/2 -translate-x-1/2">
            <a href="{{ route('home') }}" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Home
            </a>
            <a href="{{ route('equipment') }}" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Equipment
            </a>
            <a href="{{ route('consultancy') }}" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Consultancy
            </a>
            <a href="{{ route('projects') }}" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Projects
            </a>
            <a href="{{ route('media') }}" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Media
            </a>
            <a href="{{ route('about') }}" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                About
            </a>
            <a href="{{ route('contact') }}" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Contact
            </a>
        </nav>

        <!-- 3. Right Inquire Link / Mobile Toggle -->
        <div class="flex items-center space-x-3 sm:space-x-5 shrink-0">
            <a href="{{ route('contact') }}" 
               class="hidden sm:inline-block border border-[#C59B27] text-[#C59B27] hover:bg-[#C59B27] hover:text-white px-3.5 sm:px-4 py-1.5 sm:py-2 text-[11px] sm:text-[12px] uppercase tracking-[0.1em] font-light transition-colors">
                Inquire
            </a>

            <!-- Mobile & Tablet Hamburger Toggle (< 1024px) -->
            <button @click="mobileNavOpen = true" 
                    type="button" 
                    aria-label="Open Navigation"
                    class="lg:hidden group flex flex-col justify-center items-end gap-1.5 p-2 focus:outline-hidden cursor-pointer">
                <span class="w-6 sm:w-7 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"></span>
                <span class="w-6 sm:w-7 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"></span>
                <span class="w-6 sm:w-7 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"></span>
            </button>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- FULL-SCREEN MOBILE SIDEBAR                                                 -->
    <!-- ========================================================================= -->
    <!-- Backdrop -->
    <div x-show="mobileNavOpen" 
         x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="mobileNavOpen = false"
         class="lg:hidden fixed inset-0 z-50 bg-black/60 backdrop-blur-xs"></div>

    <!-- Sidebar Panel -->
    <aside x-show="mobileNavOpen" 
           x-cloak
           x-transition:enter="transition ease-out duration-300"
           x-transition:enter-start="translate-x-full"
           x-transition:enter-end="translate-x-0"
           x-transition:leave="transition ease-in duration-200"
           x-transition:leave-start="translate-x-0"
           x-transition:leave-end="translate-x-full"
           @keydown.escape.window="mobileNavOpen = false"
           class="lg:hidden fixed inset-y-0 right-0 z-50 w-full sm:w-96 max-w-full bg-[#1E252D] text-white flex flex-col shadow-2xl"
           style="font-family: 'new-hero', sans-serif;">

        <!-- Sidebar Header -->
        <div class="flex items-center justify-between px-6 sm:px-8 py-5 border-b border-white/10">
            <a href="{{ route('home') }}" @click="mobileNavOpen = false" class="flex items-center shrink-0">
                <img src="/logo.png" alt="7A GLOBAL MACHINERY PVT. LTD." class="h-9 sm:h-11 w-auto brightness-0 invert">
            </a>
            <button @click="mobileNavOpen = false" 
                    type="button" 
                    aria-label="Close Navigation"
                    class="flex items-center justify-center w-10 h-10 border border-white/20 hover:border-[#C59B27] text-white/70 hover:text-[#C59B27] transition-colors cursor-pointer">
                <i class="ri-close-line text-2xl"></i>
            </button>
        </div>

        <!-- Sidebar Links -->
        <nav class="flex-1 overflow-y-auto px-6 sm:px-8 py-8">
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('home') }}" @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Home
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('equipment') }}" @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Equipment
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('consultancy') }}" @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Consultancy
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('projects') }}" @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Projects
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('media') }}" @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Media
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        About
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Contact
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar Footer -->
        <div class="px-6 sm:px-8 py-8 border-t border-white/10 space-y-6">
            <a href="{{ route('contact') }}" @click="mobileNavOpen = false"
               class="block text-center bg-[#C59B27] hover:bg-[#9A7514] text-white py-3.5 text-[12px] uppercase tracking-[0.15em] font-light transition-colors">
                Submit Inquiry
            </a>
            <div class="space-y-3 text-xs font-light text-white/50">
                <a href="tel:+911204567890" class="flex items-center gap-3 hover:text-[#C59B27] transition-colors">
                    <i class="ri-phone-line text-[#C59B27]"></i> +91 (0) 120 456 7890
                </a>
                <a href="mailto:info@7aglobalmachinery.com" class="flex items-center gap-3 hover:text-[#C59B27] transition-colors">
                    <i class="ri-mail-line text-[#C59B27]"></i> info@7aglobalmachinery.com
                </a>
            </div>
            <div class="flex items-center gap-3">
                <a href="#" class="w-9 h-9 flex items-center justify-center border border-white/15 text-white/60 hover:border-[#C59B27] hover:text-[#C59B27] transition-colors" aria-label="LinkedIn"><i class="ri-linkedin-fill"></i></a>
                <a href="#" class="w-9 h-9 flex items-center justify-center border border-white/15 text-white/60 hover:border-[#C59B27] hover:text-[#C59B27] transition-colors" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="w-9 h-9 flex items-center justify-center border border-white/15 text-white/60 hover:border-[#C59B27] hover:text-[#C59B27] transition-colors" aria-label="Instagram"><i class="ri-instagram-line"></i></a>
            </div>
        </div>
    </aside>
</header>
