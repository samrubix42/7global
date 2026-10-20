<div class="relative w-full bg-white">

    <!-- ========================================================================= -->
    <!-- HERO (Clean, Image-free) + BREADCRUMB                                     -->
    <!-- ========================================================================= -->
    <section class="relative w-full bg-[#1E252D] border-b border-[#C59B27] overflow-hidden">
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-20 sm:py-28">
            <span class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-5">
                <i class="ri-compasses-2-line text-base"></i>
                Consultancy &amp; Engineering
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-[52px] font-light uppercase tracking-[0.05em] text-white leading-tight max-w-3xl"
                style="font-family: 'new-hero', sans-serif;">
                About Us
            </h1>
            <p class="text-xs sm:text-sm text-white/60 font-light max-w-xl leading-relaxed mt-5">
                Specialized laundry consultancy for hospitals, corporate groups, and commercial facilities — delivering engineered flatwork ironing and linen processing solutions.
            </p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="border-b border-slate-200 bg-[#FAF9F6]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-4">
            <ol class="flex items-center gap-2 text-[11px] uppercase tracking-[0.15em] font-light text-[#64748B]">
                <li><a href="{{ route('home')  }}" wire:navigate class="hover:text-[#C59B27] transition-colors inline-flex items-center gap-1.5"><i class="ri-home-4-line text-sm"></i> Home</a></li>
                <li class="text-[#C59B27]"><i class="ri-arrow-right-s-line"></i></li>
                <li class="text-[#1E252D]">About Us</li>
            </ol>
        </div>
    </nav>

    <!-- ========================================================================= -->
    <!-- WHO WE ARE (Clean Icon Editorial)                                         -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-14">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Who We Are
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Laundry Consultancy Redefined
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    From feasibility study to commissioning, 7A Global advises healthcare, hospitality, and corporate clients on the optimal laundry infrastructure for their operation.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                <div class="lg:col-span-6 overflow-hidden">
                    <img src="/images/hero-1.jpg" alt="7A Global Laundry Consultancy" class="w-full h-[320px] sm:h-[420px] object-cover hover:scale-102 transition-transform duration-700">
                </div>

                <div class="lg:col-span-6 space-y-6">
                    <p class="text-xs sm:text-[13px] text-[#1E252D] font-light leading-relaxed">
                        7A Global is a specialized laundry consultancy and equipment provider serving hospitals, corporate groups, hotel chains, and commercial laundry plants. We combine engineering expertise with operational insight to design linen processing lines that deliver impeccable finish at maximum efficiency.
                    </p>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">
                        Our mandate goes beyond machinery — we analyze fabric mix, throughput targets, utility availability, and space constraints to recommend a complete, future-proof laundry strategy. Whether upgrading an existing plant or building a new on-premise laundry (OPL), our specialists stay with you through every phase.
                    </p>
                    <div class="pt-4 border-t border-slate-100 flex flex-wrap gap-3">
                        <span class="inline-flex items-center gap-2 px-3.5 py-2 border border-slate-200 text-[11px] uppercase tracking-[0.1em] font-light text-[#1E252D]"><i class="ri-hospital-line text-[#C59B27]"></i> Hospitals</span>
                        <span class="inline-flex items-center gap-2 px-3.5 py-2 border border-slate-200 text-[11px] uppercase tracking-[0.1em] font-light text-[#1E252D]"><i class="ri-building-2-line text-[#C59B27]"></i> Corporate</span>
                        <span class="inline-flex items-center gap-2 px-3.5 py-2 border border-slate-200 text-[11px] uppercase tracking-[0.1em] font-light text-[#1E252D]"><i class="ri-hotel-line text-[#C59B27]"></i> Hospitality</span>
                        <span class="inline-flex items-center gap-2 px-3.5 py-2 border border-slate-200 text-[11px] uppercase tracking-[0.1em] font-light text-[#1E252D]"><i class="ri-store-3-line text-[#C59B27]"></i> Commercial</span>
                    </div>
                </div>
            </div>

            <!-- Mission / Vision / Values -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mt-14 lg:mt-16">
                <div class="flex items-start gap-4 p-6 sm:p-8 bg-[#FAF9F6] border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <div class="w-11 h-11 shrink-0 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-xl"><i class="ri-focus-3-line"></i></div>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Our Mission</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Deliver technically sound, energy-efficient laundry infrastructure tailored to each client's real-world operation.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 sm:p-8 bg-[#FAF9F6] border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <div class="w-11 h-11 shrink-0 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-xl"><i class="ri-eye-line"></i></div>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Our Vision</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Be the most trusted engineering partner for institutional laundry projects across the region.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 sm:p-8 bg-[#FAF9F6] border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <div class="w-11 h-11 shrink-0 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-xl"><i class="ri-hand-heart-line"></i></div>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Our Values</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Integrity, precision, and a long-term commitment to every client's success and uptime.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- CONSULTANCY SERVICES (Clean Icon Cards)                                   -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-[#FAF9F6] border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-14">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        What We Do
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        End-to-End Consultancy Services
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    A complete advisory framework covering assessment, design, procurement, installation, and lifecycle support for institutional laundry operations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 flex flex-col group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-clipboard-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3" style="font-family: 'new-hero', sans-serif;">Laundry Needs Assessment</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Detailed audit of linen volume, fabric types, shift patterns, and utility constraints to establish the correct processing capacity.</p>
                </div>

                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 flex flex-col group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-layout-masonry-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3" style="font-family: 'new-hero', sans-serif;">Plant Layout &amp; Design</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Optimized workflow layouts for soil-to-clean separation, ensuring smooth linen flow between washers, ironers, and folders.</p>
                </div>

                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 flex flex-col group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-settings-3-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3" style="font-family: 'new-hero', sans-serif;">Equipment Specification</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Tailored machine selection spanning roller widths, heating media, and throughput to match your exact operational requirements.</p>
                </div>

                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 flex flex-col group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-tools-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3" style="font-family: 'new-hero', sans-serif;">Commissioning &amp; Support</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">On-site installation supervision, operator training, telemetry diagnostics, and guaranteed genuine spare parts throughout the lifecycle.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- WHY CHOOSE US (Clean Icon List)                                           -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-14">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Our Advantage
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Why Choose 7A Global
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    A genuine engineering partner for institutional clients who demand reliability, efficiency, and long-term serviceability.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-hospital-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Healthcare Expertise</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Infection-control compliant systems engineered for high-turnover hospital linen.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-speed-up-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">High-Volume Throughput</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Configurations built for continuous multi-shift commercial operation.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-leaf-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Energy Optimized</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Thermal systems tuned to reduce consumption and operating cost.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-radar-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">24/7 Remote Diagnostics</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Telemetry-enabled support to minimize downtime and speed up service.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-shield-check-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Genuine Spares Guarantee</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Factory inventories of authentic replacement parts, dispatched fast.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-user-star-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Lifetime Partnership</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Ongoing advisory, preventive maintenance, and expansion planning.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- ENGINEERING CREDENTIALS (Metric Ribbon)                                   -->
    <!-- ========================================================================= -->
    <section class="py-14 sm:py-16 bg-[#1E252D] text-white border-b border-[#C59B27]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-white/10 text-center">
                <div class="py-6 px-4">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">25+</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Years Consultancy</div>
                </div>
                <div class="py-6 px-4">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">350+</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Projects Delivered</div>
                </div>
                <div class="py-6 px-4 border-t md:border-t-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">120+</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Hospital Clients</div>
                </div>
                <div class="py-6 px-4 border-t md:border-t-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">24/7</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Advisory Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- OUR APPROACH (Numbered Process Steps)                                     -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-[#FAF9F6] border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-14">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        How We Work
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Our Consultancy Approach
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    A structured four-stage engagement that transforms your laundry requirements into a fully commissioned, efficient processing operation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">
                <div class="relative bg-white border border-slate-200 p-6 sm:p-8 hover:border-[#C59B27] transition-colors">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Stage 01</span>
                        <i class="ri-search-eye-line text-[#C59B27] text-xl"></i>
                    </div>
                    <h3 class="text-lg font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Discovery</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">We visit your site, understand your linen cycle, and map operational pain points and growth targets.</p>
                </div>
                <div class="relative bg-white border border-slate-200 p-6 sm:p-8 hover:border-[#C59B27] transition-colors">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Stage 02</span>
                        <i class="ri-file-list-3-line text-[#C59B27] text-xl"></i>
                    </div>
                    <h3 class="text-lg font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Proposal</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">A detailed technical proposal with equipment configuration, capacity calculations, and investment outline.</p>
                </div>
                <div class="relative bg-white border border-slate-200 p-6 sm:p-8 hover:border-[#C59B27] transition-colors">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Stage 03</span>
                        <i class="ri-rocket-2-line text-[#C59B27] text-xl"></i>
                    </div>
                    <h3 class="text-lg font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Execution</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Delivery, installation supervision, utility hookup verification, and hands-on operator training.</p>
                </div>
                <div class="relative bg-white border border-slate-200 p-6 sm:p-8 hover:border-[#C59B27] transition-colors">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Stage 04</span>
                        <i class="ri-heart-pulse-line text-[#C59B27] text-xl"></i>
                    </div>
                    <h3 class="text-lg font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Aftercare</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Telemetry monitoring, scheduled servicing, and continuous optimization for long-term performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- CTA STRIP                                                                 -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="bg-[#1E252D] border border-[#C59B27] px-6 sm:px-12 lg:px-16 py-12 sm:py-16 flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="text-center lg:text-left">
                    <span class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-3">
                        <i class="ri-calendar-check-line text-base"></i>
                        Plan Your Laundry Project
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-light uppercase tracking-[0.05em] text-white"
                        style="font-family: 'new-hero', sans-serif;">
                        Speak With Our Consultants
                    </h2>
                    <p class="text-xs sm:text-[13px] text-white/60 font-light max-w-xl leading-relaxed mt-4">
                        Whether you are planning a new hospital laundry or upgrading a commercial plant, our consultants are ready to engineer the right solution for you.
                    </p>
                </div>
                <div class="shrink-0 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact')  }}" wire:navigate
                       class="text-center px-8 py-3.5 bg-[#C59B27] hover:bg-[#9A7514] text-white text-xs uppercase tracking-[0.2em] font-light transition-colors inline-flex items-center justify-center gap-2">
                        <i class="ri-mail-send-line"></i> Request Consultation
                    </a>
                    <a href="tel:+911204567890"
                       class="text-center px-8 py-3.5 border border-[#C59B27] text-[#C59B27] hover:bg-[#C59B27] hover:text-white text-xs uppercase tracking-[0.2em] font-light transition-colors inline-flex items-center justify-center gap-2">
                        <i class="ri-phone-line"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>