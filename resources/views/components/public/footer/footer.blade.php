<footer class="bg-[#1E252D] text-white border-t border-[#C59B27] transition-colors"
        style="font-family: 'new-hero', sans-serif;"
        x-data="{ newsletterModal: false, newsletterEmail: '', newsletterSuccess: false }">


    <!-- ========================================================================= -->
    <!-- 2. MAIN NAVIGATION MATRIX                                                 -->
    <!-- ========================================================================= -->
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

                    <!-- Column 2: COMPANY, TECHNOLOGY, PRODUCTS -->
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

                    <!-- Column 3: SERVICES, MEDIA, CONTACTS -->
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

    <!-- ========================================================================= -->
    <!-- 3. BOTTOM COPYRIGHT STRIP                                                 -->
    <!-- ========================================================================= -->
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

    <!-- ========================================================================= -->
    <!-- NEWSLETTER MODAL                                                          -->
    <!-- ========================================================================= -->
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
