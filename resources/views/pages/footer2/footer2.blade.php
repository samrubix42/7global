<footer class="bg-[#1E252D] text-white border-t border-[#C59B27] transition-colors"
        style="font-family: 'new-hero', sans-serif;"
        x-data="{ newsletterModal: false, newsletterEmail: '', newsletterSuccess: false }">

    <!-- 1. TOP INFORMATION STRIP -->
    <div class="border-b border-white/10 py-14 lg:py-18">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-14">
                
                <!-- COLUMN 1: SUBSCRIBE TO OUR NEWSLETTER -->
                <div class="flex flex-col justify-between">
                    <div>
                        <h3 class="text-sm lg:text-[15px] font-normal uppercase tracking-[0.08em] text-white leading-tight mb-6">
                            SUBSCRIBE<br>TO OUR NEWSLETTER
                        </h3>
                    </div>
                    <div class="pt-2">
                        <button type="button" 
                                @click="newsletterModal = true"
                                class="inline-flex items-center justify-between gap-4 text-xs font-light uppercase tracking-[0.15em] text-white border-b border-white pb-2.5 w-full max-w-[210px] hover:text-[#C59B27] hover:border-[#C59B27] transition-all cursor-pointer group">
                            <span>SUBSCRIBE NOW</span>
                            <span class="text-sm group-hover:translate-x-1 transition-transform">→</span>
                        </button>
                    </div>
                </div>

                <!-- COLUMN 2: TALK WITH US -->
                <div>
                    <h3 class="text-sm lg:text-[15px] font-normal uppercase tracking-[0.08em] text-white leading-tight mb-6">
                        TALK<br>WITH US
                    </h3>
                    <div class="space-y-2.5 text-xs font-light text-white/80 leading-relaxed">
                        <div class="flex items-baseline gap-4">
                            <span class="w-12 text-white/40 lowercase shrink-0">phone</span>
                            <a href="tel:+911204567890" class="hover:text-[#C59B27] transition-colors">
                                +91 (0) 120 456 7890
                            </a>
                        </div>
                        <div class="flex items-baseline gap-4">
                            <span class="w-12 text-white/40 lowercase shrink-0">mail</span>
                            <a href="mailto:info@7aglobalmachinery.com" class="hover:text-[#C59B27] transition-colors">
                                info@7aglobalmachinery.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- COLUMN 3: SOCIALIZE WITH US -->
                <div>
                    <h3 class="text-sm lg:text-[15px] font-normal uppercase tracking-[0.08em] text-white leading-tight mb-6">
                        SOCIALIZE<br>WITH US
                    </h3>
                    <div class="flex items-center gap-6 pt-1 text-white">
                        <a href="https://facebook.com" target="_blank" rel="noopener" class="hover:text-[#C59B27] transition-colors" title="Facebook">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                            </svg>
                        </a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener" class="hover:text-[#C59B27] transition-colors" title="LinkedIn">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com" target="_blank" rel="noopener" class="hover:text-[#C59B27] transition-colors" title="YouTube">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- COLUMN 4: DISTRIBUTOR LOGIN -->
                <div class="flex flex-col justify-between">
                    <div>
                        <h3 class="text-sm lg:text-[15px] font-normal uppercase tracking-[0.08em] text-white leading-tight mb-6">
                            DISTRIBUTOR<br>LOGIN
                        </h3>
                    </div>
                    <div class="pt-2">
                        <a href="#contact" 
                           class="inline-flex items-center justify-between gap-4 text-xs font-light uppercase tracking-[0.15em] text-white border-b border-white pb-2.5 w-full max-w-[180px] hover:text-[#C59B27] hover:border-[#C59B27] transition-all group">
                            <span>MY7A</span>
                            <span class="text-sm group-hover:translate-x-1 transition-transform">→</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- 2. MAIN NAVIGATION MATRIX -->
    <div class="py-16 lg:py-20 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14">
                
                <!-- LEFT LOGO & BRAND INTRO -->
                <div class="lg:col-span-5">
                    <a href="{{ route('home2') }}" class="inline-block mb-6">
                        <img src="/logo.png" 
                             alt="7A Global Machinery" 
                             class="h-10 w-auto brightness-0 invert">
                    </a>
                    <div class="space-y-4 text-xs font-light text-white/60 leading-relaxed max-w-sm">
                        <p>
                            7A Global is a specialized manufacturer of flatwork ironers for OPL, commercial and industrial laundry segments.
                        </p>
                        <p>
                            7A Global offers the widest choice of flatwork ironers, providing dedicated ironing solutions to meet worldwide demands from commercial to industrial.
                        </p>
                    </div>
                </div>

                <!-- RIGHT NAVIGATION COLUMNS -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-10 lg:gap-8 pt-2">
                    <!-- Column 1: IRONERS -->
                    <div>
                        <h4 class="text-base font-normal uppercase tracking-[0.08em] text-white mb-6">
                            IRONERS
                        </h4>
                        <ul class="space-y-3.5 text-xs font-light text-white/60">
                            <li><a href="#solutions" class="hover:text-white transition-colors">e² line</a></li>
                            <li><a href="#solutions" class="hover:text-white transition-colors">G line</a></li>
                            <li><a href="#solutions" class="hover:text-white transition-colors">7A line</a></li>
                        </ul>
                    </div>

                    <!-- Column 2: NAVIGATION -->
                    <div class="space-y-5">
                        <div>
                            <a href="#solutions" class="text-base font-normal uppercase tracking-[0.08em] text-white hover:text-[#C59B27] transition-colors block">
                                PRODUCTS
                            </a>
                        </div>
                        <div>
                            <a href="#technology" class="text-base font-normal uppercase tracking-[0.08em] text-white hover:text-[#C59B27] transition-colors block">
                                TECHNOLOGY
                            </a>
                        </div>
                        <div>
                            <a href="#finder" class="text-base font-normal uppercase tracking-[0.08em] text-white hover:text-[#C59B27] transition-colors block">
                                IRONER FINDER
                            </a>
                        </div>
                    </div>

                    <!-- Column 3: SERVICES & CONTACT -->
                    <div class="space-y-5">
                        <div>
                            <a href="#technology" class="text-base font-normal uppercase tracking-[0.08em] text-white hover:text-[#C59B27] transition-colors block">
                                SERVICES
                            </a>
                        </div>
                        <div>
                            <a href="#credentials" class="text-base font-normal uppercase tracking-[0.08em] text-white hover:text-[#C59B27] transition-colors block">
                                CREDENTIALS
                            </a>
                        </div>
                        <div>
                            <a href="#contact" class="text-base font-normal uppercase tracking-[0.08em] text-white hover:text-[#C59B27] transition-colors block">
                                CONTACTS
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- 3. BOTTOM COPYRIGHT STRIP -->
    <div class="py-8 text-[11px] font-light text-white/40 tracking-wider">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-14 flex flex-col md:flex-row items-center justify-between gap-4">
            <p>© {{ date('Y') }} 7A Global Machinery Pvt. Ltd. All Rights Reserved.</p>
            <div class="flex flex-wrap items-center justify-center gap-3 text-white/40">
                <a href="#solutions" class="hover:text-white transition-colors">Models</a>
                <span class="text-white/20">|</span>
                <a href="#technology" class="hover:text-white transition-colors">Technology</a>
                <span class="text-white/20">|</span>
                <a href="#contact" class="hover:text-white transition-colors">Inquire</a>
                <span class="text-white/20">|</span>
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="hover:text-[#C59B27] transition-colors cursor-pointer">
                    Back to Top ↑
                </button>
            </div>
        </div>
    </div>

    <!-- NEWSLETTER MODAL -->
    <div x-show="newsletterModal" 
         x-cloak
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-xs p-6"
         @keydown.escape.window="newsletterModal = false">
        <div class="bg-white text-[#1E252D] max-w-md w-full p-8 sm:p-10 border border-[#C59B27] relative shadow-2xl"
             @click.away="newsletterModal = false">
            <button type="button" 
                    @click="newsletterModal = false" 
                    class="absolute top-6 right-6 text-2xl text-slate-400 hover:text-[#1E252D] cursor-pointer">
                ×
            </button>
            <h3 class="text-lg font-bold uppercase tracking-[0.08em] text-[#C59B27] mb-2">
                Subscribe to Newsletter
            </h3>
            <p class="text-xs text-[#64748B] font-light mb-6 leading-relaxed">
                Receive regular updates on flatwork ironer innovations, technological breakthroughs, and exhibition dates.
            </p>
            <template x-if="newsletterSuccess">
                <div class="p-4 bg-amber-50 border border-[#C59B27]/40 text-xs text-[#1E252D]">
                    Thank you for subscribing to 7A Global Machinery updates.
                </div>
            </template>
            <template x-if="!newsletterSuccess">
                <form @submit.prevent="newsletterSuccess = true; setTimeout(() => { newsletterModal = false; newsletterSuccess = false; newsletterEmail = ''; }, 2500)" class="space-y-4">
                    <input type="email" 
                           x-model="newsletterEmail" 
                           required 
                           placeholder="Your corporate email address*" 
                           class="w-full text-xs py-2.5 px-0 border-b border-slate-300 focus:border-[#C59B27] bg-transparent focus:outline-hidden transition-colors">
                    <button type="submit" 
                            class="w-full py-3 bg-[#C59B27] hover:bg-[#9A7514] text-white text-xs uppercase tracking-[0.15em] font-normal transition-colors cursor-pointer">
                        Confirm Subscription
                    </button>
                </form>
            </template>
        </div>
    </div>
</footer>
