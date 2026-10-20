<header x-data="{ mobileNavOpen: false, inquiryOpen: false }" 
        class="sticky top-0 z-40 bg-white border-b border-[#C59B27] transition-all duration-200 select-none">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-8 lg:px-14 py-3.5 sm:py-4 flex items-center justify-between">
        <!-- 1. Brand Logo (left) -->
        <a href="{{ route('home') }}" wire:navigate class="flex items-center group shrink-0" aria-label="7A Global Machinery Pvt. Ltd.">
            <img src="/logo.png" 
                 alt="7A GLOBAL MACHINERY PVT. LTD." 
                 class="h-9 sm:h-11 lg:h-13 w-auto object-contain transition-transform duration-200 group-hover:scale-[1.01]">
        </a>

        <!-- 2. Centered Navigation Links (Desktop: >= 1024px) -->
        <nav class="hidden lg:flex items-center justify-center gap-6 xl:gap-9 absolute left-1/2 -translate-x-1/2">
            <a href="{{ route('home') }}" wire:navigate 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Home
            </a>
            <a href="{{ route('equipment') }}" wire:navigate 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Equipment
            </a>
            <a href="{{ route('consultancy') }}" wire:navigate 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Consultancy
            </a>
            <a href="{{ route('projects') }}" wire:navigate 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Projects
            </a>
            <a href="{{ route('media') }}" wire:navigate 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Media
            </a>
            <a href="{{ route('about') }}" wire:navigate 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                About
            </a>
            <a href="{{ route('contact') }}" wire:navigate 
               class="text-[12px] xl:text-[13px] uppercase tracking-[0.08em] font-light text-[#1E252D] hover:text-[#C59B27] transition-colors py-1">
                Contact
            </a>
        </nav>

        <!-- 3. Right Inquire Link / Mobile Toggle -->
        <div class="flex items-center space-x-3 sm:space-x-5 shrink-0">
            <button type="button" @click="inquiryOpen = true"
               class="hidden sm:inline-block border border-[#C59B27] text-[#C59B27] hover:bg-[#C59B27] hover:text-white px-3.5 sm:px-4 py-1.5 sm:py-2 text-[11px] sm:text-[12px] uppercase tracking-[0.1em] font-light transition-colors cursor-pointer">
                Inquire
            </button>

            <!-- Mobile & Tablet Hamburger Toggle (< 1024px) -->
            <button @click="mobileNavOpen = true" 
                    type="button" 
                    aria-label="Open Navigation"
                    class="lg:hidden group flex flex-col justify-center items-end gap-1.5 p-2 focus:outline-hidden cursor-pointer">
                <span class="w-6 sm:w-7 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"></span>
                <span class="w-6 sm:w-7 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"></span>
                <span class="w-6 sm:w-7 h-[2px] bg-[#1E252D] group-hover:bg-[#C59B27] transition-all duration-200"></span>
            </button>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- FULL-SCREEN MOBILE SIDEBAR                                                 -->
    <!-- ========================================================================= -->
    <!-- Backdrop -->
    <div x-show="mobileNavOpen" 
         x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="mobileNavOpen = false"
         class="lg:hidden fixed inset-0 z-50 bg-black/60 backdrop-blur-xs"></div>

    <!-- Sidebar Panel -->
    <aside x-show="mobileNavOpen" 
           x-cloak
           x-transition:enter="transition ease-out duration-300"
           x-transition:enter-start="translate-x-full"
           x-transition:enter-end="translate-x-0"
           x-transition:leave="transition ease-in duration-200"
           x-transition:leave-start="translate-x-0"
           x-transition:leave-end="translate-x-full"
           @keydown.escape.window="mobileNavOpen = false"
           class="lg:hidden fixed inset-y-0 right-0 z-50 w-full sm:w-96 max-w-full bg-[#1E252D] text-white flex flex-col shadow-2xl"
           style="font-family: 'new-hero', sans-serif;">

        <!-- Sidebar Header -->
        <div class="flex items-center justify-between px-6 sm:px-8 py-5 border-b border-white/10">
            <a href="{{ route('home') }}" wire:navigate @click="mobileNavOpen = false" class="flex items-center shrink-0">
                <img src="/logo.png" alt="7A GLOBAL MACHINERY PVT. LTD." class="h-9 sm:h-11 w-auto brightness-0 invert">
            </a>
            <button @click="mobileNavOpen = false" 
                    type="button" 
                    aria-label="Close Navigation"
                    class="flex items-center justify-center w-10 h-10 border border-white/20 hover:border-[#C59B27] text-white/70 hover:text-[#C59B27] transition-colors cursor-pointer">
                <i class="ri-close-line text-2xl"></i>
            </button>
        </div>

        <!-- Sidebar Links -->
        <nav class="flex-1 overflow-y-auto px-6 sm:px-8 py-8">
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('home') }}" wire:navigate @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Home
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('equipment') }}" wire:navigate @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Equipment
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('consultancy') }}" wire:navigate @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Consultancy
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('projects') }}" wire:navigate @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Projects
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('media') }}" wire:navigate @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Media
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" wire:navigate @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        About
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" wire:navigate @click="mobileNavOpen = false"
                       class="flex items-center justify-between py-4 border-b border-white/10 text-lg font-light uppercase tracking-[0.08em] text-white/80 hover:text-[#C59B27] transition-colors group">
                        Contact
                        <i class="ri-arrow-right-line text-[#C59B27] opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar Footer -->
        <div class="px-6 sm:px-8 py-8 border-t border-white/10 space-y-6">
            <button type="button" @click="mobileNavOpen = false; inquiryOpen = true"
               class="block w-full text-center bg-[#C59B27] hover:bg-[#9A7514] text-white py-3.5 text-[12px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer">
                Submit Inquiry
            </button>
            <div class="space-y-3 text-xs font-light text-white/50">
                <a href="tel:+911204567890" class="flex items-center gap-3 hover:text-[#C59B27] transition-colors">
                    <i class="ri-phone-line text-[#C59B27]"></i> +91 (0) 120 456 7890
                </a>
                <a href="mailto:info@7aglobalmachinery.com" class="flex items-center gap-3 hover:text-[#C59B27] transition-colors">
                    <i class="ri-mail-line text-[#C59B27]"></i> info@7aglobalmachinery.com
                </a>
            </div>
            <div class="flex items-center gap-3">
                <a href="#" class="w-9 h-9 flex items-center justify-center border border-white/15 text-white/60 hover:border-[#C59B27] hover:text-[#C59B27] transition-colors" aria-label="LinkedIn"><i class="ri-linkedin-fill"></i></a>
                <a href="#" class="w-9 h-9 flex items-center justify-center border border-white/15 text-white/60 hover:border-[#C59B27] hover:text-[#C59B27] transition-colors" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="w-9 h-9 flex items-center justify-center border border-white/15 text-white/60 hover:border-[#C59B27] hover:text-[#C59B27] transition-colors" aria-label="Instagram"><i class="ri-instagram-line"></i></a>
            </div>
        </div>
    </aside>

    <!-- ========================================================================= -->
    <!-- INQUIRY MODAL                                                              -->
    <!-- ========================================================================= -->
    <div x-show="inquiryOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6"
         role="dialog" aria-modal="true" aria-label="Submit an Inquiry">
        <!-- Backdrop -->
        <div x-show="inquiryOpen"
             x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             @click="inquiryOpen = false"
             class="absolute inset-0 bg-[#1E252D]/70 backdrop-blur-sm"></div>

        <!-- Panel -->
        <div x-show="inquiryOpen"
             x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:scale-95"
             @keydown.escape.window="inquiryOpen = false"
             class="relative w-full max-w-lg max-h-[92vh] overflow-y-auto bg-white shadow-2xl">
            <!-- Close -->
            <button type="button" @click="inquiryOpen = false" aria-label="Close"
                    class="absolute top-4 right-4 z-10 w-9 h-9 flex items-center justify-center text-slate-400 hover:text-[#C59B27] transition-colors cursor-pointer">
                <i class="ri-close-line text-xl"></i>
            </button>

            <div x-show="!$wire.submitted" class="p-6 sm:p-9">
                <!-- Header -->
                <div class="mb-7 pr-8">
                    <span class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-3">
                        <span class="w-6 h-[1px] bg-[#C59B27]"></span> Get in Touch
                    </span>
                    <h2 class="text-2xl sm:text-[1.75rem] font-light text-[#1E252D] leading-tight"
                        style="font-family: 'new-hero', sans-serif;">
                        Submit an Inquiry
                    </h2>
                    <p class="text-[13px] text-[#64748B] font-light mt-2 leading-relaxed">
                        Tell us about your linen processing requirement and our team will respond shortly.
                    </p>
                </div>

                <form wire:submit="submitInquiry" class="space-y-5">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-[11px] uppercase tracking-[0.12em] text-[#1E252D] font-medium mb-2">Name <span class="text-[#C59B27]">*</span></label>
                            <input type="text" wire:model="name" placeholder="Full name"
                                   class="w-full bg-[#FAF9F6] border border-slate-200 focus:border-[#C59B27] focus:ring-0 focus:outline-hidden px-4 py-2.5 text-sm font-light text-[#1E252D] placeholder:text-slate-400 transition-colors">
                            @error('name') <p class="text-[11px] text-red-500 mt-1.5">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-[11px] uppercase tracking-[0.12em] text-[#1E252D] font-medium mb-2">Company</label>
                            <input type="text" wire:model="company" placeholder="Organization"
                                   class="w-full bg-[#FAF9F6] border border-slate-200 focus:border-[#C59B27] focus:ring-0 focus:outline-hidden px-4 py-2.5 text-sm font-light text-[#1E252D] placeholder:text-slate-400 transition-colors">
                            @error('company') <p class="text-[11px] text-red-500 mt-1.5">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-[11px] uppercase tracking-[0.12em] text-[#1E252D] font-medium mb-2">Email <span class="text-[#C59B27]">*</span></label>
                            <input type="email" wire:model="email" placeholder="you@company.com"
                                   class="w-full bg-[#FAF9F6] border border-slate-200 focus:border-[#C59B27] focus:ring-0 focus:outline-hidden px-4 py-2.5 text-sm font-light text-[#1E252D] placeholder:text-slate-400 transition-colors">
                            @error('email') <p class="text-[11px] text-red-500 mt-1.5">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-[11px] uppercase tracking-[0.12em] text-[#1E252D] font-medium mb-2">Phone <span class="text-[#C59B27]">*</span></label>
                            <input type="tel" wire:model="phone" placeholder="+91 ..."
                                   class="w-full bg-[#FAF9F6] border border-slate-200 focus:border-[#C59B27] focus:ring-0 focus:outline-hidden px-4 py-2.5 text-sm font-light text-[#1E252D] placeholder:text-slate-400 transition-colors">
                            @error('phone') <p class="text-[11px] text-red-500 mt-1.5">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] uppercase tracking-[0.12em] text-[#1E252D] font-medium mb-2">Subject</label>
                        <select wire:model="subject"
                                class="w-full bg-[#FAF9F6] border border-slate-200 focus:border-[#C59B27] focus:ring-0 focus:outline-hidden px-4 py-2.5 text-sm font-light text-[#1E252D] transition-colors cursor-pointer">
                            <option>General Inquiry</option>
                            <option>Equipment Enquiry</option>
                            <option>Consultancy</option>
                            <option>Service &amp; Support</option>
                            <option>Partnership</option>
                        </select>
                        @error('subject') <p class="text-[11px] text-red-500 mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-[11px] uppercase tracking-[0.12em] text-[#1E252D] font-medium mb-2">Message</label>
                        <textarea wire:model="message" rows="3" placeholder="Briefly describe your requirement"
                                  class="w-full bg-[#FAF9F6] border border-slate-200 focus:border-[#C59B27] focus:ring-0 focus:outline-hidden px-4 py-2.5 text-sm font-light text-[#1E252D] placeholder:text-slate-400 transition-colors resize-none"></textarea>
                        @error('message') <p class="text-[11px] text-red-500 mt-1.5">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" wire:loading.attr="disabled"
                            class="w-full bg-[#C59B27] hover:bg-[#9A7514] text-white py-3.5 text-[12px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer disabled:opacity-60">
                        <span wire:loading.remove wire:target="submitInquiry">Send Inquiry</span>
                        <span wire:loading wire:target="submitInquiry">Sending...</span>
                    </button>
                </form>
            </div>

            <!-- Success state -->
            <div x-show="$wire.submitted" class="p-8 sm:p-12 text-center">
                <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center rounded-full bg-[#C59B27]/10 text-[#C59B27]">
                    <i class="ri-check-line text-3xl"></i>
                </div>
                <h2 class="text-2xl font-light text-[#1E252D] mb-2" style="font-family: 'new-hero', sans-serif;">Thank You</h2>
                <p class="text-[13px] text-[#64748B] font-light leading-relaxed mb-8 max-w-xs mx-auto">
                    Your inquiry has been received. Our team will get back to you within one business day.
                </p>
                <button type="button" @click="inquiryOpen = false; $wire.resetInquiry()"
                        class="bg-[#1E252D] hover:bg-[#C59B27] text-white px-8 py-3 text-[12px] uppercase tracking-[0.15em] font-light transition-colors cursor-pointer">
                    Close
                </button>
            </div>
        </div>
    </div>
</header>
