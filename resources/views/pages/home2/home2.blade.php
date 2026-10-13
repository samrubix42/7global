<div class="relative w-full overflow-hidden bg-white" 
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
    <!-- HERO SLIDER SECTION (Clean, Minimal Aesthetic from Reference)             -->
    <!-- ========================================================================= -->
    <section class="relative w-full h-[75vh] min-h-[520px] max-h-[820px] bg-[#1E252D] overflow-hidden border-b border-[#C59B27]">
        <!-- Slide 1 -->
        <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out"
             :class="currentSlide === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'">
            <img src="/images/hero-2.jpg" 
                 alt="Impeccable Ironing Finish - 7A Global Machinery" 
                 class="w-full h-full object-cover object-center transform scale-105 transition-transform duration-7000 ease-out"
                 :class="currentSlide === 0 ? 'scale-100' : 'scale-105'">
            <div class="absolute inset-0 bg-gradient-to-r from-black/40 via-transparent to-black/20"></div>

            <!-- Floating Hero Card -->
            <div class="absolute inset-0 flex items-center justify-center sm:justify-end px-4 sm:px-12 lg:px-20 max-w-7xl mx-auto">
                <div class="bg-white/85 backdrop-blur-xs p-6 sm:p-12 lg:p-16 max-w-xs sm:max-w-lg lg:max-w-xl animate-fadeIn">
                    <h1 class="text-xl sm:text-3xl lg:text-[38px] font-normal tracking-[0.08em] text-[#C59B27] uppercase leading-[1.3] mb-4 sm:mb-8 lg:mb-12">
                        A DELICATE TOUCH<br>
                        FOR AN IMPECCABLE<br>
                        IRONING FINISH
                    </h1>
                    <div class="text-lg sm:text-2xl lg:text-[30px] font-normal tracking-[0.14em] text-[#C59B27] uppercase">
                        WE KNOW-HOW
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out"
             :class="currentSlide === 1 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'">
            <img src="/images/hero-1.jpg" 
                 alt="Flatwork Ironer Machinery - 7A Global Machinery" 
                 class="w-full h-full object-cover object-center transform scale-105 transition-transform duration-7000 ease-out"
                 :class="currentSlide === 1 ? 'scale-100' : 'scale-105'">
            <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/20 to-transparent"></div>

            <div class="absolute inset-0 flex items-center justify-center sm:justify-end px-4 sm:px-12 lg:px-20 max-w-7xl mx-auto">
                <div class="bg-white/85 backdrop-blur-xs p-6 sm:p-12 lg:p-16 max-w-xs sm:max-w-lg lg:max-w-xl">
                    <h2 class="text-xl sm:text-3xl lg:text-[38px] font-normal tracking-[0.08em] text-[#C59B27] uppercase leading-[1.3] mb-4 sm:mb-8 lg:mb-12">
                        E2 & G-LINE<br>
                        DESIGNED<br>
                        AROUND YOU
                    </h2>
                    <div class="text-lg sm:text-2xl lg:text-[30px] font-normal tracking-[0.14em] text-[#C59B27] uppercase">
                        WE KNOW-HOW
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out"
             :class="currentSlide === 2 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none'">
            <img src="/images/product-ironer.jpg" 
                 alt="Industrial Ironer Model - 7A Global Machinery" 
                 class="w-full h-full object-cover object-center bg-slate-100"
                 :class="currentSlide === 2 ? 'scale-100' : 'scale-105'">
            <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-black/10"></div>

            <div class="absolute inset-0 flex items-center justify-center sm:justify-end px-4 sm:px-12 lg:px-20 max-w-7xl mx-auto">
                <div class="bg-white/85 backdrop-blur-xs p-6 sm:p-12 lg:p-16 max-w-xs sm:max-w-lg lg:max-w-xl">
                    <h2 class="text-xl sm:text-3xl lg:text-[38px] font-normal tracking-[0.08em] text-[#C59B27] uppercase leading-[1.3] mb-4 sm:mb-8 lg:mb-12">
                        THE CHOICE<br>
                        OF INDUSTRIAL<br>
                        PERFECTION
                    </h2>
                    <div class="text-lg sm:text-2xl lg:text-[30px] font-normal tracking-[0.14em] text-[#C59B27] uppercase">
                        WE KNOW-HOW
                    </div>
                </div>
            </div>
        </div>

        <!-- Dash Indicators at Bottom Center -->
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
    <!-- EQUIPMENT LINES PORTFOLIO (Clean Architectural Cards)                     -->
    <!-- ========================================================================= -->
    <section id="solutions" class="pt-16 sm:pt-20 pb-20 sm:pb-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27]">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Machinery Series
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Flatwork Ironer Portfolio
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Three dedicated equipment series tailored for commercial laundries, boutique hotels, hospitals, and high-volume linen processing plants.
                </p>
            </div>

            <!-- 3 Clean Elevated Showcase Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 pt-12">
                <!-- CARD 1: e² Line -->
                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 lg:p-10 flex flex-col justify-between group">
                    <div>
                        <!-- Series Identifier -->
                        <div class="flex items-center justify-between pb-6 mb-6 border-b border-slate-100">
                            <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Chest Heated Series</span>
                            <span class="text-[11px] text-slate-400 font-light">6 Sizes</span>
                        </div>

                        <!-- Clean Isolated Image Box -->
                        <div class="h-44 sm:h-48 flex items-center justify-center mb-8 overflow-hidden bg-[#FAF9F6] p-6">
                            <img src="/images/menu-e2.jpg" 
                                 alt="e² line flatwork ironer" 
                                 class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500">
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl sm:text-3xl font-light text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3"
                            style="font-family: 'new-hero', sans-serif;">
                            e² line
                        </h3>

                        <!-- Description -->
                        <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed mb-8">
                            Evolution meets finest ironing finish and ease of use. Chromium chests ensure frictionless linen travel and delicate fiber treatment.
                        </p>

                        <!-- Key Spec Bullets -->
                        <div class="space-y-2.5 py-4 border-t border-slate-100 text-xs text-[#1E252D] font-light">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Roller Width:</span>
                                <span>1400 – 3200 mm</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Heating:</span>
                                <span class="text-[#C59B27] font-normal uppercase">Electric • Steam • Gas</span>
                            </div>
                        </div>
                    </div>

                    <!-- Clean Action Link -->
                    <div class="pt-8 border-t border-slate-100">
                        <button wire:click="selectModelForQuote('e² Line Chest Ironers')"
                                onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})"
                                type="button"
                                class="w-full py-3 text-xs uppercase tracking-[0.15em] font-light text-[#1E252D] group-hover:text-[#C59B27] flex items-center justify-between border-b border-transparent group-hover:border-[#C59B27] transition-all cursor-pointer">
                            <span>Configure & Inquire</span>
                            <span class="text-base group-hover:translate-x-1 transition-transform">→</span>
                        </button>
                    </div>
                </div>

                <!-- CARD 2: G Line -->
                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 lg:p-10 flex flex-col justify-between group">
                    <div>
                        <!-- Series Identifier -->
                        <div class="flex items-center justify-between pb-6 mb-6 border-b border-slate-100">
                            <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Cylinder Heated Series</span>
                            <span class="text-[11px] text-slate-400 font-light">9 Sizes</span>
                        </div>

                        <!-- Clean Isolated Image Box -->
                        <div class="h-44 sm:h-48 flex items-center justify-center mb-8 overflow-hidden bg-[#FAF9F6] p-6">
                            <img src="/images/menu-g.jpg" 
                                 alt="G line drying ironer" 
                                 class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500">
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl sm:text-3xl font-light text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3"
                            style="font-family: 'new-hero', sans-serif;">
                            G line
                        </h3>

                        <!-- Description -->
                        <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed mb-8">
                            High throughput drying ironer handling moisture straight from the extractor. Engineered for round-the-clock commercial shifts.
                        </p>

                        <!-- Key Spec Bullets -->
                        <div class="space-y-2.5 py-4 border-t border-slate-100 text-xs text-[#1E252D] font-light">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Cylinder Diameters:</span>
                                <span>Ø 350 – Ø 800 mm</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Heating:</span>
                                <span class="text-[#C59B27] font-normal uppercase">Electric • Steam • Gas</span>
                            </div>
                        </div>
                    </div>

                    <!-- Clean Action Link -->
                    <div class="pt-8 border-t border-slate-100">
                        <button wire:click="selectModelForQuote('G Line Drying Ironers')"
                                onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})"
                                type="button"
                                class="w-full py-3 text-xs uppercase tracking-[0.15em] font-light text-[#1E252D] group-hover:text-[#C59B27] flex items-center justify-between border-b border-transparent group-hover:border-[#C59B27] transition-all cursor-pointer">
                            <span>Configure & Inquire</span>
                            <span class="text-base group-hover:translate-x-1 transition-transform">→</span>
                        </button>
                    </div>
                </div>

                <!-- CARD 3: 7A Line -->
                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 lg:p-10 flex flex-col justify-between group">
                    <div>
                        <!-- Series Identifier -->
                        <div class="flex items-center justify-between pb-6 mb-6 border-b border-slate-100">
                            <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Commercial Standard</span>
                            <span class="text-[11px] text-slate-400 font-light">8 Models</span>
                        </div>

                        <!-- Clean Isolated Image Box -->
                        <div class="h-44 sm:h-48 flex items-center justify-center mb-8 overflow-hidden bg-[#FAF9F6] p-6">
                            <img src="/images/menu-7a.jpg" 
                                 alt="7A line chest ironer" 
                                 class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500">
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl sm:text-3xl font-light text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3"
                            style="font-family: 'new-hero', sans-serif;">
                            7A line
                        </h3>

                        <!-- Description -->
                        <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed mb-8">
                            Your foundational entrance into professional flatwork ironing. Compact footprint, intuitive controls, and minimal maintenance costs.
                        </p>

                        <!-- Key Spec Bullets -->
                        <div class="space-y-2.5 py-4 border-t border-slate-100 text-xs text-[#1E252D] font-light">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Roller Length:</span>
                                <span>1000 – 2000 mm</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Heating:</span>
                                <span class="text-[#C59B27] font-normal uppercase">Electric • Gas</span>
                            </div>
                        </div>
                    </div>

                    <!-- Clean Action Link -->
                    <div class="pt-8 border-t border-slate-100">
                        <button wire:click="selectModelForQuote('7A Line Commercial Ironers')"
                                onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})"
                                type="button"
                                class="w-full py-3 text-xs uppercase tracking-[0.15em] font-light text-[#1E252D] group-hover:text-[#C59B27] flex items-center justify-between border-b border-transparent group-hover:border-[#C59B27] transition-all cursor-pointer">
                            <span>Configure & Inquire</span>
                            <span class="text-base group-hover:translate-x-1 transition-transform">→</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- INTERACTIVE IRONER FINDER (Refined Configurator Layout)                   -->
    <!-- ========================================================================= -->
    <section id="finder" class="py-16 sm:py-24 bg-[#FAF9F6] border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Specification Selector
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Find Your Engineered Solution
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Select your operational parameters to receive our recommended machine configuration with verified thermal specs.
                </p>
            </div>

            <!-- Integrated 2-Column Architectural Configurator -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                <!-- Left Column: Controls (7 cols) -->
                <div class="lg:col-span-7 space-y-8 sm:space-y-10">
                    <!-- Control 1: Application Sector -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs uppercase tracking-[0.18em] text-[#C59B27] font-normal">Step 01</span>
                            <span class="text-xs text-slate-400 font-light">Application Sector</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <button type="button" 
                                    wire:click="setFilter('facility', 'hotel')"
                                    class="text-left p-4 border transition-all text-xs tracking-wider uppercase font-light cursor-pointer flex items-center justify-between {{ $facility === 'hotel' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Luxury Hotels & Resorts</span>
                                <span class="text-xs {{ $facility === 'hotel' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('facility', 'hospital')"
                                    class="text-left p-4 border transition-all text-xs tracking-wider uppercase font-light cursor-pointer flex items-center justify-between {{ $facility === 'hospital' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Healthcare & Hospitals</span>
                                <span class="text-xs {{ $facility === 'hospital' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('facility', 'commercial')"
                                    class="text-left p-4 border transition-all text-xs tracking-wider uppercase font-light cursor-pointer flex items-center justify-between {{ $facility === 'commercial' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Industrial Laundry Plant</span>
                                <span class="text-xs {{ $facility === 'commercial' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('facility', 'institution')"
                                    class="text-left p-4 border transition-all text-xs tracking-wider uppercase font-light cursor-pointer flex items-center justify-between {{ $facility === 'institution' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Cruise & Institutions</span>
                                <span class="text-xs {{ $facility === 'institution' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                        </div>
                    </div>

                    <!-- Control 2: Hourly Output -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs uppercase tracking-[0.18em] text-[#C59B27] font-normal">Step 02</span>
                            <span class="text-xs text-slate-400 font-light">Hourly Linen Volume</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <button type="button" 
                                    wire:click="setFilter('capacity', 'compact')"
                                    class="p-4 border transition-all text-xs tracking-wider uppercase font-light text-center cursor-pointer {{ $capacity === 'compact' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                <div class="font-normal">Compact OPL</div>
                                <div class="text-[11px] opacity-80 mt-1">30 – 60 kg/h</div>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('capacity', 'medium')"
                                    class="p-4 border transition-all text-xs tracking-wider uppercase font-light text-center cursor-pointer {{ $capacity === 'medium' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                <div class="font-normal">Medium Output</div>
                                <div class="text-[11px] opacity-80 mt-1">70 – 150 kg/h</div>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('capacity', 'heavy')"
                                    class="p-4 border transition-all text-xs tracking-wider uppercase font-light text-center cursor-pointer {{ $capacity === 'heavy' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                <div class="font-normal">High Volume</div>
                                <div class="text-[11px] opacity-80 mt-1">160 – 320+ kg/h</div>
                            </button>
                        </div>
                    </div>

                    <!-- Control 3: Heating Source -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs uppercase tracking-[0.18em] text-[#C59B27] font-normal">Step 03</span>
                            <span class="text-xs text-slate-400 font-light">Heating Energy</span>
                        </div>
                        <div class="grid grid-cols-3 gap-3">
                            <button type="button" 
                                    wire:click="setFilter('heating', 'electric')"
                                    class="p-3.5 border transition-all text-xs tracking-wider uppercase font-light text-center cursor-pointer {{ $heating === 'electric' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                Electric
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('heating', 'steam')"
                                    class="p-3.5 border transition-all text-xs tracking-wider uppercase font-light text-center cursor-pointer {{ $heating === 'steam' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                Steam
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('heating', 'gas')"
                                    class="p-3.5 border transition-all text-xs tracking-wider uppercase font-light text-center cursor-pointer {{ $heating === 'gas' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                                Gas
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Clean Recommendation Showcase (5 cols) -->
                <div class="lg:col-span-5 bg-white border border-[#C59B27] p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium block mb-2">
                            Engineered Recommendation
                        </span>

                        <!-- Dynamic Matching Image -->
                        <div class="h-40 sm:h-44 flex items-center justify-center my-6 overflow-hidden bg-[#FAF9F6] p-4">
                            @if($capacity === 'compact')
                                <img src="/images/menu-7a.jpg" alt="7A Line Commercial Ironer" class="max-h-full max-w-full object-contain">
                            @elseif($capacity === 'medium')
                                <img src="/images/menu-e2.jpg" alt="e² Line Chest Ironer" class="max-h-full max-w-full object-contain">
                            @else
                                <img src="/images/menu-g.jpg" alt="G Line Drying Ironer" class="max-h-full max-w-full object-contain">
                            @endif
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-light text-[#1E252D] mb-3"
                            style="font-family: 'new-hero', sans-serif;">
                            @if($capacity === 'compact')
                                7A line 140.25 Commercial
                            @elseif($capacity === 'medium')
                                e² line 200.30 Chest Ironer
                            @else
                                G line 32.50 Industrial Cylinder
                            @endif
                        </h3>

                        <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed mb-6">
                            Tailored specifically to your selected sector and thermal medium. Provides uniform pressure distribution and minimal energy dissipation.
                        </p>

                        <!-- Dynamic Specs Line -->
                        <div class="border-t border-b border-slate-100 py-4 space-y-2 text-xs text-[#1E252D] font-light">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Selected Sector:</span>
                                <span class="uppercase font-normal">{{ $facility }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Heating Utility:</span>
                                <span class="uppercase text-[#C59B27] font-normal">{{ $heating }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Action CTA Button -->
                    <div class="pt-8">
                        <button wire:click="selectModelForQuote('{{ $capacity === 'compact' ? '7A Line 140.25' : ($capacity === 'medium' ? 'e² line 200.30 Chest Ironer' : 'G line 32.50 Industrial Cylinder') }}')"
                                onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})"
                                type="button"
                                class="w-full py-4 bg-[#C59B27] hover:bg-[#9A7514] text-white text-xs uppercase tracking-[0.2em] font-light transition-colors cursor-pointer flex items-center justify-center gap-3">
                            <span>Request Machinery Quotation</span>
                            <span>→</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SERVICE & TECHNOLOGY (Clean Editorial Layout)                             -->
    <!-- ========================================================================= -->
    <section id="technology" class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-16">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Engineering & Support
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Service & Technology
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Long-term client commitment backed by dedicated technical telemetry, genuine guaranteed spares, and advanced thermal fabric preservation.
                </p>
            </div>

            <!-- Two Editorial Rows -->
            <div class="space-y-16 lg:space-y-20">
                <!-- ROW 1: SERVICE (Image Left, Narrative Right) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                    <div class="lg:col-span-6 overflow-hidden">
                        <img src="/images/hero-1.jpg" 
                             alt="Technical Service and Diagnostics" 
                             class="w-full h-[280px] sm:h-[360px] lg:h-[380px] object-cover hover:scale-102 transition-transform duration-700">
                    </div>
                    <div class="lg:col-span-6 space-y-6">
                        <span class="text-xs uppercase tracking-[0.2em] text-[#C59B27] font-medium block">
                            Customer Care & Spares
                        </span>
                        <h3 class="text-2xl sm:text-3xl lg:text-[34px] font-light text-[#1E252D] leading-tight"
                            style="font-family: 'new-hero', sans-serif;">
                            Dedicated Technical Service & Telemetry
                        </h3>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed">
                            7A Global stands out for its attention to the customer before, during, and after purchase. We ensure an efficient and punctual technical service, enriched with constantly updated telemetry tools and genuine guaranteed spare parts.
                        </p>
                        <div class="pt-4 border-t border-slate-100 flex flex-wrap items-center gap-4 sm:gap-8 text-xs font-light text-slate-500">
                            <div>• 24/7 Remote Diagnostics</div>
                            <div>• Rapid Spares Dispatch</div>
                            <div>• Factory Commissioning</div>
                        </div>
                    </div>
                </div>

                <!-- ROW 2: TECHNOLOGY (Narrative Left, Image Right) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                    <div class="lg:col-span-6 space-y-6 order-2 lg:order-1">
                        <span class="text-xs uppercase tracking-[0.2em] text-[#C59B27] font-medium block">
                            Thermal Dynamics
                        </span>
                        <h3 class="text-2xl sm:text-3xl lg:text-[34px] font-light text-[#1E252D] leading-tight"
                            style="font-family: 'new-hero', sans-serif;">
                            Patented Fabric Protection & Uniform Heat
                        </h3>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed">
                            Continuous research and innovations in 7A heating systems extend the varieties and types of treatable fabrics without fiber degradation. Impeccable finish, gentle thermal treatment, and reduction of ironing times to maximize productivity and ironing quality.
                        </p>
                        <div class="pt-4 border-t border-slate-100 flex flex-wrap items-center gap-4 sm:gap-8 text-xs font-light text-slate-500">
                            <div>• Mirror-Finish Chromium</div>
                            <div>• 30% Radiant Loss Reduction</div>
                            <div>• Precise Thermostats</div>
                        </div>
                    </div>
                    <div class="lg:col-span-6 overflow-hidden order-1 lg:order-2">
                        <img src="/images/hero-2.jpg" 
                             alt="Machinery Technology & Linen Finish" 
                             class="w-full h-[280px] sm:h-[360px] lg:h-[380px] object-cover hover:scale-102 transition-transform duration-700">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- CLIENT EXPERIENCES & CASE REFERENCES                                      -->
    <!-- ========================================================================= -->
    <section id="testimonials" class="py-16 sm:py-24 bg-[#FAF9F6] border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-14">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Client Experiences
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Operational References
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Verified feedback from luxury hotels, healthcare laundries, and commercial textile facilities operating 7A Global flatwork ironers.
                </p>
            </div>

            <!-- 3 Clean Testimonial Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">
                <!-- Testimonial 1 -->
                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
                    <div>
                        <div class="text-[#C59B27] text-3xl font-serif leading-none mb-6">“</div>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed mb-8 italic">
                            The e² series chest ironer has significantly elevated our linen presentation. Our banquet tablecloths and 400-thread-count bedsheets achieve a crisp, mirror-smooth finish without fabric stress or pulling.
                        </p>
                    </div>
                    <div class="pt-6 border-t border-slate-100">
                        <div class="text-sm font-normal text-[#1E252D]" style="font-family: 'new-hero', sans-serif;">Director of Housekeeping</div>
                        <div class="text-xs text-slate-400 font-light mt-0.5">5-Star Luxury Resort Collection</div>
                        <div class="text-[11px] text-[#C59B27] uppercase tracking-wider font-medium mt-3">e² 200.30 Chest Ironer</div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
                    <div>
                        <div class="text-[#C59B27] text-3xl font-serif leading-none mb-6">“</div>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed mb-8 italic">
                            Operating two continuous 8-hour shifts daily, the G-line cylinder ironer delivers consistent throughput at over 280 kg/hour directly from the wash extractor, cutting our thermal cost per kilogram by over 25%.
                        </p>
                    </div>
                    <div class="pt-6 border-t border-slate-100">
                        <div class="text-sm font-normal text-[#1E252D]" style="font-family: 'new-hero', sans-serif;">Plant Technical Superintendent</div>
                        <div class="text-xs text-slate-400 font-light mt-0.5">Central Healthcare Laundry Facility</div>
                        <div class="text-[11px] text-[#C59B27] uppercase tracking-wider font-medium mt-3">G 32.50 Cylinder Ironer</div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
                    <div>
                        <div class="text-[#C59B27] text-3xl font-serif leading-none mb-6">“</div>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed mb-8 italic">
                            The thermal insulation dramatically lowered ambient laundry room temperatures. Furthermore, the telemetry diagnostics and fast spares dispatch from 7A Global have provided exceptional reliability.
                        </p>
                    </div>
                    <div class="pt-6 border-t border-slate-100">
                        <div class="text-sm font-normal text-[#1E252D]" style="font-family: 'new-hero', sans-serif;">Operations Managing Director</div>
                        <div class="text-xs text-slate-400 font-light mt-0.5">Premier Commercial Laundry Services</div>
                        <div class="text-[11px] text-[#C59B27] uppercase tracking-wider font-medium mt-3">7A Series & Automated Folders</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- FREQUENTLY ASKED QUESTIONS (Clean Alpine Accordion)                       -->
    <!-- ========================================================================= -->
    <section id="faq" class="py-16 sm:py-24 bg-white border-b border-slate-200"
             x-data="{ activeFaq: 0 }">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Technical & Commercial Queries
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Frequently Asked Questions
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Essential engineering guidelines concerning heating selections, roller sizes, moisture retention, and factory support.
                </p>
            </div>

            <!-- Clean Accordion List -->
            <div class="max-w-4xl mx-auto divide-y divide-slate-200 border-t border-b border-slate-200">
                <!-- FAQ Item 1 -->
                <div class="py-6">
                    <button @click="activeFaq = (activeFaq === 0 ? null : 0)" 
                            type="button" 
                            class="w-full text-left flex items-start sm:items-center justify-between gap-4 cursor-pointer focus:outline-hidden group">
                        <span class="text-base sm:text-lg font-normal text-[#1E252D] group-hover:text-[#C59B27] transition-colors leading-snug"
                              style="font-family: 'new-hero', sans-serif;">
                            What is the difference between chest-heated (e² line) and cylinder-drying (G line) ironers?
                        </span>
                        <span class="text-xl text-[#C59B27] font-light transition-transform duration-200 shrink-0 leading-none pt-0.5 sm:pt-0"
                              :class="activeFaq === 0 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="activeFaq === 0" 
                         x-collapse
                         class="pt-4 text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">
                        Chest-heated ironers (e² line) press linen against a concave chromium mirror-finish bed, yielding the highest gloss finish and crisp touch required by luxury hotels. Cylinder-drying ironers (G line) feed laundry with up to 50% residual moisture straight from the washer-extractor, evaporating moisture and finishing in a single continuous pass for maximum hourly production.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="py-6">
                    <button @click="activeFaq = (activeFaq === 1 ? null : 1)" 
                            type="button" 
                            class="w-full text-left flex items-start sm:items-center justify-between gap-4 cursor-pointer focus:outline-hidden group">
                        <span class="text-base sm:text-lg font-normal text-[#1E252D] group-hover:text-[#C59B27] transition-colors leading-snug"
                              style="font-family: 'new-hero', sans-serif;">
                            Which heating energy is most appropriate for our facility (Electric, Steam, or Gas)?
                        </span>
                        <span class="text-xl text-[#C59B27] font-light transition-transform duration-200 shrink-0 leading-none pt-0.5 sm:pt-0"
                              :class="activeFaq === 1 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="activeFaq === 1" 
                         x-collapse
                         class="pt-4 text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">
                        Steam heating is the most economical choice when a central boiler is already active on-site (typical in hospitals and commercial laundry plants). Direct Gas heating provides rapid temperature recovery and low operating overhead without boiler investment. Electric heating is ideal for on-premise laundries (OPL), boutique hotels, or locations where natural gas or steam utilities are unavailable.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="py-6">
                    <button @click="activeFaq = (activeFaq === 2 ? null : 2)" 
                            type="button" 
                            class="w-full text-left flex items-start sm:items-center justify-between gap-4 cursor-pointer focus:outline-hidden group">
                        <span class="text-base sm:text-lg font-normal text-[#1E252D] group-hover:text-[#C59B27] transition-colors leading-snug"
                              style="font-family: 'new-hero', sans-serif;">
                            How do I choose the correct roller width for bed linen?
                        </span>
                        <span class="text-xl text-[#C59B27] font-light transition-transform duration-200 shrink-0 leading-none pt-0.5 sm:pt-0"
                              :class="activeFaq === 2 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="activeFaq === 2" 
                         x-collapse
                         class="pt-4 text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">
                        For king and queen-size hotel bed sheets (typically 2400 to 2800 mm wide), we recommend a minimum working roller width of 2600 to 3200 mm. This allows single-operator longitudinal feeding without preliminary folding, significantly speeding up finishing rates.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="py-6">
                    <button @click="activeFaq = (activeFaq === 3 ? null : 3)" 
                            type="button" 
                            class="w-full text-left flex items-start sm:items-center justify-between gap-4 cursor-pointer focus:outline-hidden group">
                        <span class="text-base sm:text-lg font-normal text-[#1E252D] group-hover:text-[#C59B27] transition-colors leading-snug"
                              style="font-family: 'new-hero', sans-serif;">
                            How are spare parts and telemetry technical assistance managed?
                        </span>
                        <span class="text-xl text-[#C59B27] font-light transition-transform duration-200 shrink-0 leading-none pt-0.5 sm:pt-0"
                              :class="activeFaq === 3 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="activeFaq === 3" 
                         x-collapse
                         class="pt-4 text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">
                        We maintain full factory inventories of replacement drive belts, padding springs, heating elements, thermostats, and pneumatic components. Our telemetry-enabled ironers allow 7A Global technicians to review operating data and diagnostic logs remotely, minimizing downtime.
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="py-6">
                    <button @click="activeFaq = (activeFaq === 4 ? null : 4)" 
                            type="button" 
                            class="w-full text-left flex items-start sm:items-center justify-between gap-4 cursor-pointer focus:outline-hidden group">
                        <span class="text-base sm:text-lg font-normal text-[#1E252D] group-hover:text-[#C59B27] transition-colors leading-snug"
                              style="font-family: 'new-hero', sans-serif;">
                            Do you provide on-site installation and operator training?
                        </span>
                        <span class="text-xl text-[#C59B27] font-light transition-transform duration-200 shrink-0 leading-none pt-0.5 sm:pt-0"
                              :class="activeFaq === 4 ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="activeFaq === 4" 
                         x-collapse
                         class="pt-4 text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">
                        Yes. 7A Global delivers comprehensive commissioning assistance, including steam/gas hookup verification, exhaust duct calibration, and hands-on maintenance training for your engineering and laundry personnel.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- ENGINEERING CREDENTIALS (Clean Metric Ribbon)                             -->
    <!-- ========================================================================= -->
    <section id="credentials" class="py-14 sm:py-16 bg-[#1E252D] text-white border-b border-[#C59B27]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-white/10 text-center">
                <div class="py-6 px-4">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">25+</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Years Engineering</div>
                </div>
                <div class="py-6 px-4">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">1,200+</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Machines Installed</div>
                </div>
                <div class="py-6 px-4 border-t md:border-t-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">30%</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Energy Savings</div>
                </div>
                <div class="py-6 px-4 border-t md:border-t-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">24/7</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Spares & Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- TALK WITH US (Clean Form & Direct Contacts)                               -->
    <!-- ========================================================================= -->
    <section id="contact" class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-14">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Contact & Inquiries
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Talk With Us
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Connect directly with our engineering department for machinery proposals, custom roller diameters, and plant layout consulting.
                </p>
            </div>

            <!-- 2-Column Split Clean Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <!-- Left Details (5 cols) -->
                <div class="lg:col-span-5 space-y-8">
                    <div>
                        <h3 class="text-xl sm:text-2xl font-normal text-[#1E252D] mb-4" style="font-family: 'new-hero', sans-serif;">
                            7A GLOBAL MACHINERY PVT. LTD.
                        </h3>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed">
                            Looking for a tailored laundry equipment specification, customized roller heating setup, or spare parts quote? Our mechanical engineering specialists are ready to assist.
                        </p>
                    </div>

                    <div class="border-t border-b border-slate-200 py-6 space-y-4 text-xs font-light text-[#1E252D] leading-relaxed">
                        <p class="flex items-baseline gap-4">
                            <span class="font-normal uppercase tracking-wider text-[#C59B27] w-20 shrink-0">Phone</span>
                            <a href="tel:+911204567890" class="hover:text-[#C59B27] transition-colors">+91 (0) 120 456 7890 – 82547</a>
                        </p>
                        <p class="flex items-baseline gap-4">
                            <span class="font-normal uppercase tracking-wider text-[#C59B27] w-20 shrink-0">Email</span>
                            <a href="mailto:info@7aglobalmachinery.com" class="hover:text-[#C59B27] transition-colors">info@7aglobalmachinery.com</a>
                        </p>
                        <p class="flex items-baseline gap-4">
                            <span class="font-normal uppercase tracking-wider text-[#C59B27] w-20 shrink-0">Factory</span>
                            <span>Industrial Corridor, Phase 7, Greater Noida (NCR) – India</span>
                        </p>
                    </div>

                    <div class="text-[11px] text-[#64748B] font-light tracking-wide">
                        Operating Hours: Monday – Saturday (09:00 – 18:00 IST)
                    </div>
                </div>

                <!-- Right Form (7 cols) -->
                <div class="lg:col-span-7 bg-[#FAF9F6] p-6 sm:p-10 lg:p-12 border border-slate-200">
                    @if($quoteSubmitted)
                    <div class="p-8 text-center bg-amber-50/50 border border-[#C59B27]/30">
                        <h4 class="text-lg font-normal text-[#C59B27] mb-2 uppercase tracking-wide">Inquiry Received</h4>
                        <p class="text-xs text-[#1E252D] font-light leading-relaxed">
                            Thank you, {{ $quoteName }}. Our application engineers have logged your request and will contact you promptly.
                        </p>
                        <button wire:click="resetQuoteForm" type="button" class="mt-6 px-6 py-2.5 bg-[#C59B27] text-white text-xs uppercase tracking-wider font-normal cursor-pointer">
                            Send Another Request
                        </button>
                    </div>
                    @else
                    <form wire:submit.prevent="submitQuote" class="space-y-6">
                        <div>
                            <label class="block text-[11px] uppercase tracking-[0.15em] text-[#64748B] font-light mb-1.5">
                                Name and Surname *
                            </label>
                            <input type="text" 
                                   wire:model="quoteName" 
                                   required
                                   class="w-full text-xs py-2.5 px-0 border-b border-slate-300 focus:border-[#C59B27] bg-transparent focus:outline-hidden transition-colors">
                            @error('quoteName') <span class="text-[10px] text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-[11px] uppercase tracking-[0.15em] text-[#64748B] font-light mb-1.5">
                                    Corporate Email *
                                </label>
                                <input type="email" 
                                       wire:model="quoteEmail" 
                                       required
                                       class="w-full text-xs py-2.5 px-0 border-b border-slate-300 focus:border-[#C59B27] bg-transparent focus:outline-hidden transition-colors">
                                @error('quoteEmail') <span class="text-[10px] text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-[11px] uppercase tracking-[0.15em] text-[#64748B] font-light mb-1.5">
                                    Phone / WhatsApp *
                                </label>
                                <input type="tel" 
                                       wire:model="quotePhone" 
                                       required
                                       class="w-full text-xs py-2.5 px-0 border-b border-slate-300 focus:border-[#C59B27] bg-transparent focus:outline-hidden transition-colors">
                                @error('quotePhone') <span class="text-[10px] text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-[11px] uppercase tracking-[0.15em] text-[#64748B] font-light mb-1.5">
                                Equipment Line
                            </label>
                            <select wire:model="quoteModel" class="w-full text-xs py-2.5 px-0 border-b border-slate-300 focus:border-[#C59B27] bg-transparent focus:outline-hidden transition-colors">
                                <option value="e² Line Chest Heated Ironers">e² Line Chest Heated Ironers</option>
                                <option value="G Line Drying Ironers">G Line Drying Ironers</option>
                                <option value="7A Line Commercial Ironers">7A Line Commercial Ironers</option>
                                <option value="Automated Folding & Feeding Systems">Automated Folding & Feeding Systems</option>
                                <option value="Spare Parts & Technical Service">Spare Parts & Technical Service</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-[11px] uppercase tracking-[0.15em] text-[#64748B] font-light mb-1.5">
                                Message & Requirements
                            </label>
                            <textarea wire:model="quoteMessage" 
                                      rows="3" 
                                      placeholder="Describe your laundry capacity, linen dimensions, and energy source..."
                                      class="w-full text-xs py-2.5 px-0 border-b border-slate-300 focus:border-[#C59B27] bg-transparent focus:outline-hidden transition-colors resize-none"></textarea>
                        </div>

                        <button type="submit" 
                                class="w-full py-3.5 bg-[#C59B27] hover:bg-[#9A7514] text-white font-normal text-xs uppercase tracking-[0.2em] transition-colors cursor-pointer">
                            Submit Inquiry
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>