<div class="relative w-full bg-white">

    <!-- ========================================================================= -->
    <!-- HERO (Clean, Image-free) + BREADCRUMB                                     -->
    <!-- ========================================================================= -->
    <section class="relative w-full bg-[#1E252D] border-b border-[#C59B27] overflow-hidden">
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-20 sm:py-28">
            <span class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-5">
                <i class="ri-book-open-line text-base"></i>
                Machinery Series
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-[52px] font-light uppercase tracking-[0.05em] text-white leading-tight max-w-3xl"
                style="font-family: 'new-hero', sans-serif;">
                Equipment Guide
            </h1>
            <p class="text-xs sm:text-sm text-white/60 font-light max-w-xl leading-relaxed mt-5">
                A complete overview of the 7A Global flatwork ironer range — compare series, roller dimensions, heating options, and output capacity to select the right machine.
            </p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="border-b border-slate-200 bg-[#FAF9F6]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-4">
            <ol class="flex items-center gap-2 text-[11px] uppercase tracking-[0.15em] font-light text-[#64748B]">
                <li><a href="{{ route('home')  }}" wire:navigate class="hover:text-[#C59B27] transition-colors inline-flex items-center gap-1.5"><i class="ri-home-4-line text-sm"></i> Home</a></li>
                <li class="text-[#C59B27]"><i class="ri-arrow-right-s-line"></i></li>
                <li class="text-[#1E252D]">Equipment Guide</li>
            </ol>
        </div>
    </nav>

    <!-- ========================================================================= -->
    <!-- SERIES OVERVIEW (Clean Icon Cards)                                        -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Three Series
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Choose Your Ironer Series
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Each series is engineered around a distinct heating principle and production profile, so you can match machine capability to your operational reality.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 sm:p-8 bg-[#FAF9F6] border border-slate-200 hover:border-[#C59B27] transition-colors group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-fire-line"></i>
                    </div>
                    <h3 class="text-xl font-normal text-[#1E252D] mb-2" style="font-family: 'new-hero', sans-serif;">e² line</h3>
                    <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium block mb-4">Chest Heated</span>
                    <p class="text-xs text-[#64748B] font-light leading-relaxed">Gloss finish and crisp touch. Linen pressed against a concave chromium mirror-finish bed — the highest quality result for luxury and healthcare linen.</p>
                </div>
                <div class="p-6 sm:p-8 bg-[#FAF9F6] border border-slate-200 hover:border-[#C59B27] transition-colors group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-temp-hot-line"></i>
                    </div>
                    <h3 class="text-xl font-normal text-[#1E252D] mb-2" style="font-family: 'new-hero', sans-serif;">G line</h3>
                    <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium block mb-4">Cylinder Heated</span>
                    <p class="text-xs text-[#64748B] font-light leading-relaxed">Maximum throughput. Handles laundry with up to 50% residual moisture straight from the extractor, evaporating and finishing in one pass.</p>
                </div>
                <div class="p-6 sm:p-8 bg-[#FAF9F6] border border-slate-200 hover:border-[#C59B27] transition-colors group">
                    <div class="w-12 h-12 flex items-center justify-center border border-[#C59B27]/40 text-[#C59B27] text-2xl mb-5 group-hover:bg-[#C59B27] group-hover:text-white transition-colors">
                        <i class="ri-tools-line"></i>
                    </div>
                    <h3 class="text-xl font-normal text-[#1E252D] mb-2" style="font-family: 'new-hero', sans-serif;">7A line</h3>
                    <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium block mb-4">Commercial Standard</span>
                    <p class="text-xs text-[#64748B] font-light leading-relaxed">Compact, entry-level professional ironing with intuitive controls and low maintenance — ideal for on-premise and smaller commercial laundries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- FILTERABLE EQUIPMENT GUIDE                                                -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-[#FAF9F6] border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Full Range
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Equipment Specifications
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Filter by series to review the technical profile of each machine family and identify the best fit for your facility.
                </p>
            </div>

            <!-- Series Filter -->
            <div class="flex flex-wrap gap-3 mb-10">
                <button type="button" wire:click="setSeries('all')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $series === 'all' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    All Series
                </button>
                <button type="button" wire:click="setSeries('e2')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $series === 'e2' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    e² line
                </button>
                <button type="button" wire:click="setSeries('g')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $series === 'g' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    G line
                </button>
                <button type="button" wire:click="setSeries('7a')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $series === '7a' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    7A line
                </button>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">
                @foreach($this->equipmentModels() as $item)
                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 lg:p-10 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between pb-6 mb-6 border-b border-slate-100">
                            <span class="text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">{{ $item['category'] }}</span>
                            <span class="text-[11px] text-slate-400 font-light">{{ $item['sizes'] }}</span>
                        </div>

                        <div class="h-44 sm:h-48 flex items-center justify-center mb-8 overflow-hidden bg-[#FAF9F6] p-6">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}"
                                 class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500">
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-light text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3"
                            style="font-family: 'new-hero', sans-serif;">
                            {{ $item['seriesLabel'] }}
                        </h3>

                        <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed mb-8">
                            {{ $item['summary'] }}
                        </p>

                        <div class="space-y-2.5 py-4 border-t border-slate-100 text-xs text-[#1E252D] font-light">
                            <div class="flex justify-between gap-4">
                                <span class="text-slate-400">Roller / Cylinder:</span>
                                <span class="text-right">{{ $item['rollerWidth'] }}</span>
                            </div>
                            <div class="flex justify-between gap-4">
                                <span class="text-slate-400">Heating:</span>
                                <span class="text-right text-[#C59B27] font-normal uppercase">{{ $item['heating'] }}</span>
                            </div>
                            <div class="flex justify-between gap-4">
                                <span class="text-slate-400">Output:</span>
                                <span class="text-right">{{ $item['output'] }}</span>
                            </div>
                            <div class="flex justify-between gap-4">
                                <span class="text-slate-400">Best For:</span>
                                <span class="text-right">{{ $item['bestFor'] }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 border-t border-slate-100">
                        <a href="{{ route('contact')  }}" wire:navigate
                           class="w-full py-3 text-xs uppercase tracking-[0.15em] font-light text-[#1E252D] group-hover:text-[#C59B27] flex items-center justify-between border-b border-transparent group-hover:border-[#C59B27] transition-all">
                            <span>Request Quotation</span>
                            <span class="text-base group-hover:translate-x-1 transition-transform"><i class="ri-arrow-right-line"></i></span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SPEC COMPARISON TABLE                                                     -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        At a Glance
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Section Comparison
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    A side-by-side snapshot of the key parameters that usually decide which ironer series suits a facility.
                </p>
            </div>

            <div class="overflow-x-auto border border-slate-200">
                <table class="w-full text-left border-collapse min-w-[720px]">
                    <thead>
                        <tr class="bg-[#1E252D] text-white">
                            <th class="px-5 py-4 text-[11px] uppercase tracking-[0.15em] font-medium">Series</th>
                            <th class="px-5 py-4 text-[11px] uppercase tracking-[0.15em] font-medium">Heating Principle</th>
                            <th class="px-5 py-4 text-[11px] uppercase tracking-[0.15em] font-medium">Roller / Cylinder</th>
                            <th class="px-5 py-4 text-[11px] uppercase tracking-[0.15em] font-medium">Energy Options</th>
                            <th class="px-5 py-4 text-[11px] uppercase tracking-[0.15em] font-medium">Output</th>
                        </tr>
                    </thead>
                    <tbody class="text-xs text-[#1E252D] font-light divide-y divide-slate-200">
                        <tr class="hover:bg-[#FAF9F6] transition-colors">
                            <td class="px-5 py-4 font-normal" style="font-family: 'new-hero', sans-serif;">e² line</td>
                            <td class="px-5 py-4">Chest Heated</td>
                            <td class="px-5 py-4">1400 – 3200 mm</td>
                            <td class="px-5 py-4 text-[#C59B27] uppercase">Electric • Steam • Gas</td>
                            <td class="px-5 py-4">60 – 220 kg/h</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F6] transition-colors">
                            <td class="px-5 py-4 font-normal" style="font-family: 'new-hero', sans-serif;">G line</td>
                            <td class="px-5 py-4">Cylinder Heated</td>
                            <td class="px-5 py-4">Ø 350 – Ø 800 mm</td>
                            <td class="px-5 py-4 text-[#C59B27] uppercase">Electric • Steam • Gas</td>
                            <td class="px-5 py-4">80 – 320+ kg/h</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F6] transition-colors">
                            <td class="px-5 py-4 font-normal" style="font-family: 'new-hero', sans-serif;">7A line</td>
                            <td class="px-5 py-4">Commercial Standard</td>
                            <td class="px-5 py-4">1000 – 2000 mm</td>
                            <td class="px-5 py-4 text-[#C59B27] uppercase">Electric • Gas</td>
                            <td class="px-5 py-4">30 – 90 kg/h</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- BUYING GUIDELINES (Icon List)                                             -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-[#FAF9F6] border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Selection Guide
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        How to Choose
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Four practical factors that determine the ideal ironer specification for your laundry operation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="flex items-start gap-4 p-6 border border-slate-200 bg-white hover:border-[#C59B27] transition-colors">
                    <i class="ri-speed-up-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Evaluate Volume</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Estimate peak kg/hour to decide between a compact 7A line and a heavy-duty G line.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 bg-white hover:border-[#C59B27] transition-colors">
                    <i class="ri-ruler-2-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Measure Linen Width</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Match roller width to the widest linen — hotels often need 2600–3200 mm.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 bg-white hover:border-[#C59B27] transition-colors">
                    <i class="ri-flashlight-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Check Utilities</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Select heating based on available steam, gas, or electric supply at your site.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-6 border border-slate-200 bg-white hover:border-[#C59B27] transition-colors">
                    <i class="ri-file-list-3-line text-[#C59B27] text-2xl shrink-0"></i>
                    <div>
                        <h3 class="text-base font-normal text-[#1E252D] mb-1.5" style="font-family: 'new-hero', sans-serif;">Plan Layout</h3>
                        <p class="text-xs text-[#64748B] font-light leading-relaxed">Confirm space, feeding direction, and folder integration before finalizing.</p>
                    </div>
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
                        <i class="ri-customer-service-2-line text-base"></i>
                        Need Guidance?
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-light uppercase tracking-[0.05em] text-white"
                        style="font-family: 'new-hero', sans-serif;">
                        Not Sure Which Series Fits?
                    </h2>
                    <p class="text-xs sm:text-[13px] text-white/60 font-light max-w-xl leading-relaxed mt-4">
                        Share your linen volume and utility details with our consultants, and we will recommend the optimal ironer specification.
                    </p>
                </div>
                <div class="shrink-0 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact')  }}" wire:navigate
                       class="text-center px-8 py-3.5 bg-[#C59B27] hover:bg-[#9A7514] text-white text-xs uppercase tracking-[0.2em] font-light transition-colors inline-flex items-center justify-center gap-2">
                        <i class="ri-mail-send-line"></i> Get Recommendation
                    </a>
                    <a href="{{ route('home') }}#finder"
                       class="text-center px-8 py-3.5 border border-[#C59B27] text-[#C59B27] hover:bg-[#C59B27] hover:text-white text-xs uppercase tracking-[0.2em] font-light transition-colors inline-flex items-center justify-center gap-2">
                        <i class="ri-equalizer-line"></i> Ironer Finder
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
