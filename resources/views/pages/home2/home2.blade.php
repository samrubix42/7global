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
    <!-- 1. HERO SLIDER SECTION (Exact aesthetic matching Home slider)             -->
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

        <!-- Slide 2 -->
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

        <!-- Slide 3 -->
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
    <!-- 2. SECTION HEAD & CLEAN ARCHITECTURAL CARDS                               -->
    <!-- ========================================================================= -->
    <section class="bg-white pt-14 lg:pt-20 pb-6">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#C59B27]"
                style="font-family: 'new-hero', sans-serif;">
                FLATWORK IRONER MANUFACTURER
            </h2>
        </div>
    </section>

    <!-- 3-Column Clean Card Grid with Architectural Dividers & Flush Corner Buttons -->
    <section id="solutions" class="bg-white border-t border-b border-[#C59B27]">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-[#C59B27]">
                <!-- CARD 1: e² line -->
                <div class="relative bg-white p-8 sm:p-10 lg:p-14 pb-20 flex flex-col justify-between group">
                    <div>
                        <!-- Machine Image -->
                        <div class="h-44 sm:h-48 lg:h-52 flex items-center justify-center mb-8 overflow-hidden">
                            <img src="/images/menu-e2.jpg" 
                                 alt="e² line flatwork ironer" 
                                 class="max-h-full max-w-full object-contain group-hover:scale-102 transition-transform duration-300">
                        </div>

                        <!-- Title in Brand Gold -->
                        <h3 class="text-2xl sm:text-3xl lg:text-[34px] font-bold text-[#C59B27] tracking-tight mb-5"
                            style="font-family: 'new-hero', sans-serif;">
                            e² line
                        </h3>

                        <!-- Clean Description Text -->
                        <div class="space-y-4 text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed">
                            <p>Evolution meets finest ironing finish and ease of use.</p>
                            <p>Create an ironing solution that is tailored to your business choosing from 6 chest heated ironers sizes.</p>
                        </div>
                    </div>

                    <!-- Bottom Right Docked Square Button -->
                    <a href="#contact" 
                       aria-label="Explore e² line"
                       class="absolute bottom-0 right-0 w-[50px] h-[50px] bg-[#C59B27] hover:bg-[#9A7514] text-white flex items-center justify-center transition-colors cursor-pointer">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- CARD 2: G line -->
                <div class="relative bg-white p-8 sm:p-10 lg:p-14 pb-20 flex flex-col justify-between group">
                    <div>
                        <!-- Machine Image -->
                        <div class="h-44 sm:h-48 lg:h-52 flex items-center justify-center mb-8 overflow-hidden">
                            <img src="/images/menu-g.jpg" 
                                 alt="G line drying ironer" 
                                 class="max-h-full max-w-full object-contain group-hover:scale-102 transition-transform duration-300">
                        </div>

                        <!-- Title in Brand Gold -->
                        <h3 class="text-2xl sm:text-3xl lg:text-[34px] font-bold text-[#C59B27] tracking-tight mb-5"
                            style="font-family: 'new-hero', sans-serif;">
                            G line
                        </h3>

                        <!-- Clean Description Text -->
                        <div class="space-y-4 text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed">
                            <p>When maximum performance and efficiency are the focus.</p>
                            <p>9 cylinder heated ironer sizes and countless versions for a non-stop productivity.</p>
                        </div>
                    </div>

                    <!-- Bottom Right Docked Square Button -->
                    <a href="#contact" 
                       aria-label="Explore G line"
                       class="absolute bottom-0 right-0 w-[50px] h-[50px] bg-[#C59B27] hover:bg-[#9A7514] text-white flex items-center justify-center transition-colors cursor-pointer">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- CARD 3: 7A line -->
                <div class="relative bg-white p-8 sm:p-10 lg:p-14 pb-20 flex flex-col justify-between group">
                    <div>
                        <!-- Machine Image -->
                        <div class="h-44 sm:h-48 lg:h-52 flex items-center justify-center mb-8 overflow-hidden">
                            <img src="/images/menu-7a.jpg" 
                                 alt="7A line chest ironer" 
                                 class="max-h-full max-w-full object-contain group-hover:scale-102 transition-transform duration-300">
                        </div>

                        <!-- Title in Brand Gold -->
                        <h3 class="text-2xl sm:text-3xl lg:text-[34px] font-bold text-[#C59B27] tracking-tight mb-5"
                            style="font-family: 'new-hero', sans-serif;">
                            7A line
                        </h3>

                        <!-- Clean Description Text -->
                        <div class="space-y-4 text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed">
                            <p>Your very first steps into flatwork ironing.</p>
                            <p>8 basic models of chest heated ironer for a compact, simple and efficient performance.</p>
                        </div>
                    </div>

                    <!-- Bottom Right Docked Square Button -->
                    <a href="#contact" 
                       aria-label="Explore 7A line"
                       class="absolute bottom-0 right-0 w-[50px] h-[50px] bg-[#C59B27] hover:bg-[#9A7514] text-white flex items-center justify-center transition-colors cursor-pointer">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. SECTION HEAD & INTERACTIVE IRONER FINDER                               -->
    <!-- ========================================================================= -->
    <section class="bg-white pt-14 lg:pt-20 pb-6">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#C59B27]"
                style="font-family: 'new-hero', sans-serif;">
                IRONER FINDER
            </h2>
        </div>
    </section>

    <!-- 3-Column Architectural Finder Grid -->
    <section id="finder" class="bg-white border-t border-b border-[#C59B27]">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 divide-y lg:divide-y-0 lg:divide-x divide-[#C59B27]">
                <!-- STEP 1: Facility Type -->
                <div class="p-8 sm:p-10 lg:p-14 bg-white flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold tracking-[0.25em] uppercase text-[#64748B] block mb-4">
                            01. APPLICATION SECTOR
                        </span>
                        <h3 class="text-xl sm:text-2xl font-normal text-[#1E252D] mb-6" style="font-family: 'new-hero', sans-serif;">
                            Select Facility
                        </h3>
                        <div class="space-y-2.5">
                            <button type="button" 
                                    wire:click="setFilter('facility', 'hotel')"
                                    class="w-full text-left py-3 px-4 border transition-all text-xs tracking-wider uppercase font-normal cursor-pointer flex items-center justify-between {{ $facility === 'hotel' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Luxury Hotels & Resorts</span>
                                <span class="text-xs {{ $facility === 'hotel' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('facility', 'hospital')"
                                    class="w-full text-left py-3 px-4 border transition-all text-xs tracking-wider uppercase font-normal cursor-pointer flex items-center justify-between {{ $facility === 'hospital' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Healthcare & Hospitals</span>
                                <span class="text-xs {{ $facility === 'hospital' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('facility', 'commercial')"
                                    class="w-full text-left py-3 px-4 border transition-all text-xs tracking-wider uppercase font-normal cursor-pointer flex items-center justify-between {{ $facility === 'commercial' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Industrial Laundry Plant</span>
                                <span class="text-xs {{ $facility === 'commercial' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('facility', 'institution')"
                                    class="w-full text-left py-3 px-4 border transition-all text-xs tracking-wider uppercase font-normal cursor-pointer flex items-center justify-between {{ $facility === 'institution' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Cruise & Institutions</span>
                                <span class="text-xs {{ $facility === 'institution' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- STEP 2: Hourly Capacity & Heating -->
                <div class="p-8 sm:p-10 lg:p-14 bg-white flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold tracking-[0.25em] uppercase text-[#64748B] block mb-4">
                            02. VOLUME & MEDIUM
                        </span>
                        <h3 class="text-xl sm:text-2xl font-normal text-[#1E252D] mb-6" style="font-family: 'new-hero', sans-serif;">
                            Hourly Capacity
                        </h3>
                        <div class="space-y-2.5 mb-8">
                            <button type="button" 
                                    wire:click="setFilter('capacity', 'compact')"
                                    class="w-full text-left py-3 px-4 border transition-all text-xs tracking-wider uppercase font-normal cursor-pointer flex items-center justify-between {{ $capacity === 'compact' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Compact OPL (30 - 60 kg/h)</span>
                                <span class="text-xs {{ $capacity === 'compact' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('capacity', 'medium')"
                                    class="w-full text-left py-3 px-4 border transition-all text-xs tracking-wider uppercase font-normal cursor-pointer flex items-center justify-between {{ $capacity === 'medium' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>Medium Industrial (70 - 150 kg/h)</span>
                                <span class="text-xs {{ $capacity === 'medium' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('capacity', 'heavy')"
                                    class="w-full text-left py-3 px-4 border transition-all text-xs tracking-wider uppercase font-normal cursor-pointer flex items-center justify-between {{ $capacity === 'heavy' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                <span>High Capacity (160 - 320+ kg/h)</span>
                                <span class="text-xs {{ $capacity === 'heavy' ? 'opacity-100' : 'opacity-0' }}">✓</span>
                            </button>
                        </div>

                        <span class="text-[11px] font-bold tracking-[0.25em] uppercase text-[#64748B] block mb-3">
                            HEATING ENERGY
                        </span>
                        <div class="grid grid-cols-3 gap-2">
                            <button type="button" 
                                    wire:click="setFilter('heating', 'electric')"
                                    class="p-2.5 text-center border text-xs tracking-wider uppercase font-normal cursor-pointer {{ $heating === 'electric' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                Electric
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('heating', 'steam')"
                                    class="p-2.5 text-center border text-xs tracking-wider uppercase font-normal cursor-pointer {{ $heating === 'steam' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                Steam
                            </button>
                            <button type="button" 
                                    wire:click="setFilter('heating', 'gas')"
                                    class="p-2.5 text-center border text-xs tracking-wider uppercase font-normal cursor-pointer {{ $heating === 'gas' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 text-[#1E252D] hover:border-[#C59B27]' }}">
                                Gas
                            </button>
                        </div>
                    </div>
                </div>

                <!-- STEP 3: Recommended Match & Action with Docked Corner Button -->
                <div class="relative p-8 sm:p-10 lg:p-14 pb-20 bg-white flex flex-col justify-between">
                    <div>
                        <span class="text-[11px] font-bold tracking-[0.25em] uppercase text-[#C59B27] block mb-4">
                            03. RECOMMENDED MODEL
                        </span>

                        <!-- Machine Photo for matching model -->
                        <div class="h-32 flex items-center justify-center mb-6 overflow-hidden">
                            @if($capacity === 'compact')
                                <img src="/images/menu-e2.jpg" alt="e² Line Recommendation" class="max-h-full max-w-full object-contain">
                            @elseif($capacity === 'medium')
                                <img src="/images/menu-g.jpg" alt="G Line Recommendation" class="max-h-full max-w-full object-contain">
                            @else
                                <img src="/images/menu-7a.jpg" alt="7A Line Recommendation" class="max-h-full max-w-full object-contain">
                            @endif
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-bold text-[#1E252D] mb-4" style="font-family: 'new-hero', sans-serif;">
                            @if($capacity === 'compact')
                                e² 140.30 Line
                            @elseif($capacity === 'medium')
                                e² 200.30 / G 21.35
                            @else
                                G 32.50 Industrial
                            @endif
                        </h3>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed mb-6">
                            Configured specifically for your selected output. Provides optimized linen contact pressure, automated speed synchronization, and minimum steam/power consumption.
                        </p>

                        <div class="border-t border-b border-slate-200 py-4 space-y-2 text-xs text-[#1E252D]">
                            <div class="flex justify-between">
                                <span class="text-[#64748B]">Heating:</span>
                                <span class="font-semibold uppercase text-[#C59B27]">{{ $heating }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-[#64748B]">Target Sector:</span>
                                <span class="font-semibold uppercase text-[#1E252D]">{{ $facility }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Docked Corner Square Button -->
                    <a href="#contact" 
                       aria-label="Inquire for recommended model"
                       class="absolute bottom-0 right-0 w-[50px] h-[50px] bg-[#C59B27] hover:bg-[#9A7514] text-white flex items-center justify-center transition-colors cursor-pointer">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. SECTION HEAD & SERVICE & TECHNOLOGY                                   -->
    <!-- ========================================================================= -->
    <section class="bg-white pt-14 lg:pt-20 pb-6">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#C59B27]"
                style="font-family: 'new-hero', sans-serif;">
                SERVICE & TECHNOLOGY
            </h2>
        </div>
    </section>

    <!-- 2-Box Architectural Split Grid with Docked Corner Buttons -->
    <section id="technology" class="bg-white border-t border-b border-[#C59B27]">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 divide-y lg:divide-y-0 lg:divide-x divide-[#C59B27]">
                <!-- BOX 1: SERVICE -->
                <div class="relative bg-white p-8 sm:p-10 lg:p-14 pb-20 flex flex-col justify-between group">
                    <div>
                        <div class="h-60 sm:h-72 lg:h-80 overflow-hidden mb-8">
                            <img src="/images/hero-1.jpg" 
                                 alt="Service and Technical Support" 
                                 class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-500">
                        </div>
                        <h3 class="text-2xl sm:text-3xl lg:text-[34px] font-bold text-[#C59B27] tracking-tight mb-4"
                            style="font-family: 'new-hero', sans-serif;">
                            SERVICE
                        </h3>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed">
                            7A Global has always stood out for its attention to the customer before, during, and after purchase, with an efficient and punctual technical service, enriched with constantly updated telemetry tools and genuine guaranteed spare parts.
                        </p>
                    </div>

                    <!-- Docked Corner Button -->
                    <a href="#contact" 
                       aria-label="Learn more about service"
                       class="absolute bottom-0 right-0 w-[50px] h-[50px] bg-[#C59B27] hover:bg-[#9A7514] text-white flex items-center justify-center transition-colors cursor-pointer">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>

                <!-- BOX 2: TECHNOLOGY -->
                <div class="relative bg-white p-8 sm:p-10 lg:p-14 pb-20 flex flex-col justify-between group">
                    <div>
                        <div class="h-60 sm:h-72 lg:h-80 overflow-hidden mb-8">
                            <img src="/images/hero-2.jpg" 
                                 alt="Machinery Technology" 
                                 class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-500">
                        </div>
                        <h3 class="text-2xl sm:text-3xl lg:text-[34px] font-bold text-[#C59B27] tracking-tight mb-4"
                            style="font-family: 'new-hero', sans-serif;">
                            TECHNOLOGY
                        </h3>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed">
                            Continuous research and innovations in 7A systems extend the varieties and types of treatable fabrics without fiber degradation. Impeccable finish, gentle thermal treatment, and reduction of ironing times to maximize productivity and ironing quality.
                        </p>
                    </div>

                    <!-- Docked Corner Button -->
                    <a href="#contact" 
                       aria-label="Learn more about technology"
                       class="absolute bottom-0 right-0 w-[50px] h-[50px] bg-[#C59B27] hover:bg-[#9A7514] text-white flex items-center justify-center transition-colors cursor-pointer">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. NUMERICAL CREDENTIALS (Metrics Grid)                                   -->
    <!-- ========================================================================= -->
    <section id="credentials" class="bg-white border-b border-[#C59B27]">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-[#C59B27] text-center">
                <div class="p-8 lg:p-12">
                    <div class="text-4xl sm:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">25+</div>
                    <div class="text-[11px] font-light uppercase tracking-[0.2em] text-[#1E252D] mt-3">Years Engineering</div>
                </div>
                <div class="p-8 lg:p-12">
                    <div class="text-4xl sm:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">1,200+</div>
                    <div class="text-[11px] font-light uppercase tracking-[0.2em] text-[#1E252D] mt-3">Machines Installed</div>
                </div>
                <div class="p-8 lg:p-12">
                    <div class="text-4xl sm:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">30%</div>
                    <div class="text-[11px] font-light uppercase tracking-[0.2em] text-[#1E252D] mt-3">Energy Savings</div>
                </div>
                <div class="p-8 lg:p-12">
                    <div class="text-4xl sm:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">24/7</div>
                    <div class="text-[11px] font-light uppercase tracking-[0.2em] text-[#1E252D] mt-3">Spares & Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. SECTION HEAD & TALK WITH US (Clean Form)                               -->
    <!-- ========================================================================= -->
    <section class="bg-white pt-14 lg:pt-20 pb-6">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#C59B27]"
                style="font-family: 'new-hero', sans-serif;">
                TALK WITH US
            </h2>
        </div>
    </section>

    <!-- 2-Column Split Architectural Form -->
    <section id="contact" class="bg-white border-t border-b border-[#C59B27]">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 divide-y lg:divide-y-0 lg:divide-x divide-[#C59B27]">
                <!-- Left Details -->
                <div class="p-8 sm:p-10 lg:p-14 bg-white flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl sm:text-2xl font-normal text-[#1E252D] mb-4" style="font-family: 'new-hero', sans-serif;">
                            7A GLOBAL MACHINERY PVT. LTD.
                        </h3>
                        <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed mb-8">
                            Looking for a tailored laundry equipment specification, customized roller heating setup, or spare parts quote? Connect directly with our engineering department.
                        </p>

                        <div class="border-t border-b border-slate-200 py-6 space-y-4 text-xs font-light text-[#1E252D] leading-relaxed">
                            <p class="flex items-baseline gap-4">
                                <span class="font-semibold uppercase tracking-wider text-[#C59B27] w-20 shrink-0">Phone</span>
                                <span>+91 (0) 120 456 7890 – 82547</span>
                            </p>
                            <p class="flex items-baseline gap-4">
                                <span class="font-semibold uppercase tracking-wider text-[#C59B27] w-20 shrink-0">Email</span>
                                <span>info@7aglobalmachinery.com</span>
                            </p>
                            <p class="flex items-baseline gap-4">
                                <span class="font-semibold uppercase tracking-wider text-[#C59B27] w-20 shrink-0">Factory</span>
                                <span>Industrial Corridor, Phase 7, Greater Noida (NCR) – India</span>
                            </p>
                        </div>
                    </div>

                    <div class="pt-8 text-[11px] text-[#64748B] font-light tracking-wide">
                        Operating Hours: Monday – Saturday (09:00 – 18:00 IST)
                    </div>
                </div>

                <!-- Right Clean Form -->
                <div class="p-8 sm:p-10 lg:p-14 bg-white">
                    @if($quoteSubmitted)
                    <div class="p-8 text-center bg-amber-50/50 border border-[#C59B27]/30">
                        <h4 class="text-lg font-bold text-[#C59B27] mb-2 uppercase tracking-wide">Inquiry Received</h4>
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