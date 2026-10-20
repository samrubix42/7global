<div class="relative w-full bg-white">

    <!-- ========================================================================= -->
    <!-- HERO (Clean, Image-free) + BREADCRUMB                                     -->
    <!-- ========================================================================= -->
    <section class="relative w-full bg-[#1E252D] border-b border-[#C59B27] overflow-hidden">
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-20 sm:py-28">
            <span class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-5">
                <i class="ri-folder-chart-line text-base"></i>
                Case References
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-[52px] font-light uppercase tracking-[0.05em] text-white leading-tight max-w-3xl"
                style="font-family: 'new-hero', sans-serif;">
                Projects
            </h1>
            <p class="text-xs sm:text-sm text-white/60 font-light max-w-xl leading-relaxed mt-5">
                A selection of laundry infrastructure projects delivered across healthcare, hospitality, corporate, and commercial sectors.
            </p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="border-b border-slate-200 bg-[#FAF9F6]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-4">
            <ol class="flex items-center gap-2 text-[11px] uppercase tracking-[0.15em] font-light text-[#64748B]">
                <li><a href="{{ route('home')  }}" wire:navigate class="hover:text-[#C59B27] transition-colors inline-flex items-center gap-1.5"><i class="ri-home-4-line text-sm"></i> Home</a></li>
                <li class="text-[#C59B27]"><i class="ri-arrow-right-s-line"></i></li>
                <li class="text-[#1E252D]">Projects</li>
            </ol>
        </div>
    </nav>

    <!-- ========================================================================= -->
    <!-- PROJECTS (Filterable Cards)                                               -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Our Work
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        Featured Installations
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Filter by sector to review representative projects and the equipment configurations we recommended.
                </p>
            </div>

            <!-- Sector Filter -->
            <div class="flex flex-wrap gap-3 mb-10">
                <button type="button" wire:click="setSector('all')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $sector === 'all' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    All Projects
                </button>
                <button type="button" wire:click="setSector('healthcare')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $sector === 'healthcare' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    Healthcare
                </button>
                <button type="button" wire:click="setSector('hospitality')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $sector === 'hospitality' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    Hospitality
                </button>
                <button type="button" wire:click="setSector('corporate')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $sector === 'corporate' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    Corporate
                </button>
                <button type="button" wire:click="setSector('commercial')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $sector === 'commercial' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    Commercial
                </button>
            </div>

            <!-- Project Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                @foreach($this->filteredProjects() as $project)
                <div class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 flex flex-col justify-between group overflow-hidden">
                    <div>
                        <div class="relative h-48 overflow-hidden bg-[#FAF9F6]">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-4 left-4 inline-flex items-center gap-2 px-3 py-1.5 bg-[#1E252D]/85 backdrop-blur-xs text-[10px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">
                                <i class="ri-map-pin-2-line"></i> {{ $project['sectorLabel'] }}
                            </span>
                        </div>

                        <div class="p-6 sm:p-8">
                            <div class="flex items-center justify-between pb-6 mb-6 border-b border-slate-100">
                                <span class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">
                                    <i class="ri-focus-3-line"></i> {{ $project['sectorLabel'] }}
                                </span>
                                <span class="text-[11px] text-slate-400 font-light">{{ $project['location'] }}</span>
                            </div>

                            <h3 class="text-xl sm:text-2xl font-light text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-3"
                                style="font-family: 'new-hero', sans-serif;">
                                {{ $project['title'] }}
                            </h3>

                            <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">
                                {{ $project['detail'] }}
                            </p>
                        </div>
                    </div>

                    <div class="px-6 sm:px-8 pb-6 sm:pb-8">
                        <div class="pt-4 border-t border-slate-100">
                            <a href="{{ route('contact')  }}" wire:navigate
                               class="w-full py-3 text-xs uppercase tracking-[0.15em] font-light text-[#1E252D] group-hover:text-[#C59B27] flex items-center justify-between border-b border-transparent group-hover:border-[#C59B27] transition-all">
                                <span>Discuss a Similar Project</span>
                                <span class="text-base group-hover:translate-x-1 transition-transform"><i class="ri-arrow-right-line"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- DELIVERY CREDENTIALS (Metric Ribbon)                                      -->
    <!-- ========================================================================= -->
    <section class="py-14 sm:py-16 bg-[#1E252D] text-white border-b border-[#C59B27]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="grid grid-cols-2 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-white/10 text-center">
                <div class="py-6 px-4">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">350+</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Projects Delivered</div>
                </div>
                <div class="py-6 px-4">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">120+</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Hospital Clients</div>
                </div>
                <div class="py-6 px-4 border-t md:border-t-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">1,200+</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Machines Installed</div>
                </div>
                <div class="py-6 px-4 border-t md:border-t-0">
                    <div class="text-3xl sm:text-4xl lg:text-5xl font-light text-[#C59B27]" style="font-family: 'new-hero', sans-serif;">24/7</div>
                    <div class="text-[10px] sm:text-[11px] font-light uppercase tracking-[0.2em] text-white/80 mt-2 sm:mt-3">Service Support</div>
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
                        Your Project Next
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-light uppercase tracking-[0.05em] text-white"
                        style="font-family: 'new-hero', sans-serif;">
                        Plan Your Laundry Project
                    </h2>
                    <p class="text-xs sm:text-[13px] text-white/60 font-light max-w-xl leading-relaxed mt-4">
                        Tell us about your facility and linen volumes, and we will design the right infrastructure for your operation.
                    </p>
                </div>
                <div class="shrink-0 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact')  }}" wire:navigate
                       class="text-center px-8 py-3.5 bg-[#C59B27] hover:bg-[#9A7514] text-white text-xs uppercase tracking-[0.2em] font-light transition-colors inline-flex items-center justify-center gap-2">
                        <i class="ri-mail-send-line"></i> Start a Project
                    </a>
                    <a href="{{ route('consultancy')  }}" wire:navigate
                       class="text-center px-8 py-3.5 border border-[#C59B27] text-[#C59B27] hover:bg-[#C59B27] hover:text-white text-xs uppercase tracking-[0.2em] font-light transition-colors inline-flex items-center justify-center gap-2">
                        <i class="ri-compasses-2-line"></i> Our Consultancy
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
