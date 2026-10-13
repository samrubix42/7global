<div class="relative w-full overflow-hidden" 
     x-data="{ 
        currentSlide: 0,
        slidesCount: 3,
        autoplayTimer: null,
        startAutoplay() {
            this.autoplayTimer = setInterval(() => {
                this.currentSlide = (this.currentSlide + 1) % this.slidesCount;
            }, 6000);
        },
        stopAutoplay() {
            if (this.autoplayTimer) clearInterval(this.autoplayTimer);
        },
        goToSlide(index) {
            this.currentSlide = index;
            this.stopAutoplay();
            this.startAutoplay();
        }
     }"
     x-init="startAutoplay()">

    <!-- ========================================================================= -->
    <!-- 1. HERO SLIDER SECTION (Exact aesthetic matching GMP reference screenshot) -->
    <!-- ========================================================================= -->
    <section class="relative w-full h-[75vh] min-h-[520px] max-h-[820px] bg-[#1E252D] overflow-hidden border-b border-[#C59B27]">
        <!-- Slide 1 (Direct match to user screenshot: Woman checking linen finish) -->
        <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out"
             :class="currentSlide === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'">
            <img src="/images/hero-2.jpg" 
                 alt="Impeccable Ironing Finish - 7A Global Machinery" 
                 class="w-full h-full object-cover object-center transform scale-105 transition-transform duration-7000 ease-out"
                 :class="currentSlide === 0 ? 'scale-100' : 'scale-105'">
            <div class="absolute inset-0 bg-gradient-to-r from-black/40 via-transparent to-black/20"></div>

            <!-- Floating Hero Card (Clean and minimal design matching GMP reference screenshot) -->
            <div class="absolute inset-0 flex items-center justify-end px-6 sm:px-12 lg:px-20 max-w-7xl mx-auto">
                <div class="bg-white/85 backdrop-blur-xs p-8 sm:p-12 lg:p-16 max-w-lg lg:max-w-xl animate-fadeIn">
                    <h1 class="text-2xl sm:text-3xl lg:text-[38px] font-normal tracking-[0.08em] text-[#C59B27] uppercase leading-[1.3] mb-8 lg:mb-12">
                        A DELICATE TOUCH<br>
                        FOR AN IMPECCABLE<br>
                        IRONING FINISH
                    </h1>
                    <div class="text-xl sm:text-2xl lg:text-[30px] font-normal tracking-[0.14em] text-[#C59B27] uppercase">
                        WE KNOW-HOW
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: High-Speed Commercial Ironer Machinery in Facility -->
        <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out"
             :class="currentSlide === 1 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'">
            <img src="/images/hero-1.jpg" 
                 alt="Flatwork Ironer Machinery - 7A Global Machinery" 
                 class="w-full h-full object-cover object-center transform scale-105 transition-transform duration-7000 ease-out"
                 :class="currentSlide === 1 ? 'scale-100' : 'scale-105'">
            <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/20 to-transparent"></div>

            <div class="absolute inset-0 flex items-center justify-end px-6 sm:px-12 lg:px-20 max-w-7xl mx-auto">
                <div class="bg-white/85 backdrop-blur-xs p-8 sm:p-12 lg:p-16 max-w-lg lg:max-w-xl">
                    <h2 class="text-2xl sm:text-3xl lg:text-[38px] font-normal tracking-[0.08em] text-[#C59B27] uppercase leading-[1.3] mb-8 lg:mb-12">
                        E2 & G-LINE<br>
                        DESIGNED<br>
                        AROUND YOU
                    </h2>
                    <div class="text-xl sm:text-2xl lg:text-[30px] font-normal tracking-[0.14em] text-[#C59B27] uppercase">
                        WE KNOW-HOW
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Industrial Perfection & Heavy Productivity -->
        <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out"
             :class="currentSlide === 2 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'">
            <img src="/images/product-ironer.jpg" 
                 alt="Industrial Ironer Model - 7A Global Machinery" 
                 class="w-full h-full object-cover object-center bg-slate-100"
                 :class="currentSlide === 2 ? 'scale-100' : 'scale-105'">
            <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-black/10"></div>

            <div class="absolute inset-0 flex items-center justify-end px-6 sm:px-12 lg:px-20 max-w-7xl mx-auto">
                <div class="bg-white/85 backdrop-blur-xs p-8 sm:p-12 lg:p-16 max-w-lg lg:max-w-xl">
                    <h2 class="text-2xl sm:text-3xl lg:text-[38px] font-normal tracking-[0.08em] text-[#C59B27] uppercase leading-[1.3] mb-8 lg:mb-12">
                        THE CHOICE<br>
                        OF INDUSTRIAL<br>
                        PERFECTION
                    </h2>
                    <div class="text-xl sm:text-2xl lg:text-[30px] font-normal tracking-[0.14em] text-[#C59B27] uppercase">
                        WE KNOW-HOW
                    </div>
                </div>
            </div>
        </div>

        <!-- GMP-Style Dash Indicators at Bottom Center (Exactly as in screenshot!) -->
        <div class="absolute bottom-6 inset-x-0 z-20 flex justify-center items-center gap-2.5">
            <template x-for="(slide, index) in slidesCount" :key="index">
                <button @click="goToSlide(index)"
                        type="button"
                        class="h-[3.5px] transition-all duration-300 rounded-xs cursor-pointer focus:outline-hidden"
                        :class="currentSlide === index ? 'w-10 bg-[#C59B27]' : 'w-7 bg-white/70 hover:bg-white'"
                        :aria-label="'Go to slide ' + (index + 1)">
                </button>
            </template>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. SECTION HEAD (GMP Reference: "LEADING FLATWORK IRONER MANUFACTURER") -->
    <!-- ========================================================================= -->
    <section class="py-14 lg:py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <span class="text-xs font-bold tracking-[0.25em] uppercase text-[#C59B27] block mb-2">MANUFACTURING SPECIALIZATION</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-[#1E252D] uppercase leading-tight">
                        LEADING<br>
                        <span class="text-[#C59B27]">FLATWORK IRONER</span> MANUFACTURER
                    </h2>
                </div>
                <div class="max-w-md text-sm text-[#64748B] leading-relaxed">
                    <p>
                        <strong>7A Global Machinery Pvt. Ltd.</strong> engineers and builds high-precision commercial flatwork ironers and drying ironers for hotels, healthcare facilities, and commercial laundry plants worldwide.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. PRODUCT SOLUTIONS 3-BOX GRID (Exact GMP #solutions layout & styling) -->
    <!-- ========================================================================= -->
    <section id="solutions" class="bg-[#FCFCFA] py-16 lg:py-24 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- BOX 1: E2 LINE - Chest Heated Flatwork Ironers -->
                <div class="group bg-white border border-slate-200 hover:border-[#C59B27] p-8 rounded shadow-2xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <!-- Machine Image -->
                        <div class="aspect-4/3 overflow-hidden rounded bg-slate-50 mb-6 flex items-center justify-center p-2 border border-slate-100">
                            <img src="/images/product-ironer.jpg" 
                                 alt="E2 Chest Ironer Line" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>

                        <!-- Brand Badge / Model Line -->
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-1 text-[11px] font-bold tracking-wider uppercase bg-[#C59B27]/10 text-[#C59B27] rounded">
                                Chest Heated Line
                            </span>
                            <span class="text-xs font-bold text-slate-400">E2 LINE</span>
                        </div>

                        <h3 class="text-xl font-bold text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3">
                            E2 Flatwork Ironers
                        </h3>

                        <p class="text-xs text-[#64748B] leading-relaxed mb-4">
                            Evolution meets finest ironing finish and ease of use. Create an ironing solution tailored to your hospitality business choosing from 6 chest heated ironer sizes.
                        </p>

                        <div class="space-y-1.5 py-3 border-y border-slate-100 text-xs text-slate-700">
                            <div class="flex justify-between">
                                <span class="text-slate-500">Roller Diameter:</span>
                                <span class="font-semibold">Ø 250 - 300 mm</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Working Widths:</span>
                                <span class="font-semibold">1.0 m to 2.0 m</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Heating Options:</span>
                                <span class="font-semibold text-[#C59B27]">Electric / Steam / Gas</span>
                            </div>
                        </div>
                    </div>

                    <!-- Arrow Link (GMP arrow-link arr-w style) -->
                    <div class="mt-6 pt-4 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#1E252D] group-hover:text-[#C59B27] transition-colors">
                            Explore E2 Line
                        </span>
                        <div class="w-10 h-10 rounded-full border border-slate-200 group-hover:border-[#C59B27] group-hover:bg-[#C59B27] group-hover:text-white flex items-center justify-center text-[#1E252D] transition-all">
                            <svg class="w-4 h-4 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </div>
                    </div>
                </div>

                <!-- BOX 2: G LINE - Drying Flatwork Ironers -->
                <div class="group bg-white border border-slate-200 hover:border-[#C59B27] p-8 rounded shadow-2xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <!-- Machine Image -->
                        <div class="aspect-4/3 overflow-hidden rounded bg-slate-50 mb-6 flex items-center justify-center p-2 border border-slate-100">
                            <img src="/images/hero-1.jpg" 
                                 alt="G-Line Drying Ironers" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>

                        <!-- Brand Badge / Model Line -->
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-1 text-[11px] font-bold tracking-wider uppercase bg-[#1E252D] text-[#C59B27] rounded">
                                High Moisture Drying
                            </span>
                            <span class="text-xs font-bold text-slate-400">G LINE</span>
                        </div>

                        <h3 class="text-xl font-bold text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3">
                            G-Line Drying Ironers
                        </h3>

                        <p class="text-xs text-[#64748B] leading-relaxed mb-4">
                            When maximum performance and high evaporation capacity are the primary focus. 9 cylinder heated sizes for continuous non-stop laundry productivity.
                        </p>

                        <div class="space-y-1.5 py-3 border-y border-slate-100 text-xs text-slate-700">
                            <div class="flex justify-between">
                                <span class="text-slate-500">Roller Diameter:</span>
                                <span class="font-semibold">Ø 350 - 500 mm</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Working Widths:</span>
                                <span class="font-semibold">1.4 m to 3.2 m</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Initial Moisture:</span>
                                <span class="font-semibold text-[#C59B27]">Up to 50% Direct Drying</span>
                            </div>
                        </div>
                    </div>

                    <!-- Arrow Link -->
                    <div class="mt-6 pt-4 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#1E252D] group-hover:text-[#C59B27] transition-colors">
                            Explore G Line
                        </span>
                        <div class="w-10 h-10 rounded-full border border-slate-200 group-hover:border-[#C59B27] group-hover:bg-[#C59B27] group-hover:text-white flex items-center justify-center text-[#1E252D] transition-all">
                            <svg class="w-4 h-4 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </div>
                    </div>
                </div>

                <!-- BOX 3: 7A PRO LINE - Heavy Commercial Line -->
                <div class="group bg-white border border-slate-200 hover:border-[#C59B27] p-8 rounded shadow-2xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <!-- Machine Image -->
                        <div class="aspect-4/3 overflow-hidden rounded bg-slate-50 mb-6 flex items-center justify-center p-2 border border-slate-100">
                            <img src="/images/hero-2.jpg" 
                                 alt="Commercial Line" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>

                        <!-- Brand Badge / Model Line -->
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-1 text-[11px] font-bold tracking-wider uppercase bg-[#C59B27] text-white rounded">
                                Industrial Heavy-Duty
                            </span>
                            <span class="text-xs font-bold text-slate-400">7A PRO LINE</span>
                        </div>

                        <h3 class="text-xl font-bold text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3">
                            Industrial Finishing Systems
                        </h3>

                        <p class="text-xs text-[#64748B] leading-relaxed mb-4">
                            Automated feeders, vacuum transfer tables, and high-speed precision folders designed to eliminate finishing bottlenecks and optimize laundry floor labor.
                        </p>

                        <div class="space-y-1.5 py-3 border-y border-slate-100 text-xs text-slate-700">
                            <div class="flex justify-between">
                                <span class="text-slate-500">Operation Mode:</span>
                                <span class="font-semibold">Continuous Automated</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Folding Speed:</span>
                                <span class="font-semibold">Up to 45 m / min</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Integration:</span>
                                <span class="font-semibold text-[#C59B27]">PLC Synchronized</span>
                            </div>
                        </div>
                    </div>

                    <!-- Arrow Link -->
                    <div class="mt-6 pt-4 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#1E252D] group-hover:text-[#C59B27] transition-colors">
                            Explore Automation
                        </span>
                        <div class="w-10 h-10 rounded-full border border-slate-200 group-hover:border-[#C59B27] group-hover:bg-[#C59B27] group-hover:text-white flex items-center justify-center text-[#1E252D] transition-all">
                            <svg class="w-4 h-4 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. INTERACTIVE IRONER FINDER (Matching GMP's #finder_cta) -->
    <!-- ========================================================================= -->
    <section id="finder" class="py-16 lg:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold tracking-[0.25em] uppercase text-[#C59B27] block mb-2">QUICK CONFIGURATOR</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold uppercase tracking-tight text-[#1E252D]">
                    IRONER FINDER
                </h2>
                <p class="text-xs sm:text-sm text-[#64748B] mt-3">
                    Use our interactive recommendation tool to discover the optimal model to suit your exact linen dimensions and hourly volume.
                </p>
            </div>

            <!-- Interactive Selector Widget -->
            <div class="bg-[#FAF9F5] border border-slate-200 p-6 sm:p-10 rounded-lg shadow-sm">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Filter 1: Facility Type -->
                    <div>
                        <label class="block text-xs font-bold tracking-wider uppercase text-[#1E252D] mb-3">
                            1. Select Facility Type
                        </label>
                        <div class="grid grid-cols-2 gap-2.5">
                            <button type="button" 
                                    wire:click="setFilter('facility', 'hotel')"
                                    class="p-3 text-xs font-semibold rounded border text-left transition-all {{ $facility === 'hotel' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                Luxury Hotels & Resorts
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('facility', 'hospital')"
                                    class="p-3 text-xs font-semibold rounded border text-left transition-all {{ $facility === 'hospital' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                Hospital & Healthcare
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('facility', 'commercial')"
                                    class="p-3 text-xs font-semibold rounded border text-left transition-all {{ $facility === 'commercial' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                Commercial Laundry Plant
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('facility', 'institution')"
                                    class="p-3 text-xs font-semibold rounded border text-left transition-all {{ $facility === 'institution' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                Institutions & Cruise
                            </button>
                        </div>
                    </div>

                    <!-- Filter 2: Hourly Capacity -->
                    <div>
                        <label class="block text-xs font-bold tracking-wider uppercase text-[#1E252D] mb-3">
                            2. Output Capacity (Kg / hr)
                        </label>
                        <div class="grid grid-cols-1 gap-2.5">
                            <button type="button" 
                                    wire:click="setFilter('capacity', 'compact')"
                                    class="p-3 text-xs font-semibold rounded border text-left flex justify-between items-center transition-all {{ $capacity === 'compact' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                <span>Compact OPL (30 - 60 kg/h)</span>
                                <span class="text-[10px] uppercase font-bold opacity-80">1.0m - 1.4m width</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('capacity', 'medium')"
                                    class="p-3 text-xs font-semibold rounded border text-left flex justify-between items-center transition-all {{ $capacity === 'medium' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                <span>Mid-Scale Industrial (70 - 150 kg/h)</span>
                                <span class="text-[10px] uppercase font-bold opacity-80">1.6m - 2.1m width</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('capacity', 'heavy')"
                                    class="p-3 text-xs font-semibold rounded border text-left flex justify-between items-center transition-all {{ $capacity === 'heavy' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                <span>Heavy Industrial (160 - 320+ kg/h)</span>
                                <span class="text-[10px] uppercase font-bold opacity-80">2.6m - 3.2m width</span>
                            </button>
                        </div>
                    </div>

                    <!-- Filter 3: Heating Source -->
                    <div>
                        <label class="block text-xs font-bold tracking-wider uppercase text-[#1E252D] mb-3">
                            3. Heating Medium
                        </label>
                        <div class="grid grid-cols-3 gap-2 mb-4">
                            <button type="button" 
                                    wire:click="setFilter('heating', 'electric')"
                                    class="p-3 text-xs font-semibold rounded border text-center transition-all {{ $heating === 'electric' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                Electric
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('heating', 'steam')"
                                    class="p-3 text-xs font-semibold rounded border text-center transition-all {{ $heating === 'steam' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                Steam
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('heating', 'gas')"
                                    class="p-3 text-xs font-semibold rounded border text-center transition-all {{ $heating === 'gas' ? 'border-[#C59B27] bg-[#C59B27] text-white shadow-xs' : 'border-slate-200 bg-white text-slate-700 hover:border-slate-300' }}">
                                Gas / Oil
                            </button>
                        </div>

                        <!-- Instant Recommended Model Match -->
                        <div class="bg-white border-2 border-[#C59B27] p-4 rounded shadow-xs">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-[#C59B27] block">Recommended Specification</span>
                            <div class="text-base font-bold text-[#1E252D] mt-0.5">
                                @if($capacity === 'compact')
                                    7A-E2 140.30 Chest Ironer
                                @elseif($capacity === 'medium')
                                    7A-E2 200.30 Chest / G 21.35 Drying
                                @else
                                    7A-G 32.50 High-Moisture Drying Ironer
                                @endif
                            </div>
                            <div class="text-[11px] text-[#64748B] mt-1">
                                Heating: <strong class="text-[#1E252D] uppercase">{{ $heating }}</strong> | Sector: <strong class="text-[#1E252D] uppercase">{{ $facility }}</strong>
                            </div>
                            <a href="#contact" class="mt-3 block text-center py-2 px-3 bg-[#C59B27] hover:bg-[#9A7514] text-white text-xs font-bold uppercase tracking-wider rounded transition-colors">
                                Inquire For This Model
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. SERVICE & TECHNOLOGY (Matching GMP's #serv_tech_boxed) -->
    <!-- ========================================================================= -->
    <section id="technology" class="py-16 lg:py-24 bg-[#FCFCFA] border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-[0.25em] uppercase text-[#C59B27] block mb-2">ENGINEERING DISTINCTION</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold uppercase tracking-tight text-[#1E252D]">
                    SERVICE & TECHNOLOGY
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- SERVICE CARD -->
                <div class="group bg-white border border-slate-200 hover:border-[#C59B27] p-8 sm:p-10 rounded shadow-2xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-black uppercase tracking-tight text-[#1E252D] group-hover:text-[#C59B27] transition-colors">
                                SERVICE
                            </h3>
                            <span class="w-2.5 h-2.5 rounded-full bg-[#C59B27]"></span>
                        </div>
                        <div class="aspect-16/9 overflow-hidden rounded mb-6 border border-slate-100">
                            <img src="/images/hero-1.jpg" alt="Service and Support" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <p class="text-xs sm:text-sm text-[#64748B] leading-relaxed">
                            7A Global stands out for customer dedication before, during, and after commissioning. We provide prompt technical assistance, certified preventative maintenance kits, and remote telemetry diagnostics to guarantee continuous plant uptime.
                        </p>
                    </div>

                    <div class="mt-8 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#1E252D]">
                            Spare Parts & Support
                        </span>
                        <a href="#contact" class="w-10 h-10 rounded-full border border-slate-200 group-hover:border-[#C59B27] group-hover:bg-[#C59B27] group-hover:text-white flex items-center justify-center text-[#1E252D] transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- TECHNOLOGY CARD -->
                <div class="group bg-white border border-slate-200 hover:border-[#C59B27] p-8 sm:p-10 rounded shadow-2xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-black uppercase tracking-tight text-[#1E252D] group-hover:text-[#C59B27] transition-colors">
                                TECHNOLOGY
                            </h3>
                            <span class="w-2.5 h-2.5 rounded-full bg-[#C59B27]"></span>
                        </div>
                        <div class="aspect-16/9 overflow-hidden rounded mb-6 border border-slate-100">
                            <img src="/images/product-ironer.jpg" alt="Precision Technology" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <p class="text-xs sm:text-sm text-[#64748B] leading-relaxed">
                            Continuous research and innovations extend the variety of treatable fabrics without fiber degradation. Features mirror-polished chrome heating surfaces, uniform thermostatic heat distribution, smart touch PLC, and automated tension control.
                        </p>
                    </div>

                    <div class="mt-8 pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#1E252D]">
                            Thermal Innovations
                        </span>
                        <a href="#contact" class="w-10 h-10 rounded-full border border-slate-200 group-hover:border-[#C59B27] group-hover:bg-[#C59B27] group-hover:text-white flex items-center justify-center text-[#1E252D] transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. NUMERICAL CREDENTIALS / STATS STRIP -->
    <!-- ========================================================================= -->
    <section class="py-16 bg-[#1E252D] text-white border-y-2 border-[#C59B27]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-700">
                <div class="pt-4 md:pt-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#C59B27]">25+</div>
                    <div class="text-xs font-bold uppercase tracking-widest text-slate-300 mt-2">Years In Machinery</div>
                </div>
                <div class="pt-4 md:pt-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#C59B27]">1,200+</div>
                    <div class="text-xs font-bold uppercase tracking-widest text-slate-300 mt-2">Global Installations</div>
                </div>
                <div class="pt-4 md:pt-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#C59B27]">30%</div>
                    <div class="text-xs font-bold uppercase tracking-widest text-slate-300 mt-2">Lower Energy Consumption</div>
                </div>
                <div class="pt-4 md:pt-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#C59B27]">24/7</div>
                    <div class="text-xs font-bold uppercase tracking-widest text-slate-300 mt-2">Certified Spares & Tech Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. CONTACT & INQUIRY FORM (Exact GMP #b2cModal & Contacts functionality) -->
    <!-- ========================================================================= -->
    <section id="contact" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Left Details -->
                <div class="lg:col-span-5">
                    <span class="text-xs font-bold tracking-[0.25em] uppercase text-[#C59B27] block mb-2">DIRECT COMMUNICATION</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold uppercase tracking-tight text-[#1E252D] mb-4">
                        TALK WITH OUR ENGINEERS
                    </h2>
                    <p class="text-xs sm:text-sm text-[#64748B] leading-relaxed mb-8">
                        Interested in an ironer quotation, customized laundry floor layout, or replacement chest / roll parts? Send us your specification and our application engineering team will reply within 24 hours.
                    </p>

                    <div class="space-y-4 border-t border-slate-200 pt-6 text-xs text-[#1E252D]">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded border border-[#C59B27]/40 flex items-center justify-center text-[#C59B27]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </span>
                            <div>
                                <div class="font-bold uppercase tracking-wider text-[11px] text-[#64748B]">Telephone</div>
                                <div class="font-semibold text-sm">+91 (0) 120 456 7890 / +91 98765 43210</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded border border-[#C59B27]/40 flex items-center justify-center text-[#C59B27]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </span>
                            <div>
                                <div class="font-bold uppercase tracking-wider text-[11px] text-[#64748B]">Direct Email</div>
                                <div class="font-semibold text-sm">sales@7aglobalmachinery.com</div>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded border border-[#C59B27]/40 flex items-center justify-center text-[#C59B27]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </span>
                            <div>
                                <div class="font-bold uppercase tracking-wider text-[11px] text-[#64748B]">Plant Location</div>
                                <div class="font-semibold text-sm">7A Global Machinery Industrial Complex, India</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Form (Livewire Form) -->
                <div class="lg:col-span-7 bg-[#FAF9F5] border border-slate-200 p-8 sm:p-10 rounded-lg shadow-sm">
                    @if($quoteSubmitted)
                    <div class="bg-emerald-50 border border-emerald-300 text-emerald-800 p-6 rounded text-center">
                        <svg class="w-12 h-12 text-emerald-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <h4 class="text-lg font-bold">Inquiry Successfully Received</h4>
                        <p class="text-xs mt-2 text-emerald-700">Thank you, {{ $quoteName }}. Our engineering team has logged your technical request and will contact you promptly.</p>
                        <button wire:click="resetQuoteForm" type="button" class="mt-4 px-4 py-2 bg-[#C59B27] text-white text-xs font-bold uppercase tracking-wider rounded">
                            Send Another Request
                        </button>
                    </div>
                    @else
                    <form wire:submit.prevent="submitQuote" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#1E252D] mb-1.5">
                                    Name and Surname *
                                </label>
                                <input type="text" 
                                       wire:model="quoteName" 
                                       required
                                       placeholder="e.g. John Doe"
                                       class="w-full text-xs px-3.5 py-2.5 bg-white border border-slate-300 rounded focus:outline-hidden focus:border-[#C59B27]">
                                @error('quoteName') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#1E252D] mb-1.5">
                                    Corporate Email *
                                </label>
                                <input type="email" 
                                       wire:model="quoteEmail" 
                                       required
                                       placeholder="name@company.com"
                                       class="w-full text-xs px-3.5 py-2.5 bg-white border border-slate-300 rounded focus:outline-hidden focus:border-[#C59B27]">
                                @error('quoteEmail') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#1E252D] mb-1.5">
                                    Phone / WhatsApp *
                                </label>
                                <input type="tel" 
                                       wire:model="quotePhone" 
                                       required
                                       placeholder="+91..."
                                       class="w-full text-xs px-3.5 py-2.5 bg-white border border-slate-300 rounded focus:outline-hidden focus:border-[#C59B27]">
                                @error('quotePhone') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#1E252D] mb-1.5">
                                    Company / Facility
                                </label>
                                <input type="text" 
                                       wire:model="quoteCompany" 
                                       placeholder="e.g. Grand Hotel / Laundry Services"
                                       class="w-full text-xs px-3.5 py-2.5 bg-white border border-slate-300 rounded focus:outline-hidden focus:border-[#C59B27]">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#1E252D] mb-1.5">
                                Equipment of Interest
                            </label>
                            <select wire:model="quoteModel" class="w-full text-xs px-3.5 py-2.5 bg-white border border-slate-300 rounded focus:outline-hidden focus:border-[#C59B27]">
                                <option value="E2 140.25 Chest Ironer">E2 140.25 Chest Ironer (1.4m width)</option>
                                <option value="E2 200.30 Chest Ironer">E2 200.30 Chest Ironer (2.0m width)</option>
                                <option value="G 21.50 Drying Flatwork Ironer">G 21.50 Drying Flatwork Ironer (2.1m width)</option>
                                <option value="G 32.50 Industrial Drying Ironer">G 32.50 Industrial Drying Ironer (3.2m width)</option>
                                <option value="Automated Folder / Feeder System">Automated Folder / Feeder System</option>
                                <option value="Spare Parts / Maintenance Support">Spare Parts / Maintenance Support</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#1E252D] mb-1.5">
                                Message & Requirements
                            </label>
                            <textarea wire:model="quoteMessage" 
                                      rows="4" 
                                      placeholder="Describe your laundry capacity, linen dimensions, and steam/electric preferences..."
                                      class="w-full text-xs px-3.5 py-2.5 bg-white border border-slate-300 rounded focus:outline-hidden focus:border-[#C59B27]"></textarea>
                        </div>

                        <button type="submit" 
                                class="w-full py-3 px-6 bg-[#C59B27] hover:bg-[#9A7514] text-white font-bold text-xs uppercase tracking-widest rounded shadow-sm transition-all duration-200 cursor-pointer">
                            Submit Inquiry to 7A Global Machinery
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>