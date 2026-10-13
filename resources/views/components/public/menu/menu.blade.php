<div x-data="{ show: false }"
     x-show="show"
     @open-menu.window="show = true"
     @close-menu.window="show = false"
     @keydown.escape.window="show = false"
     class="fixed inset-0 z-50 overflow-hidden"
     style="font-family: 'new-hero', sans-serif; display: none;">

    <!-- Background Backdrop Overlay with Instant Hardware-Accelerated Fade -->
    <div x-show="show"
         x-transition:enter="transition-opacity ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="show = false"
         class="fixed inset-0 bg-black/40"></div>

    <!-- Sliding Menu Container (Silky-Smooth 60fps Right-to-Left Slide) -->
    <div x-show="show"
         x-transition:enter="transform transition ease-[cubic-bezier(0.16,1,0.3,1)] duration-400"
         x-transition:enter-start="translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transform transition ease-in duration-250"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="translate-x-full"
         style="will-change: transform;"
         class="fixed inset-0 w-full h-full bg-white flex flex-col overflow-y-auto shadow-2xl">

        <!-- ========================================================================= -->
        <!-- TOP HEADER BAR (Logo left, Close X button right, thin bottom border) -->
        <!-- ========================================================================= -->
        <div class="px-6 sm:px-10 lg:px-14 py-4 border-b border-[#C59B27] flex items-center justify-between shrink-0 bg-white">
            <!-- Logo -->
            <a href="{{ route('home') }}" @click="show = false" class="flex items-center">
                <img src="/logo.png" alt="7A GLOBAL MACHINERY" class="h-10 sm:h-12 lg:h-14 w-auto object-contain">
            </a>

            <!-- Minimalist Close 'X' Button -->
            <button @click="show = false" 
                    type="button" 
                    aria-label="Close menu"
                    class="group relative w-10 h-10 flex items-center justify-center p-2 focus:outline-hidden cursor-pointer hover:scale-110 transition-transform">
                <span class="absolute w-6 h-[1.5px] bg-[#1E252D] group-hover:bg-[#C59B27] rotate-45 transition-colors"></span>
                <span class="absolute w-6 h-[1.5px] bg-[#1E252D] group-hover:bg-[#C59B27] -rotate-45 transition-colors"></span>
            </button>
        </div>

        <!-- ========================================================================= -->
        <!-- MAIN DRAWER BODY: Split Left (White, Machines & Nav) / Right (Gold Brand) -->
        <!-- ========================================================================= -->
        <div class="flex-1 flex flex-col lg:flex-row min-h-0">
            <!-- --------------------------------------------------------------------- -->
            <!-- LEFT AREA (68% width): IRONERS grid + COMPANY/SERVICES nav -->
            <!-- --------------------------------------------------------------------- -->
            <div class="lg:w-[68%] p-6 sm:p-10 lg:p-14 flex flex-col justify-between overflow-y-auto">
                <div>
                    <!-- Section Title -->
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-light uppercase tracking-[0.06em] text-[#1E252D] mb-8">
                        IRONERS
                    </h2>

                    <!-- 3 Machine Columns (Exact match to Image 2) -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 lg:gap-12 mb-8">
                        <!-- Column 1: e² line -->
                        <div class="group">
                            <div class="h-32 lg:h-36 flex items-center justify-center mb-4 overflow-hidden">
                                <img src="/images/menu-e2.jpg" alt="e² line" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <a href="#solutions" @click="show = false" class="block text-sm font-bold text-[#C59B27] mb-2 uppercase tracking-wide hover:underline">
                                e² line
                            </a>
                            <ul class="space-y-1 text-xs text-[#1E252D] font-normal leading-relaxed">
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">E2 100.25</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">E2 120.25</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">E2 140.25</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">E2 140.30</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">E2 160.30</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">E2 200.30</a></li>
                            </ul>
                        </div>

                        <!-- Column 2: G line -->
                        <div class="group">
                            <div class="h-32 lg:h-36 flex items-center justify-center mb-4 overflow-hidden">
                                <img src="/images/menu-g.jpg" alt="G line" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <a href="#solutions" @click="show = false" class="block text-sm font-bold text-[#C59B27] mb-2 uppercase tracking-wide hover:underline">
                                G line
                            </a>
                            <ul class="space-y-1 text-xs text-[#1E252D] font-normal leading-relaxed">
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">G14.25</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">G15.35</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">G18.35</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">G21.35</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">G26.35</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">G32.35</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">G21.50</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">G26.50</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">G32.50</a></li>
                            </ul>
                        </div>

                        <!-- Column 3: 7A line -->
                        <div class="group">
                            <div class="h-32 lg:h-36 flex items-center justify-center mb-4 overflow-hidden">
                                <img src="/images/menu-7a.jpg" alt="7A line" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <a href="#solutions" @click="show = false" class="block text-sm font-bold text-[#C59B27] mb-2 uppercase tracking-wide hover:underline">
                                7A line
                            </a>
                            <ul class="space-y-1 text-xs text-[#1E252D] font-normal leading-relaxed">
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">7A 100.20</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">7A 120.20</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">7A 100.25</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">7A 120.25</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">7A 140.25</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">7A 140.30</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">7A 160.30</a></li>
                                <li><a href="#solutions" @click="show = false" class="hover:text-[#C59B27] transition-colors">7A 200.30</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Thin Horizontal Divider Line -->
                    <div class="border-t border-slate-200 my-8 lg:my-10"></div>

                    <!-- 2 Columns of Main Navigation Links -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 lg:gap-10">
                        <div class="space-y-3">
                            <a href="#about" @click="show = false" class="text-xl sm:text-2xl lg:text-[28px] font-light uppercase tracking-[0.05em] text-[#1E252D] hover:text-[#C59B27] transition-colors block">
                                COMPANY
                            </a>
                            <a href="#technology" @click="show = false" class="text-xl sm:text-2xl lg:text-[28px] font-light uppercase tracking-[0.05em] text-[#1E252D] hover:text-[#C59B27] transition-colors block">
                                TECHNOLOGY
                            </a>
                            <a href="#solutions" @click="show = false" class="text-xl sm:text-2xl lg:text-[28px] font-light uppercase tracking-[0.05em] text-[#1E252D] hover:text-[#C59B27] transition-colors block">
                                PRODUCTS
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#service" @click="show = false" class="text-xl sm:text-2xl lg:text-[28px] font-light uppercase tracking-[0.05em] text-[#1E252D] hover:text-[#C59B27] transition-colors block">
                                SERVICES
                            </a>
                            <a href="#finder" @click="show = false" class="text-xl sm:text-2xl lg:text-[28px] font-light uppercase tracking-[0.05em] text-[#1E252D] hover:text-[#C59B27] transition-colors block">
                                MEDIA
                            </a>
                            <a href="#contact" @click="show = false" class="text-xl sm:text-2xl lg:text-[28px] font-light uppercase tracking-[0.05em] text-[#1E252D] hover:text-[#C59B27] transition-colors block">
                                CONTACTS
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- --------------------------------------------------------------------- -->
            <!-- RIGHT AREA (32% width): Solid Brand Color with Languages & Contact -->
            <!-- --------------------------------------------------------------------- -->
            <div class="lg:w-[32%] bg-[#C59B27] text-white p-8 sm:p-12 lg:p-14 flex flex-col justify-between shrink-0">
                <!-- Languages Block -->
                <div>
                    <div class="text-xs font-normal text-white/90 mb-4 tracking-wide">
                        Languages
                    </div>
                    <div class="grid grid-cols-3 gap-y-3 gap-x-6 text-xs font-normal text-white tracking-wider">
                        <span class="hover:text-white/70 cursor-pointer">IT</span>
                        <span class="font-bold underline cursor-default">EN</span>
                        <span class="hover:text-white/70 cursor-pointer">FR</span>
                        <span class="hover:text-white/70 cursor-pointer">ES</span>
                        <span class="hover:text-white/70 cursor-pointer">DE</span>
                        <span class="hover:text-white/70 cursor-pointer">RU</span>
                    </div>
                </div>

                <!-- Thin Divider Line -->
                <div class="border-t border-white/30 my-8"></div>

                <!-- Company Contact Details Block -->
                <div class="text-xs font-light text-white leading-relaxed space-y-1.5">
                    <div class="font-semibold text-sm text-white mb-2">7A GLOBAL MACHINERY PVT. LTD.</div>
                    <div>Phone &emsp; +91 0120 4567890 – 82547</div>
                    <div>email &emsp;&nbsp; info@7aglobalmachinery.com</div>
                    <div class="mt-4 pt-1">
                        Industrial Corridor, Phase 7<br>
                        Greater Noida (Delhi NCR) – India
                    </div>
                </div>

                <!-- Thin Divider Line -->
                <div class="border-t border-white/30 my-8"></div>

                <!-- Distributor Login Block -->
                <div>
                    <div class="text-xs font-normal text-white/90 mb-3 tracking-wide">
                        Distributor Login
                    </div>
                    <a href="#contact" 
                       @click="show = false"
                       class="inline-flex items-center gap-2 text-sm font-semibold tracking-wider text-white hover:text-white/80 group">
                        <span>MY7A</span>
                        <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" viewBox="0 0 11 5" fill="none" stroke="currentColor">
                            <path d="M0.14 2.5 H9.65 M7.54 0 L10 2.5 L7.54 5" stroke-width="1.2"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>