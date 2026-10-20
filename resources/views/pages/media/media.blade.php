<div class="relative w-full bg-white">

    <!-- ========================================================================= -->
    <!-- HERO (Clean, Image-free) + BREADCRUMB                                     -->
    <!-- ========================================================================= -->
    <section class="relative w-full bg-[#1E252D] border-b border-[#C59B27] overflow-hidden">
        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-20 sm:py-28">
            <span class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-5">
                <i class="ri-newspaper-line text-base"></i>
                Newsroom
            </span>
            <h1 class="text-3xl sm:text-4xl lg:text-[52px] font-light uppercase tracking-[0.05em] text-white leading-tight max-w-3xl"
                style="font-family: 'new-hero', sans-serif;">
                Media
            </h1>
            <p class="text-xs sm:text-sm text-white/60 font-light max-w-xl leading-relaxed mt-5">
                News, events, press releases, and videos from 7A Global — covering product launches, industry exhibitions, and project milestones.
            </p>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" class="border-b border-slate-200 bg-[#FAF9F6]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 py-4">
            <ol class="flex items-center gap-2 text-[11px] uppercase tracking-[0.15em] font-light text-[#64748B]">
                <li><a href="{{ route('home') }}" class="hover:text-[#C59B27] transition-colors inline-flex items-center gap-1.5"><i class="ri-home-4-line text-sm"></i> Home</a></li>
                <li class="text-[#C59B27]"><i class="ri-arrow-right-s-line"></i></li>
                <li class="text-[#1E252D]">Media</li>
            </ol>
        </div>
    </nav>

    <!-- ========================================================================= -->
    <!-- MEDIA (Filterable Grid)                                                   -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-10 border-b border-[#C59B27] mb-12">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium block mb-3">
                        Latest Updates
                    </span>
                    <h2 class="text-2xl sm:text-3xl lg:text-[40px] font-light uppercase tracking-[0.05em] text-[#1E252D]"
                        style="font-family: 'new-hero', sans-serif;">
                        News &amp; Press
                    </h2>
                </div>
                <p class="text-xs sm:text-[13px] text-[#64748B] font-light max-w-md leading-relaxed">
                    Browse our latest announcements by category to stay updated on company and product developments.
                </p>
            </div>

            <!-- Type Filter -->
            <div class="flex flex-wrap gap-3 mb-10">
                <button type="button" wire:click="setType('all')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $type === 'all' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    All
                </button>
                <button type="button" wire:click="setType('news')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $type === 'news' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    News
                </button>
                <button type="button" wire:click="setType('event')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $type === 'event' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    Events
                </button>
                <button type="button" wire:click="setType('press')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $type === 'press' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    Press Releases
                </button>
                <button type="button" wire:click="setType('video')"
                        class="px-5 py-2.5 border text-[11px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer {{ $type === 'video' ? 'border-[#C59B27] bg-[#C59B27] text-white' : 'border-slate-200 bg-white text-[#1E252D] hover:border-[#C59B27]' }}">
                    Videos
                </button>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                @foreach($this->filteredMedia() as $item)
                <article class="bg-white border border-slate-200 hover:border-[#C59B27] transition-all duration-300 p-6 sm:p-8 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between pb-6 mb-6 border-b border-slate-100">
                            <span class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.2em] text-[#C59B27] font-medium">
                                <i class="ri-price-tag-3-line"></i> {{ $item['typeLabel'] }}
                            </span>
                            <span class="text-[11px] text-slate-400 font-light">{{ $item['date'] }}</span>
                        </div>

                        <h3 class="text-xl sm:text-2xl font-light text-[#1E252D] group-hover:text-[#C59B27] transition-colors mb-4"
                            style="font-family: 'new-hero', sans-serif;">
                            {{ $item['title'] }}
                        </h3>

                        <p class="text-xs sm:text-[13px] text-[#64748B] font-light leading-relaxed">
                            {{ $item['excerpt'] }}
                        </p>
                    </div>

                    <div class="pt-8 mt-8 border-t border-slate-100">
                        <a href="{{ route('contact') }}"
                           class="w-full py-3 text-xs uppercase tracking-[0.15em] font-light text-[#1E252D] group-hover:text-[#C59B27] flex items-center justify-between border-b border-transparent group-hover:border-[#C59B27] transition-all">
                            <span>Read More</span>
                            <span class="text-base group-hover:translate-x-1 transition-transform"><i class="ri-arrow-right-line"></i></span>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- SUBSCRIBE STRIP                                                           -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="bg-[#1E252D] border border-[#C59B27] px-6 sm:px-12 lg:px-16 py-12 sm:py-16 flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="text-center lg:text-left">
                    <span class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-3">
                        <i class="ri-mail-line text-base"></i>
                        Stay Informed
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-light uppercase tracking-[0.05em] text-white"
                        style="font-family: 'new-hero', sans-serif;">
                        Subscribe to Our Updates
                    </h2>
                    <p class="text-xs sm:text-[13px] text-white/60 font-light max-w-xl leading-relaxed mt-4">
                        Receive regular updates on flatwork ironer innovations, technological breakthroughs, and exhibition dates.
                    </p>
                </div>
                <div class="shrink-0 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}"
                       class="text-center px-8 py-3.5 bg-[#C59B27] hover:bg-[#9A7514] text-white text-xs uppercase tracking-[0.2em] font-light transition-colors inline-flex items-center justify-center gap-2">
                        <i class="ri-send-plane-line"></i> Subscribe
                    </a>
                    <a href="{{ route('projects') }}"
                       class="text-center px-8 py-3.5 border border-[#C59B27] text-[#C59B27] hover:bg-[#C59B27] hover:text-white text-xs uppercase tracking-[0.2em] font-light transition-colors inline-flex items-center justify-center gap-2">
                        <i class="ri-folder-chart-line"></i> View Projects
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
