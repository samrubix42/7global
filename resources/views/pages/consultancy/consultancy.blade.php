<div class="relative w-full bg-white">

    <!-- ========================================================================= -->
    <!-- HERO (Clean, Image-free) + BREADCRUMB                                     -->
    <!-- ========================================================================= -->
    <section class="relative w-full bg-[#1E252D] border-b border-[#C59B27] overflow-hidden">
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-20 sm:py-28">
            <span class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-5">
                <i class="ri-compasses-2-line text-base"></i>
                Advisory &amp; Engineering
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-[52px] font-light uppercase tracking-[0.05em] text-white leading-tight max-w-3xl"
                style="font-family: 'new-hero', sans-serif;">
                Consultancy
            </h1>
            <p class="text-xs sm:text-sm text-white/60 font-light max-w-xl leading-relaxed mt-5">
                Independent laundry consultancy for hospitals, corporate groups, and commercial facilities — from feasibility study and plant design to commissioning and lifecycle support.
            </p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="border-b border-slate-200 bg-[#FAF9F6]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-4">
            <ol class="flex items-center gap-2 text-[11px] uppercase tracking-[0.15em] font-light text-[#64748B]">
                <li><a href="{{ route('home') }}" class="hover:text-[#C59B27] transition-colors inline-flex items-center gap-1.5"><i class="ri-home-4-line text-sm"></i> Home</a></li>
                <li class="text-[#C59B27]"><i class="ri-arrow-right-s-line"></i></li>
                <li class="text-[#1E252D]">Consultancy</li>
            </ol>
        </div>
    </nav>

    <!-- ========================================================================= -->
    <!-- CONSULTANCY SERVICES (Clean Icon Cards)                                   -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        What We Offer
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        End-to-End Advisory
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    A structured consultancy framework that turns your laundry requirements into a fully commissioned, efficient processing operation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 sm:p-8 bg-white border border-slate-200 hover:border-[#C59B27] transition-colors group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-clipboard-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Needs Assessment</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Detailed audit of linen volume, fabric mix, shift patterns, and utility availability to establish the right processing capacity.</p>
                </div>

                <div class="p-6 sm:p-8 bg-white border border-slate-200 hover:border-[#C59B27] transition-colors group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-layout-masonry-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Plant Layout &amp; Design</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Optimized workflow layouts with soil-to-clean separation, ensuring smooth linen flow between washers, ironers, and folders.</p>
                </div>

                <div class="p-6 sm:p-8 bg-white border border-slate-200 hover:border-[#C59B27] transition-colors group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-settings-3-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Equipment Specification</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Tailored machine selection spanning roller widths, heating media, and throughput to match exact operational requirements.</p>
                </div>

                <div class="p-6 sm:p-8 bg-white border border-slate-200 hover:border-[#C59B27] transition-colors group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-money-rupee-circle-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Cost &amp; ROI Planning</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Transparent investment modelling covering equipment, utilities, running cost, and projected energy savings across the asset life.</p>
                </div>

                <div class="p-6 sm:p-8 bg-white border border-slate-200 hover:border-[#C59B27] transition-colors group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-tools-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Commissioning</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Installation supervision, steam/gas hookup verification, exhaust calibration, and hands-on operator training.</p>
                </div>

                <div class="p-6 sm:p-8 bg-white border border-slate-200 hover:border-[#C59B27] transition-colors group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-heart-pulse-line"></i>
                    </div>
                    <h3 class="text-lg sm:text-xl font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Aftercare &amp; Telemetry</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Remote diagnostics, preventive maintenance planning, and genuine spare parts to keep your plant running at peak efficiency.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- OUR PROCESS (Numbered Steps)                                              -->
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
                        Our Consultancy Process
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    A four-stage engagement that moves from discovery to long-term performance monitoring without gaps in accountability.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">
                <div class="bg-white border border-slate-200 p-6 sm:p-8 hover:border-[#C59B27] transition-colors">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Stage 01</span>
                        <i class="ri-search-eye-line text-[#C59B27] text-xl"></i>
                    </div>
                    <h3 class="text-lg font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Discovery</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">We visit your site, understand your linen cycle, and map operational pain points and growth targets.</p>
                </div>
                <div class="bg-white border border-slate-200 p-6 sm:p-8 hover:border-[#C59B27] transition-colors">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Stage 02</span>
                        <i class="ri-file-list-3-line text-[#C59B27] text-xl"></i>
                    </div>
                    <h3 class="text-lg font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Proposal</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">A detailed technical proposal with equipment configuration, capacity calculations, and investment outline.</p>
                </div>
                <div class="bg-white border border-slate-200 p-6 sm:p-8 hover:border-[#C59B27] transition-colors">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">Stage 03</span>
                        <i class="ri-rocket-2-line text-[#C59B27] text-xl"></i>
                    </div>
                    <h3 class="text-lg font-normal text-[#1E252D] mb-3" style="font-family: 'new-hero', sans-serif;">Execution</h3>
                    <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">Delivery, installation supervision, utility hookup verification, and hands-on operator training.</p>
                </div>
                <div class="bg-white border border-slate-200 p-6 sm:p-8 hover:border-[#C59B27] transition-colors">
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
    <!-- SECTOR EXPERTISE (Icon List)                                              -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Sectors We Serve
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Consultancy by Sector
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Every sector has distinct linen, hygiene, and throughput demands — our advice is calibrated to each operating environment.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-hospital-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Hospitals</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Infection-control compliant lines engineered for high-turnover medical linen.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-building-2-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Corporate</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Campus and facility laundries planned for predictable throughput and uptime.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-hotel-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Hospitality</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Gloss-finish ironing strategies for hotels, resorts, and banquet linen.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 hover:border-[#C59B27] transition-colors">
                    <i class="ri-store-3-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Commercial</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">High-volume plant design for industrial and third-party laundry operators.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- CTA STRIP                                                                 -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-20 bg-[#FAF9F6]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="bg-[#1E252D] border border-[#C59B27] px-6 sm:px-12 lg:px-16 py-12 sm:py-16 flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="text-center lg:text-left">
                    <span class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-3">
                        <i class="ri-calendar-check-line text-base"></i>
                        Start Your Project
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-light uppercase tracking-[0.05em] text-white"
                        style="font-family: 'new-hero', sans-serif;">
                        Book a Consultancy Session
                    </h2>
                    <p class="text-xs sm:text-[13px] text-white/60 font-light max-w-xl leading-relaxed mt-4">
                        Share your facility details and our consultants will prepare a tailored laundry infrastructure recommendation.
                    </p>
                </div>
                <div class="shrink-0 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
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
