<header class="sticky top-0 z-30 bg-white/95 backdrop-blur-md border-b border-[#C59B27] transition-all duration-200">
    <div class="px-4 sm:px-6 lg:px-10 py-3.5 lg:py-4 flex items-center justify-between">
        <!-- Brand Logo (7A Global Machinery Pvt. Ltd.) -->
        <div class="flex items-center gap-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <img src="/logo.png" 
                     alt="7A GLOBAL MACHINERY PVT. LTD." 
                     class="h-10 sm:h-12 lg:h-14 w-auto object-contain transition-transform duration-200 group-hover:scale-[1.02]">
            </a>
        </div>

        <!-- Desktop Navigation Bar -->
        <nav class="hidden xl:flex items-center space-x-8 text-sm font-semibold tracking-wider uppercase text-[#1E252D]">
            <a href="#solutions" class="hover:text-[#C59B27] transition-colors py-1 relative group">
                <span>Ironers</span>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#C59B27] transition-all duration-200 group-hover:w-full"></span>
            </a>
            <a href="#finder" class="hover:text-[#C59B27] transition-colors py-1 relative group">
                <span>Machine Finder</span>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#C59B27] transition-all duration-200 group-hover:w-full"></span>
            </a>
            <a href="#technology" class="hover:text-[#C59B27] transition-colors py-1 relative group">
                <span>Technology</span>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#C59B27] transition-all duration-200 group-hover:w-full"></span>
            </a>
            <a href="#service" class="hover:text-[#C59B27] transition-colors py-1 relative group">
                <span>Service & Spares</span>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#C59B27] transition-all duration-200 group-hover:w-full"></span>
            </a>
            <a href="#contact" class="hover:text-[#C59B27] transition-colors py-1 relative group">
                <span>Contacts</span>
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#C59B27] transition-all duration-200 group-hover:w-full"></span>
            </a>
        </nav>

        <!-- Right Side: Portal CTA & GMP-Style Hamburger Menu -->
        <div class="flex items-center gap-3 sm:gap-5">
            <a href="#contact" 
               class="hidden sm:inline-flex items-center justify-center px-4 py-2 border border-[#C59B27] text-xs font-bold uppercase tracking-wider text-[#C59B27] hover:bg-[#C59B27] hover:text-white transition-all duration-200 rounded shadow-2xs">
                <span>Get a Quote</span>
            </a>

            <!-- Hamburger Button with 3 Clean Lines -->
            <button @click="$dispatch('toggle-sidebar-menu')" 
                    type="button" 
                    aria-label="Toggle navigation menu"
                    class="group relative flex flex-col justify-center items-center w-11 h-11 p-2 rounded border border-[#C59B27]/40 hover:border-[#C59B27] hover:bg-[#C59B27]/5 transition-all duration-200 focus:outline-hidden cursor-pointer">
                <span class="w-6 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-300 mb-1.5"></span>
                <span class="w-6 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-300 mb-1.5"></span>
                <span class="w-6 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-300"></span>
            </button>
        </div>
    </div>

    <!-- Mega Navigation Drawer (GMP Style Full-Screen Overlay) -->
    @if($drawerOpen)
    <div class="fixed inset-0 top-[65px] lg:top-[81px] z-50 bg-[#1E252D]/80 backdrop-blur-xs flex flex-col justify-start overflow-y-auto animate-fadeIn">
        <div class="bg-white border-b-2 border-[#C59B27] shadow-2xl p-6 sm:p-10 lg:p-12">
            <div class="max-w-7xl mx-auto">
                <!-- Top Bar: Region and Close Button -->
                <div class="flex items-center justify-between pb-6 border-b border-[#E2E8F0]">
                    <div class="flex items-center gap-3">
                        <span class="text-xs uppercase font-bold tracking-widest text-[#64748B]">Region / Language:</span>
                        <div class="flex gap-2">
                            <span class="px-2.5 py-1 text-xs font-bold bg-[#C59B27] text-white rounded">EN (Global)</span>
                            <span class="px-2.5 py-1 text-xs font-semibold text-[#1E252D] hover:bg-slate-100 rounded cursor-pointer">IN (India)</span>
                            <span class="px-2.5 py-1 text-xs font-semibold text-[#1E252D] hover:bg-slate-100 rounded cursor-pointer">EU (Europe)</span>
                            <span class="px-2.5 py-1 text-xs font-semibold text-[#1E252D] hover:bg-slate-100 rounded cursor-pointer">ME (Middle East)</span>
                        </div>
                    </div>
                    <button wire:click="closeDrawer" class="text-sm font-bold tracking-widest uppercase text-[#C59B27] hover:text-[#9A7514] flex items-center gap-1.5">
                        <span>Close</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

                <!-- Main Drawer Content: Product Lines Showcase -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 py-8 border-b border-[#E2E8F0]">
                    <!-- Product Category 1 -->
                    <div class="group border border-slate-200 hover:border-[#C59B27] p-5 rounded transition-all bg-white hover:shadow-lg">
                        <div class="aspect-4/3 bg-slate-100 rounded overflow-hidden mb-4 relative">
                            <img src="/images/product-ironer.jpg" alt="E2 Chest Ironers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <span class="absolute top-2 left-2 bg-[#C59B27] text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase">Chest Heated</span>
                        </div>
                        <h3 class="text-base font-bold text-[#1E252D] group-hover:text-[#C59B27] transition-colors">E2 Ironer Line</h3>
                        <p class="text-xs text-[#64748B] mt-1 mb-3">Roller Ø 250 - 300 mm. Premium mirror-finish ironing for hotels & laundries.</p>
                        <ul class="text-xs space-y-1 text-slate-600 font-medium">
                            <li class="hover:text-[#C59B27] cursor-pointer">• E2 100.25 (1.0m width)</li>
                            <li class="hover:text-[#C59B27] cursor-pointer">• E2 140.30 (1.4m width)</li>
                            <li class="hover:text-[#C59B27] cursor-pointer">• E2 200.30 (2.0m width)</li>
                        </ul>
                    </div>

                    <!-- Product Category 2 -->
                    <div class="group border border-slate-200 hover:border-[#C59B27] p-5 rounded transition-all bg-white hover:shadow-lg">
                        <div class="aspect-4/3 bg-slate-100 rounded overflow-hidden mb-4 relative">
                            <img src="/images/hero-1.jpg" alt="G-Line Drying Ironers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <span class="absolute top-2 left-2 bg-[#1E252D] text-[#C59B27] text-[10px] font-bold px-2 py-0.5 rounded uppercase">Drying Ironer</span>
                        </div>
                        <h3 class="text-base font-bold text-[#1E252D] group-hover:text-[#C59B27] transition-colors">G-Line Drying Ironers</h3>
                        <p class="text-xs text-[#64748B] mt-1 mb-3">Roller Ø 350 - 500 mm. Direct drying from washer-extractors at high speed.</p>
                        <ul class="text-xs space-y-1 text-slate-600 font-medium">
                            <li class="hover:text-[#C59B27] cursor-pointer">• G 15.35 (1.5m drying)</li>
                            <li class="hover:text-[#C59B27] cursor-pointer">• G 21.50 (2.1m heavy)</li>
                            <li class="hover:text-[#C59B27] cursor-pointer">• G 32.50 (3.2m industrial)</li>
                        </ul>
                    </div>

                    <!-- Product Category 3 -->
                    <div class="group border border-slate-200 hover:border-[#C59B27] p-5 rounded transition-all bg-white hover:shadow-lg">
                        <div class="aspect-4/3 bg-slate-100 rounded overflow-hidden mb-4 relative">
                            <img src="/images/hero-2.jpg" alt="Commercial Line" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            <span class="absolute top-2 left-2 bg-[#C59B27] text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase">Heavy Industrial</span>
                        </div>
                        <h3 class="text-base font-bold text-[#1E252D] group-hover:text-[#C59B27] transition-colors">7A Industrial Line</h3>
                        <p class="text-xs text-[#64748B] mt-1 mb-3">Robust multi-roll configurations for high-volume commercial laundries.</p>
                        <ul class="text-xs space-y-1 text-slate-600 font-medium">
                            <li class="hover:text-[#C59B27] cursor-pointer">• Steam Heated Units</li>
                            <li class="hover:text-[#C59B27] cursor-pointer">• Gas / Thermal Oil Units</li>
                            <li class="hover:text-[#C59B27] cursor-pointer">• High-Speed PLC Automation</li>
                        </ul>
                    </div>

                    <!-- Corporate & Support Card (Right Column) -->
                    <div class="bg-[#1E252D] text-white p-6 rounded flex flex-col justify-between border-t-4 border-[#C59B27]">
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-widest text-[#C59B27]">Corporate Headquarters</span>
                            <h4 class="text-lg font-bold mt-1 text-white">7A GLOBAL MACHINERY PVT. LTD.</h4>
                            <div class="mt-4 space-y-2 text-xs text-slate-300">
                                <p class="flex items-center gap-2">
                                    <span class="text-[#C59B27]">Phone:</span>
                                    <span class="font-medium">+91 (0) 120 456 7890</span>
                                </p>
                                <p class="flex items-center gap-2">
                                    <span class="text-[#C59B27]">Email:</span>
                                    <span class="font-medium">info@7aglobalmachinery.com</span>
                                </p>
                                <p class="flex items-start gap-2">
                                    <span class="text-[#C59B27]">Plant:</span>
                                    <span>Industrial Corridor, Manufacturing Park, India</span>
                                </p>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-slate-700">
                            <a href="#contact" wire:click="closeDrawer" class="block w-full text-center py-2.5 px-4 bg-[#C59B27] hover:bg-[#9A7514] text-white font-bold text-xs uppercase tracking-wider rounded transition-colors">
                                Distributor Portal Login
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bottom Navigation Row -->
                <div class="pt-6 flex flex-wrap items-center justify-between text-xs font-semibold tracking-wider uppercase text-[#1E252D]">
                    <div class="flex flex-wrap gap-6">
                        <a href="#solutions" wire:click="closeDrawer" class="hover:text-[#C59B27]">All Machines</a>
                        <a href="#technology" wire:click="closeDrawer" class="hover:text-[#C59B27]">Engineering Technology</a>
                        <a href="#service" wire:click="closeDrawer" class="hover:text-[#C59B27]">Technical Support</a>
                        <a href="#about" wire:click="closeDrawer" class="hover:text-[#C59B27]">About 7A Global</a>
                        <a href="#contact" wire:click="closeDrawer" class="hover:text-[#C59B27]">Contact & Network</a>
                    </div>
                    <div class="text-[#64748B] normal-case text-xs mt-3 sm:mt-0">
                        ISO 9001:2015 Certified Manufacturing Facility
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</header>