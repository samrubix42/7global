<div class="w-full max-w-[420px] mx-auto">

    <!-- Card Container -->
    <div class="bg-white border border-slate-200 shadow-[0_20px_50px_-20px_rgba(30,37,45,0.15)]">
        <!-- Top accent -->
        <div class="h-1 bg-[#C59B27]"></div>

        <div class="p-7 sm:p-10">
            <!-- Brand Header -->
            <div class="flex flex-col items-center text-center mb-8">
                <a href="{{ route('home') }}" wire:navigate class="mb-5">
                    <img src="/logo.png" alt="7A Global Machinery" class="h-12 w-auto object-contain">
                </a>

                <span class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.25em] text-[#C59B27] font-medium mb-3">
                    <span class="w-6 h-px bg-[#C59B27]"></span> Admin Console <span class="w-6 h-px bg-[#C59B27]"></span>
                </span>
                <h1 class="text-2xl sm:text-[1.75rem] font-light text-[#1E252D] leading-tight"
                    style="font-family: 'new-hero', sans-serif;">
                    Welcome back
                </h1>
                <p class="text-[13px] text-[#64748B] font-light mt-2 max-w-xs leading-relaxed">
                    Enter your credentials to access the 7A Global administration console.
                </p>
            </div>

            <!-- General Errors -->
            @if ($errors->has('email') && !str_contains($errors->first('email'), 'format') && !str_contains($errors->first('email'), 'enter'))
                <div class="mb-6 p-3.5 bg-rose-50 border border-rose-200 text-xs text-rose-700 flex items-start gap-2.5">
                    <i class="ri-error-warning-line text-rose-500 shrink-0 mt-0.5"></i>
                    <span class="font-light">{{ $errors->first('email') }}</span>
                </div>
            @endif

            <!-- Login Form -->
            <form wire:submit="login" class="space-y-5">

                <!-- Email -->
                <div>
                    <label for="email" class="block text-[11px] uppercase tracking-[0.12em] font-medium text-[#1E252D] mb-2">
                        Email Address
                    </label>
                    <input wire:model="email"
                           type="email"
                           id="email"
                           name="email"
                           placeholder="admin@7global.com"
                           autocomplete="email"
                           required
                           class="w-full bg-[#FAF9F6] border @error('email') border-rose-400 @else border-slate-200 focus:border-[#C59B27] @enderror focus:ring-0 focus:outline-hidden px-4 py-3 text-sm font-light text-[#1E252D] placeholder:text-slate-400 transition-colors">
                    @error('email')
                        @if(str_contains($message, 'format') || str_contains($message, 'enter'))
                            <p class="text-[11px] text-rose-600 mt-1.5 font-light">{{ $message }}</p>
                        @endif
                    @enderror
                </div>

                <!-- Password -->
                <div x-data="{ show: false }">
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-[11px] uppercase tracking-[0.12em] font-medium text-[#1E252D]">
                            Password
                        </label>
                        <a href="javascript:void(0)"
                           onclick="alert('For demo access, please use the pre-filled demo credentials below.')"
                           class="text-[11px] text-[#64748B] hover:text-[#C59B27] transition-colors font-light">
                            Forgot password?
                        </a>
                    </div>
                    <div class="relative">
                        <input wire:model="password"
                               :type="show ? 'text' : 'password'"
                               id="password"
                               name="password"
                               placeholder="Enter your password"
                               autocomplete="current-password"
                               required
                               class="w-full bg-[#FAF9F6] border @error('password') border-rose-400 @else border-slate-200 focus:border-[#C59B27] @enderror focus:ring-0 focus:outline-hidden pl-4 pr-11 py-3 text-sm font-light text-[#1E252D] placeholder:text-slate-400 transition-colors">

                        <button type="button"
                                @click="show = !show"
                                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-[#C59B27] transition-colors cursor-pointer">
                            <i x-show="!show" class="ri-eye-line text-base"></i>
                            <i x-show="show" x-cloak class="ri-eye-off-line text-base"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-[11px] text-rose-600 mt-1.5 font-light">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <label class="flex items-center gap-2.5 cursor-pointer select-none pt-1">
                    <input wire:model="remember"
                           type="checkbox"
                           class="w-4 h-4 border-slate-300 text-[#C59B27] focus:ring-0 focus:ring-offset-0 transition-colors">
                    <span class="text-[13px] text-[#64748B] font-light">Remember me for 30 days</span>
                </label>

                <!-- Submit -->
                <button type="submit"
                        wire:loading.attr="disabled"
                        class="w-full mt-1 bg-[#C59B27] hover:bg-[#9A7514] text-white py-3.5 text-[12px] uppercase tracking-[0.15em] font-light transition-colors flex items-center justify-center gap-2 disabled:opacity-60 disabled:cursor-wait cursor-pointer">
                    <span wire:loading.remove wire:target="login">Sign In</span>
                    <span wire:loading wire:target="login" class="inline-flex items-center gap-2">
                        <i class="ri-loader-4-line animate-spin text-base"></i>
                        <span>Authenticating...</span>
                    </span>
                </button>
            </form>

            <!-- Demo Credentials -->
            <div class="mt-7 pt-6 border-t border-slate-100">
                <div class="bg-[#FAF9F6] border border-slate-200 p-4 flex items-center justify-between gap-3">
                    <div class="min-w-0">
                        <div class="flex items-center gap-2 text-[11px] uppercase tracking-[0.12em] font-medium text-[#1E252D]">
                            <i class="ri-key-2-line text-[#C59B27]"></i>
                            <span>Demo Account</span>
                        </div>
                        <p class="text-[12px] text-[#64748B] font-light mt-1 truncate">
                            admin@7global.com &middot; password
                        </p>
                    </div>

                    <button wire:click="fillDemo"
                            type="button"
                            class="px-3 py-1.5 text-[11px] uppercase tracking-[0.1em] font-light text-[#C59B27] bg-white border border-[#C59B27] hover:bg-[#C59B27] hover:text-white shrink-0 transition-colors cursor-pointer">
                        Auto-Fill
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to site -->
    <div class="text-center mt-7">
        <a href="{{ route('home') }}" wire:navigate
           class="inline-flex items-center gap-2 text-[12px] uppercase tracking-[0.1em] font-light text-[#64748B] hover:text-[#C59B27] transition-colors">
            <i class="ri-arrow-left-line"></i>
            <span>Return to 7A Global Website</span>
        </a>
    </div>

</div>
