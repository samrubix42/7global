<div class="space-y-6">

    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <div class="flex items-center gap-2">
                <h1 class="text-xl sm:text-2xl font-bold tracking-tight text-zinc-900">Client Testimonials</h1>
                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-zinc-100 text-zinc-700">
                    {{ $this->stats['total'] }} Reviews
                </span>
            </div>
            <p class="text-xs sm:text-sm text-zinc-500 mt-0.5">
                Manage client reviews, verified ratings, and executive endorsements for 7A Global Machinery.
            </p>
        </div>

        <div class="flex items-center gap-2.5">
            <button wire:click="openCreateModal"
                    type="button"
                    class="inline-flex items-center gap-2 px-3.5 py-2 text-xs font-semibold text-white bg-zinc-900 hover:bg-zinc-800 active:scale-[0.98] rounded-lg shadow-xs transition-all cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Add Testimonial</span>
            </button>
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="rounded-xl border border-zinc-200/80 bg-white p-4 shadow-2xs">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Total Testimonials</span>
                <span class="p-1.5 rounded-md bg-zinc-100 text-zinc-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </span>
            </div>
            <div class="mt-2 flex items-baseline justify-between">
                <span class="text-2xl font-bold tracking-tight text-zinc-900">{{ $this->stats['total'] }}</span>
                <span class="text-xs text-zinc-400">Total client stories</span>
            </div>
        </div>

        <div class="rounded-xl border border-zinc-200/80 bg-white p-4 shadow-2xs">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Active & Published</span>
                <span class="p-1.5 rounded-md bg-emerald-50 text-emerald-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </span>
            </div>
            <div class="mt-2 flex items-baseline justify-between">
                <span class="text-2xl font-bold tracking-tight text-emerald-600">{{ $this->stats['active'] }}</span>
                <span class="text-xs font-medium text-emerald-600">Visible on landing page</span>
            </div>
        </div>

        <div class="rounded-xl border border-zinc-200/80 bg-white p-4 shadow-2xs">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Average Rating</span>
                <span class="p-1.5 rounded-md bg-amber-50 text-amber-500">
                    <svg class="w-4 h-4 fill-amber-400 stroke-amber-500" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </span>
            </div>
            <div class="mt-2 flex items-baseline justify-between">
                <div class="flex items-center gap-1.5">
                    <span class="text-2xl font-bold tracking-tight text-zinc-900">{{ $this->stats['average_rating'] }}</span>
                    <span class="text-xs text-zinc-400">/ 5.0</span>
                </div>
                <div class="flex text-amber-400 text-xs">
                    ★★★★★
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table Container -->
    <div class="rounded-xl border border-zinc-200/80 bg-white shadow-2xs overflow-hidden">
        
        <!-- Filter Toolbar -->
        <div class="p-4 border-b border-zinc-200/80 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 bg-zinc-50/40">
            <div class="flex flex-col sm:flex-row sm:items-center gap-2.5 flex-1">
                <!-- Search input -->
                <div class="relative w-full sm:w-72">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-zinc-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input wire:model.live.debounce.250ms="search" 
                           type="text" 
                           placeholder="Search client, company or review..." 
                           class="w-full pl-9 pr-3 py-1.5 text-xs bg-white border border-zinc-200 rounded-lg text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all">
                </div>

                <!-- Status Filter -->
                <div class="w-full sm:w-36">
                    <select wire:model.live="statusFilter" 
                            class="w-full px-3 py-1.5 text-xs bg-white border border-zinc-200 rounded-lg text-zinc-700 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all">
                        <option value="all">All Statuses</option>
                        <option value="active">Active Only</option>
                        <option value="inactive">Inactive Only</option>
                    </select>
                </div>

                <!-- Rating Filter -->
                <div class="w-full sm:w-36">
                    <select wire:model.live="ratingFilter" 
                            class="w-full px-3 py-1.5 text-xs bg-white border border-zinc-200 rounded-lg text-zinc-700 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all">
                        <option value="all">All Ratings</option>
                        <option value="5">5 Stars ★★★★★</option>
                        <option value="4">4 Stars ★★★★☆</option>
                        <option value="3">3 Stars ★★★☆☆</option>
                        <option value="2">2 Stars ★★☆☆☆</option>
                        <option value="1">1 Star  ★☆☆☆☆</option>
                    </select>
                </div>

                @if($search !== '' || $statusFilter !== 'all' || $ratingFilter !== 'all')
                    <button wire:click="$set('search', ''); $set('statusFilter', 'all'); $set('ratingFilter', 'all');" 
                            type="button" 
                            class="text-xs text-zinc-500 hover:text-zinc-900 underline underline-offset-2 transition-colors">
                        Reset Filters
                    </button>
                @endif
            </div>

            <div class="text-xs text-zinc-500 shrink-0">
                Showing <span class="font-medium text-zinc-900">{{ $this->testimonials->firstItem() ?? 0 }}</span> - <span class="font-medium text-zinc-900">{{ $this->testimonials->lastItem() ?? 0 }}</span> of <span class="font-medium text-zinc-900">{{ $this->testimonials->total() }}</span>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50/60 text-zinc-500 font-medium">
                        <th class="px-5 py-3">Client & Company</th>
                        <th class="px-5 py-3 w-36">Rating</th>
                        <th class="px-5 py-3">Testimonial Quote</th>
                        <th class="px-5 py-3 w-32">Status</th>
                        <th class="px-5 py-3 w-32">Date</th>
                        <th class="px-5 py-3 w-28 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @forelse($this->testimonials as $item)
                        <tr class="hover:bg-zinc-50/60 transition-colors group" wire:key="testimonial-{{ $item->id }}">
                            <td class="px-5 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-zinc-900 text-white font-semibold flex items-center justify-center text-xs shrink-0 tracking-wider">
                                        {{ strtoupper(substr($item->name, 0, 1)) }}{{ strtoupper(substr(strrchr($item->name, ' ') ?: ' ', 1, 1)) }}
                                    </div>
                                    <div>
                                        <div class="font-semibold text-zinc-900 text-sm">
                                            {{ $item->name }}
                                        </div>
                                        <div class="text-[11px] text-zinc-500">
                                            {{ $item->designation }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-1.5">
                                    <div class="flex text-amber-400">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $item->rating)
                                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @else
                                                <svg class="w-3.5 h-3.5 text-zinc-200 fill-current" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="text-xs font-semibold text-zinc-700">{{ $item->rating }}.0</span>
                                </div>
                            </td>
                            <td class="px-5 py-4 max-w-md">
                                <p class="text-zinc-600 line-clamp-2 leading-relaxed text-[12px] italic">
                                    "{{ $item->description }}"
                                </p>
                            </td>
                            <td class="px-5 py-4">
                                <button wire:click="toggleStatus({{ $item->id }})" 
                                        type="button"
                                        title="Click to toggle status"
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-medium transition-all cursor-pointer {{ $item->is_active ? 'bg-emerald-50 text-emerald-700 hover:bg-emerald-100' : 'bg-zinc-100 text-zinc-600 hover:bg-zinc-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $item->is_active ? 'bg-emerald-500' : 'bg-zinc-400' }}"></span>
                                    <span>{{ $item->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </td>
                            <td class="px-5 py-4 text-zinc-500 whitespace-nowrap">
                                {{ $item->created_at ? $item->created_at->format('M d, Y') : '—' }}
                            </td>
                            <td class="px-5 py-4 text-right whitespace-nowrap">
                                <div class="flex items-center justify-end gap-1.5">
                                    <!-- Edit Button -->
                                    <button wire:click="openEditModal({{ $item->id }})" 
                                            type="button" 
                                            title="Edit Testimonial"
                                            class="p-1.5 text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 rounded-md transition-colors cursor-pointer">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>

                                    <!-- Delete Button -->
                                    <button wire:click="confirmDelete({{ $item->id }})" 
                                            type="button" 
                                            title="Delete Testimonial"
                                            class="p-1.5 text-zinc-400 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors cursor-pointer">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-5 py-12 text-center">
                                <div class="flex flex-col items-center justify-center max-w-sm mx-auto">
                                    <div class="p-3 bg-zinc-100 rounded-full text-zinc-400 mb-3">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-semibold text-zinc-900">No testimonials found</h3>
                                    <p class="text-xs text-zinc-500 mt-1">
                                        @if($search !== '' || $statusFilter !== 'all' || $ratingFilter !== 'all')
                                            No reviews match your selected filter criteria. Try resetting filters.
                                        @else
                                            No client testimonials have been recorded yet. Click "Add Testimonial" to create one.
                                        @endif
                                    </p>
                                    @if($search === '' && $statusFilter === 'all' && $ratingFilter === 'all')
                                        <button wire:click="openCreateModal" 
                                                type="button" 
                                                class="mt-4 px-3 py-1.5 text-xs font-medium text-white bg-zinc-900 hover:bg-zinc-800 rounded-md transition-colors cursor-pointer">
                                            Add First Testimonial
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($this->testimonials->hasPages())
            <div class="p-4 border-t border-zinc-200/80 bg-zinc-50/30">
                {{ $this->testimonials->links() }}
            </div>
        @endif
    </div>

    <!-- ========================================== -->
    <!-- CREATE / EDIT MODAL                        -->
    <!-- ========================================== -->
    @if($showModal)
        <div class="fixed inset-0 z-50 overflow-y-auto" 
             aria-labelledby="testimonial-modal-title" 
             role="dialog" 
             aria-modal="true"
             x-data
             @keydown.escape.window="$wire.closeModal()">
            
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-zinc-950/40 backdrop-blur-xs transition-opacity"
                 wire:click="closeModal"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-zinc-200">
                    
                    <!-- Modal Header -->
                    <div class="flex items-center justify-between px-6 py-4 border-b border-zinc-100 bg-zinc-50/50">
                        <div>
                            <h3 class="text-base font-semibold text-zinc-900" id="testimonial-modal-title">
                                {{ $isEditing ? 'Edit Testimonial' : 'Add New Testimonial' }}
                            </h3>
                            <p class="text-xs text-zinc-500 mt-0.5">
                                {{ $isEditing ? 'Update the client endorsement and verified rating.' : 'Add a new client review and feedback story.' }}
                            </p>
                        </div>
                        <button wire:click="closeModal" 
                                type="button" 
                                class="p-1.5 text-zinc-400 hover:text-zinc-700 hover:bg-zinc-100 rounded-md transition-colors cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Modal Body / Form -->
                    <form wire:submit="save">
                        <div class="px-6 py-5 space-y-4">
                            
                            <!-- Client Name & Designation Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                <!-- Name Field -->
                                <div>
                                    <label for="t-name" class="block text-xs font-semibold text-zinc-700 mb-1.5">
                                        Client Full Name <span class="text-red-500">*</span>
                                    </label>
                                    <input wire:model="name" 
                                           type="text" 
                                           id="t-name"
                                           placeholder="e.g. Alexander Wright" 
                                           class="w-full px-3 py-2 text-xs bg-white border @error('name') border-red-300 ring-1 ring-red-300 @else border-zinc-200 @enderror rounded-lg text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all">
                                    @error('name')
                                        <p class="text-[11px] text-red-500 mt-1 flex items-center gap-1">
                                            <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>{{ $message }}</span>
                                        </p>
                                    @enderror
                                </div>

                                <!-- Designation Field -->
                                <div>
                                    <label for="t-designation" class="block text-xs font-semibold text-zinc-700 mb-1.5">
                                        Role / Company <span class="text-red-500">*</span>
                                    </label>
                                    <input wire:model="designation" 
                                           type="text" 
                                           id="t-designation"
                                           placeholder="e.g. Operations Dir., Hilton" 
                                           class="w-full px-3 py-2 text-xs bg-white border @error('designation') border-red-300 ring-1 ring-red-300 @else border-zinc-200 @enderror rounded-lg text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all">
                                    @error('designation')
                                        <p class="text-[11px] text-red-500 mt-1 flex items-center gap-1">
                                            <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>{{ $message }}</span>
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Rating Picker -->
                            <div>
                                <label class="block text-xs font-semibold text-zinc-700 mb-1.5">
                                    Client Rating (1 to 5 Stars) <span class="text-red-500">*</span>
                                </label>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center gap-1 bg-zinc-50 border border-zinc-200 rounded-lg p-1.5">
                                        @for($star = 1; $star <= 5; $star++)
                                            <button type="button" 
                                                    wire:click="setRating({{ $star }})" 
                                                    class="p-1 hover:scale-110 transition-transform cursor-pointer focus:outline-none"
                                                    title="{{ $star }} Star{{ $star > 1 ? 's' : '' }}">
                                                <svg class="w-5 h-5 {{ $star <= $rating ? 'text-amber-400 fill-amber-400' : 'text-zinc-300 fill-zinc-200' }}" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </button>
                                        @endfor
                                    </div>
                                    <span class="text-xs font-medium text-zinc-600">
                                        @if($rating == 5) 5 Stars - Exceptional
                                        @elseif($rating == 4) 4 Stars - Very Good
                                        @elseif($rating == 3) 3 Stars - Average
                                        @elseif($rating == 2) 2 Stars - Below Average
                                        @else 1 Star - Poor
                                        @endif
                                    </span>
                                </div>
                                @error('rating')
                                    <p class="text-[11px] text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Testimonial Description / Quote Field -->
                            <div>
                                <label for="t-description" class="block text-xs font-semibold text-zinc-700 mb-1.5">
                                    Testimonial Feedback / Review Text <span class="text-red-500">*</span>
                                </label>
                                <textarea wire:model="description" 
                                          id="t-description"
                                          rows="4"
                                          placeholder="Share the client's comments on machine performance, finish quality, energy savings, or reliability..." 
                                          class="w-full px-3 py-2 text-xs bg-white border @error('description') border-red-300 ring-1 ring-red-300 @else border-zinc-200 @enderror rounded-lg text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all leading-relaxed"></textarea>
                                @error('description')
                                    <p class="text-[11px] text-red-500 mt-1 flex items-center gap-1">
                                        <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>

                            <!-- Active Switch -->
                            <div class="pt-2 border-t border-zinc-100 flex items-center justify-between">
                                <div>
                                    <label for="t-active" class="text-xs font-medium text-zinc-900 cursor-pointer">Active Status</label>
                                    <p class="text-[11px] text-zinc-500">Publish this testimonial on the landing page review carousel.</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input wire:model="is_active" 
                                           type="checkbox" 
                                           id="t-active"
                                           class="sr-only peer">
                                    <div class="w-9 h-5 bg-zinc-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-zinc-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-emerald-600"></div>
                                </label>
                            </div>

                        </div>

                        <!-- Modal Footer -->
                        <div class="px-6 py-3.5 bg-zinc-50 border-t border-zinc-100 flex items-center justify-end gap-2.5">
                            <button wire:click="closeModal" 
                                    type="button" 
                                    class="px-3.5 py-2 text-xs font-medium text-zinc-700 bg-white border border-zinc-200 rounded-lg hover:bg-zinc-100 transition-colors cursor-pointer">
                                Cancel
                            </button>
                            <button type="submit" 
                                    wire:loading.attr="disabled"
                                    class="inline-flex items-center gap-2 px-4 py-2 text-xs font-semibold text-white bg-zinc-900 hover:bg-zinc-800 disabled:opacity-60 rounded-lg shadow-xs transition-all cursor-pointer">
                                <svg wire:loading wire:target="save" class="animate-spin -ml-0.5 w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>{{ $isEditing ? 'Save Changes' : 'Create Testimonial' }}</span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endif

    <!-- ========================================== -->
    <!-- DELETE CONFIRMATION MODAL                  -->
    <!-- ========================================== -->
    @if($showDeleteModal)
        <div class="fixed inset-0 z-50 overflow-y-auto" 
             aria-labelledby="delete-testimonial-title" 
             role="dialog" 
             aria-modal="true"
             x-data
             @keydown.escape.window="$wire.closeDeleteModal()">
            
            <div class="fixed inset-0 bg-zinc-950/40 backdrop-blur-xs transition-opacity"
                 wire:click="closeDeleteModal"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-md border border-zinc-200">
                    <div class="p-6">
                        <div class="flex items-start gap-4">
                            <div class="p-2.5 rounded-full bg-red-50 text-red-600 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-sm font-semibold text-zinc-900" id="delete-testimonial-title">
                                    Delete Testimonial
                                </h3>
                                <p class="text-xs text-zinc-500 mt-1">
                                    Are you sure you want to delete this client testimonial? This action cannot be undone.
                                </p>
                                <div class="mt-3 p-2.5 rounded-lg bg-zinc-50 border border-zinc-200/80 text-xs text-zinc-800 font-medium">
                                    {{ $deleteName }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 py-3.5 bg-zinc-50 border-t border-zinc-100 flex items-center justify-end gap-2.5">
                        <button wire:click="closeDeleteModal" 
                                type="button" 
                                class="px-3.5 py-2 text-xs font-medium text-zinc-700 bg-white border border-zinc-200 rounded-lg hover:bg-zinc-100 transition-colors cursor-pointer">
                            Cancel
                        </button>
                        <button wire:click="delete" 
                                type="button" 
                                wire:loading.attr="disabled"
                                class="inline-flex items-center gap-2 px-4 py-2 text-xs font-semibold text-white bg-red-600 hover:bg-red-700 disabled:opacity-60 rounded-lg shadow-xs transition-all cursor-pointer">
                            <svg wire:loading wire:target="delete" class="animate-spin -ml-0.5 w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span>Delete Testimonial</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>