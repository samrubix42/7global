<header class="sticky top-0 z-30 bg-white border-b border-[#C59B27] transition-all duration-200">
    <div class="px-6 sm:px-10 lg:px-14 py-4 flex items-center justify-between">
        <!-- Brand Logo (7A Global Machinery Pvt. Ltd.) -->
        <a href="{{ route('home') }}" class="flex items-center group" aria-label="7A Global Machinery">
            <img src="/logo.png" 
                 alt="7A GLOBAL MACHINERY PVT. LTD." 
                 class="h-10 sm:h-12 lg:h-14 w-auto object-contain transition-transform duration-200 group-hover:scale-[1.01]">
        </a>

        <!-- Right Side: Clean Hamburger Button (Exact GMP Reference) -->
        <button @click="$dispatch('open-menu')" 
                type="button" 
                aria-label="Open navigation menu"
                class="group flex flex-col justify-center items-end gap-1.5 p-2 focus:outline-hidden cursor-pointer">
            <span class="w-8 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"></span>
            <span class="w-8 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"></span>
            <span class="w-8 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"></span>
        </button>
    </div>
</header>