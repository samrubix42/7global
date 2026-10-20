<header x-data="{ mobileNavOpen: false }" 
        class="sticky top-0 z-40 bg-white border-b border-[#C59B27] transition-all duration-200 select-none">
    <div class="max-w-7xl mx-auto px-4 sm:px-8 lg:px-14 py-3.5 sm:py-4 flex items-center justify-between">
        <!-- 1. Brand Logo Only (Clean, scalable on mobile) -->
        <a href="{{ route('home') }}" class="flex items-center group shrink-0" aria-label="7A Global Machinery Pvt. Ltd.">
            <img src="/logo.png" 
                 alt="7A GLOBAL MACHINERY PVT. LTD." 
                 class="h-9 sm:h-11 lg:h-13 w-auto object-contain transition-transform duration-200 group-hover:scale-[1.01]">
        </a>

        <!-- 2. Clean Navigation Links (Desktop: >= 1024px) -->
        <nav class="hidden lg:flex items-center justify-start flex-1 ml-8 xl:ml-12 space-x-6 xl:space-x-9">
            <a href="{{ route('equipment') }}" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Flatwork Ironers
            </a>
            <a href="{{ route('home') }}#finder" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Ironer Finder
            </a>
            <a href="{{ route('home') }}#technology" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Service & Technology
            </a>
            <a href="{{ route('home') }}#testimonials" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                References
            </a>
            <a href="{{ route('about') }}" class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">About Us</a>
            <a href="{{ route('contact') }}" 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Talk With Us
            </a>
        </nav>

        <!-- 3. Right Minimal Inquire Link / Mobile Toggle -->
        <div class="flex items-center space-x-3 sm:space-x-5 shrink-0">
            <a href="{{ route('contact') }}" 
               class="hidden sm:inline-block border border-[#C59B27] text-[#C59B27] hover:bg-[#C59B27] hover:text-white px-3.5 sm:px-4 py-1.5 sm:py-2 text-[11px] sm:text-[12px] uppercase tracking-[0.1em] font-light transition-colors">
                Inquire
            </a>

            <!-- Mobile & Tablet Hamburger Toggle (< 1024px) -->
            <button @click="mobileNavOpen = !mobileNavOpen" 
                    type="button" 
                    aria-label="Toggle Navigation"
                    class="lg:hidden group flex flex-col justify-center items-end gap-1.5 p-2 focus:outline-hidden cursor-pointer">
                <span class="w-6 sm:w-7 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"
                      :class="mobileNavOpen ? 'rotate-45 translate-y-2' : ''"></span>
                <span class="w-6 sm:w-7 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"
                      :class="mobileNavOpen ? 'opacity-0' : ''"></span>
                <span class="w-6 sm:w-7 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"
                      :class="mobileNavOpen ? '-rotate-45 -translate-y-2' : ''"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Nav Drawer -->
    <div x-show="mobileNavOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         @click.outside="mobileNavOpen = false"
         class="lg:hidden bg-white border-t border-[#C59B27]/40 px-6 py-6 space-y-3 shadow-lg">
        <a href="{{ route('equipment') }}" 
           @click="mobileNavOpen = false"
           class="block text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] py-2 border-b border-slate-100">
            Flatwork Ironers
        </a>
        <a href="{{ route('home') }}#finder" 
           @click="mobileNavOpen = false"
           class="block text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] py-2 border-b border-slate-100">
            Ironer Finder
        </a>
        <a href="{{ route('home') }}#technology" 
           @click="mobileNavOpen = false"
           class="block text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] py-2 border-b border-slate-100">
            Service & Technology
        </a>
        <a href="{{ route('home') }}#testimonials" 
           @click="mobileNavOpen = false"
           class="block text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] py-2 border-b border-slate-100">
            References
        </a>
        <a href="{{ route('about') }}" 
           @click="mobileNavOpen = false"
           class="block text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] py-2 border-b border-slate-100">
            About Us
        </a>
        <a href="{{ route('contact') }}" 
           @click="mobileNavOpen = false"
           class="block text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] py-2">
            Talk With Us
        </a>
        <div class="pt-2">
            <a href="{{ route('contact') }}" 
               @click="mobileNavOpen = false"
               class="block text-center border border-[#C59B27] bg-[#C59B27] text-white py-2.5 text-[12px] uppercase tracking-[0.1em] font-light">
                Submit Inquiry
            </a>
        </div>
    </div>
</header>
