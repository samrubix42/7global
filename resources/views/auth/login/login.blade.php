<div class="w-full max-w-[420px] mx-auto animate-fadeIn">

    <!-- Card Container (Shadcn style) -->
    <div class="bg-white border border-zinc-200/90 rounded-2xl shadow-[0_10px_30px_-5px_rgba(0,0,0,0.05),0_4px_10px_-2px_rgba(0,0,0,0.03)] p-7 sm:p-9">
        
        <!-- Brand Header -->
        <div class="flex flex-col items-center text-center mb-7">
            <div class="w-12 h-12 rounded-xl bg-zinc-50 border border-zinc-200/80 flex items-center justify-center p-2 mb-4 shadow-2xs">
                <img src="/logo.png" alt="7A Global Logo" class="h-full w-auto object-contain">
            </div>
            
            <h1 class="text-xl sm:text-2xl font-bold tracking-tight text-zinc-900">
                Welcome back
            </h1>
            <p class="text-xs text-zinc-600 mt-1.5 max-w-xs">
                Enter your credentials to access the 7A Global machinery administration console.
            </p>
        </div>

        <!-- Session Status / General Errors -->
        @if ($errors->has('email') && !str_contains($errors->first('email'), 'format') && !str_contains($errors->first('email'), 'enter'))
            <div class="mb-5 p-3 rounded-xl bg-rose-50 border border-rose-200/70 text-xs text-rose-700 flex items-start gap-2.5">
                <svg class="w-4 h-4 text-rose-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
                <span>{{ $errors->first('email') }}</span>
            </div>
        @endif

        <!-- Login Form -->
        <form wire:submit="login" class="space-y-4">
            
            <!-- Email Input -->
            <div class="space-y-1.5">
                <label for="email" class="block text-xs font-semibold text-zinc-900">
                    Email address
                </label>
                <div class="relative">
                    <input wire:model="email" 
                           type="email" 
                           id="email" 
                           name="email"
                           placeholder="admin@7global.com" 
                           autocomplete="email"
                           required
                           class="w-full px-3 py-2 text-sm bg-white border @error('email') border-rose-400 focus:ring-rose-500/20 @else border-zinc-200/90 focus:border-zinc-900 focus:ring-zinc-900/10 @enderror rounded-lg text-zinc-900 placeholder:text-zinc-600 focus:outline-none focus:ring-2 transition-all">
                </div>
                @error('email')
                    @if(str_contains($message, 'format') || str_contains($message, 'enter'))
                        <p class="text-[11px] text-rose-600 mt-1 flex items-center gap-1 font-medium">
                            <span>{{ $message }}</span>
                        </p>
                    @endif
                @enderror
            </div>

            <!-- Password Input with Alpine toggle -->
            <div class="space-y-1.5" x-data="{ show: false }">
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-xs font-semibold text-zinc-900">
                        Password
                    </label>
                    <a href="javascript:void(0)" 
                       onclick="alert('For demo access, please use the pre-filled demo credentials below.')"
                       class="text-[11px] text-zinc-600 hover:text-zinc-900 transition-colors">
                        Forgot password?
                    </a>
                </div>
                <div class="relative">
                    <input wire:model="password" 
                           :type="show ? 'text' : 'password'" 
                           id="password" 
                           name="password"
                           placeholder="••••••••" 
                           autocomplete="current-password"
                           required
                           class="w-full pl-3 pr-10 py-2 text-sm bg-white border @error('password') border-rose-400 focus:ring-rose-500/20 @else border-zinc-200/90 focus:border-zinc-900 focus:ring-zinc-900/10 @enderror rounded-lg text-zinc-900 placeholder:text-zinc-600 focus:outline-none focus:ring-2 transition-all">
                    
                    <button type="button" 
                            @click="show = !show"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-zinc-600 hover:text-zinc-600">
                        <!-- Eye icon -->
                        <svg x-show="!show" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        <!-- Eye off icon -->
                        <svg x-show="show" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                        </svg>
                    </button>
                </div>
                @error('password')
                    <p class="text-[11px] text-rose-600 mt-1 font-medium">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me Checkbox -->
            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2 cursor-pointer select-none">
                    <input wire:model="remember" 
                           type="checkbox" 
                           class="w-4 h-4 rounded border-zinc-300 text-zinc-900 focus:ring-zinc-900/20 focus:ring-offset-0 transition-colors">
                    <span class="text-xs text-zinc-600 font-medium">Remember for 30 days</span>
                </label>
            </div>

            <!-- Submit Button with Livewire Loading state -->
            <button type="submit" 
                    wire:loading.attr="disabled"
                    class="w-full mt-2 py-2.5 px-4 bg-zinc-900 hover:bg-zinc-800 active:bg-zinc-950 text-white text-xs font-semibold rounded-lg shadow-sm transition-all flex items-center justify-center gap-2 disabled:opacity-75 disabled:cursor-wait">
                <span wire:loading.remove>Sign In</span>
                <span wire:loading class="inline-flex items-center gap-2">
                    <svg class="animate-spin w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span>Authenticating...</span>
                </span>
            </button>

        </form>

        <!-- Demo Credentials Helper Callout -->
        <div class="mt-6 pt-5 border-t border-zinc-100">
            <div class="rounded-xl bg-zinc-50 border border-zinc-200/80 p-3.5 flex items-center justify-between gap-3">
                <div class="min-w-0">
                    <div class="flex items-center gap-1.5 text-xs font-semibold text-zinc-900">
                        <svg class="w-3.5 h-3.5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                        </svg>
                        <span>Demo Account</span>
                    </div>
                    <p class="text-[11px] text-zinc-600 font-mono mt-0.5 truncate">
                        admin@7global.com • password
                    </p>
                </div>
                
                <button wire:click="fillDemo" 
                        type="button" 
                        class="px-2.5 py-1 text-[11px] font-medium text-zinc-700 bg-white border border-zinc-200 rounded-md hover:bg-zinc-100 hover:text-zinc-900 shadow-2xs shrink-0 transition-colors">
                    Auto-Fill
                </button>
            </div>
        </div>

    </div>

    <!-- Back to Public Site Link (Available link) -->
    <div class="text-center mt-6">
        <a href="{{ route('home') }}" 
           class="inline-flex items-center gap-1.5 text-xs font-medium text-zinc-600 hover:text-zinc-900 transition-colors">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span>Return to 7A Global Website</span>
        </a>
    </div>

</div>