<div class="space-y-4">

    <!-- Page Header (Minimal Shadcn) -->
    <div class="flex items-center justify-between">
        <div>
            <div class="flex items-center gap-2">
                <h1 class="text-lg font-semibold tracking-tight text-zinc-900">Testimonials</h1>
                <span class="inline-flex items-center rounded-md border border-zinc-200 bg-zinc-50 px-2 py-0.5 text-[11px] font-medium text-zinc-600">
                    ★ {{ $this->stats['average_rating'] }}
                </span>
            </div>
            <p class="text-xs text-zinc-500 mt-0.5">Manage customer reviews and landing page endorsements.</p>
        </div>

        <button wire:click="openCreateModal"
                type="button"
                class="inline-flex items-center justify-center gap-1.5 h-8 px-3 text-xs font-medium text-white bg-zinc-900 hover:bg-zinc-800 rounded-md shadow-xs transition-colors cursor-pointer">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Add Testimonial</span>
        </button>
    </div>

    <!-- Toolbar: Search, Minimal Status Tabs & Rating Filter -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2.5">
        
        <!-- Search Input -->
        <div class="relative w-full sm:w-72">
            <svg class="absolute left-2.5 top-2.5 h-3.5 w-3.5 text-zinc-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input wire:model.live.debounce.250ms="search" 
                   type="text" 
                   placeholder="Filter client, company..." 
                   class="h-8 w-full rounded-md border border-zinc-200 bg-white pl-8 pr-7 text-xs text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-1 focus:ring-zinc-950 transition-colors">
            @if($search !== '')
                <button wire:click="$set('search', '')" 
                        type="button" 
                        class="absolute right-2 top-2 text-zinc-400 hover:text-zinc-600 cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            @endif
        </div>

        <!-- Minimal Counting Tabs & Rating Select -->
        <div class="flex items-center gap-1.5 flex-wrap">
            <div class="flex items-center gap-1">
                <button wire:click="$set('statusFilter', 'all')" 
                        type="button" 
                        class="inline-flex items-center gap-1.5 h-8 px-2.5 rounded-md text-xs transition-colors cursor-pointer {{ $statusFilter === 'all' ? 'bg-zinc-100 text-zinc-900 font-medium' : 'text-zinc-500 hover:text-zinc-900 hover:bg-zinc-50' }}">
                    <span>All</span>
                    <span class="font-mono text-[10px] text-zinc-400">{{ $this->stats['total'] }}</span>
                </button>

                <button wire:click="$set('statusFilter', 'active')" 
                        type="button" 
                        class="inline-flex items-center gap-1.5 h-8 px-2.5 rounded-md text-xs transition-colors cursor-pointer {{ $statusFilter === 'active' ? 'bg-zinc-100 text-zinc-900 font-medium' : 'text-zinc-500 hover:text-zinc-900 hover:bg-zinc-50' }}">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                    <span>Active</span>
                    <span class="font-mono text-[10px] text-zinc-400">{{ $this->stats['active'] }}</span>
                </button>

                <button wire:click="$set('statusFilter', 'inactive')" 
                        type="button" 
                        class="inline-flex items-center gap-1.5 h-8 px-2.5 rounded-md text-xs transition-colors cursor-pointer {{ $statusFilter === 'inactive' ? 'bg-zinc-100 text-zinc-900 font-medium' : 'text-zinc-500 hover:text-zinc-900 hover:bg-zinc-50' }}">
                    <span class="h-1.5 w-1.5 rounded-full bg-zinc-300"></span>
                    <span>Inactive</span>
                    <span class="font-mono text-[10px] text-zinc-400">{{ $this->stats['inactive'] }}</span>
                </button>
            </div>

            <!-- Minimal Select for Rating -->
            <select wire:model.live="ratingFilter" 
                    class="h-8 rounded-md border border-zinc-200 bg-white px-2 text-xs text-zinc-700 focus:outline-none focus:ring-1 focus:ring-zinc-950 transition-colors cursor-pointer">
                <option value="all">All Stars</option>
                <option value="5">5 Stars</option>
                <option value="4">4 Stars</option>
                <option value="3">3 Stars</option>
                <option value="2">2 Stars</option>
                <option value="1">1 Star</option>
            </select>

            @if($search !== '' || $statusFilter !== 'all' || $ratingFilter !== 'all')
                <button wire:click="$set('search', ''); $set('statusFilter', 'all'); $set('ratingFilter', 'all');" 
                        type="button" 
                        class="h-8 px-2 text-xs text-zinc-400 hover:text-zinc-900 transition-colors cursor-pointer">
                    Reset
                </button>
            @endif
        </div>

    </div>

    <!-- Shadcn Minimal Data Table -->
    <div class="rounded-md border border-zinc-200 bg-white overflow-hidden shadow-2xs">
        <div class="overflow-x-auto">
            <table class="w-full caption-bottom text-xs">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50/50">
                        <th class="h-9 px-4 text-center align-middle font-medium text-zinc-500 w-12">#</th>
                        <th class="h-9 px-4 text-left align-middle font-medium text-zinc-500">Client</th>
                        <th class="h-9 px-4 text-left align-middle font-medium text-zinc-500 w-28">Rating</th>
                        <th class="h-9 px-4 text-left align-middle font-medium text-zinc-500">Review Quote</th>
                        <th class="h-9 px-4 text-center align-middle font-medium text-zinc-500 w-28">Status</th>
                        <th class="h-9 px-4 text-left align-middle font-medium text-zinc-500 w-28">Date</th>
                        <th class="h-9 px-4 text-right align-middle font-medium text-zinc-500 w-24">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @forelse($this->testimonials as $item)
                        <tr class="hover:bg-zinc-50/60 transition-colors" wire:key="testimonial-{{ $item->id }}">
                            <!-- Counting Column -->
                            <td class="px-4 py-3 text-center align-middle font-mono text-xs text-zinc-400">
                                {{ str_pad(($this->testimonials->currentPage() - 1) * $this->testimonials->perPage() + $loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </td>

                            <!-- Client Column -->
                            <td class="px-4 py-3 align-middle whitespace-nowrap">
                                <button wire:click="openViewModal({{ $item->id }})" 
                                        type="button" 
                                        class="text-left font-medium text-zinc-900 hover:underline transition-all cursor-pointer block leading-snug">
                                    {{ $item->name }}
                                </button>
                                <span class="text-[11px] text-zinc-400 font-normal block">
                                    {{ $item->designation }}
                                </span>
                            </td>

                            <!-- Rating Column -->
                            <td class="px-4 py-3 align-middle whitespace-nowrap">
                                <div class="flex items-center gap-1 text-amber-500">
                                    <span class="text-xs">★</span>
                                    <span class="font-medium text-zinc-800 text-xs">{{ $item->rating }}.0</span>
                                </div>
                            </td>

                            <!-- Quote Snippet -->
                            <td class="px-4 py-3 align-middle max-w-sm">
                                <p class="text-zinc-500 line-clamp-1 text-xs font-normal">
                                    "{{ $item->description }}"
                                </p>
                            </td>

                            <!-- Minimal Status Badge (Click to toggle) -->
                            <td class="px-4 py-3 text-center align-middle whitespace-nowrap">
                                <button wire:click="toggleStatus({{ $item->id }})" 
                                        type="button"
                                        title="Click to toggle status"
                                        class="inline-flex items-center gap-1.5 rounded-full border border-zinc-200 px-2 py-0.5 text-[11px] font-medium transition-colors cursor-pointer {{ $item->is_active ? 'bg-zinc-50 text-zinc-800 hover:bg-zinc-100' : 'bg-transparent text-zinc-400 hover:bg-zinc-50' }}">
                                    <span class="h-1.5 w-1.5 rounded-full {{ $item->is_active ? 'bg-emerald-500' : 'bg-zinc-300' }}"></span>
                                    <span>{{ $item->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </td>

                            <!-- Date Column -->
                            <td class="px-4 py-3 align-middle text-zinc-500 whitespace-nowrap">
                                {{ $item->created_at ? $item->created_at->format('M d, Y') : '—' }}
                            </td>

                            <!-- Ghost Action Buttons -->
                            <td class="px-4 py-3 text-right align-middle whitespace-nowrap">
                                <div class="flex items-center justify-end gap-1">
                                    <!-- View Modal -->
                                    <button wire:click="openViewModal({{ $item->id }})" 
                                            type="button" 
                                            title="Preview card"
                                            class="h-7 w-7 inline-flex items-center justify-center rounded-md text-zinc-400 hover:text-zinc-900 hover:bg-zinc-100 transition-colors cursor-pointer">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>

                                    <!-- Edit Modal -->
                                    <button wire:click="openEditModal({{ $item->id }})" 
                                            type="button" 
                                            title="Edit Testimonial"
                                            class="h-7 w-7 inline-flex items-center justify-center rounded-md text-zinc-400 hover:text-zinc-900 hover:bg-zinc-100 transition-colors cursor-pointer">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>

                                    <!-- Delete Confirmation -->
                                    <button wire:click="confirmDelete({{ $item->id }})" 
                                            type="button" 
                                            title="Delete Testimonial"
                                            class="h-7 w-7 inline-flex items-center justify-center rounded-md text-zinc-400 hover:text-red-600 hover:bg-red-50 transition-colors cursor-pointer">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="h-28 text-center text-zinc-400">
                                No testimonials found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination -->
        <div class="flex items-center justify-between px-4 py-2.5 border-t border-zinc-200 bg-white text-xs text-zinc-500">
            <div>
                Showing <span class="font-medium text-zinc-900">{{ $this->testimonials->firstItem() ?? 0 }}</span> to <span class="font-medium text-zinc-900">{{ $this->testimonials->lastItem() ?? 0 }}</span> of <span class="font-medium text-zinc-900">{{ $this->testimonials->total() }}</span>
            </div>
            @if($this->testimonials->hasPages())
                <div>
                    {{ $this->testimonials->links() }}
                </div>
            @endif
        </div>
    </div>

    <!-- ========================================== -->
    <!-- SHADCN DIALOG: VIEW PREVIEW                -->
    <!-- ========================================== -->
    @if($showViewModal && $viewingTestimonial)
        <div class="fixed inset-0 z-50 bg-black/50 backdrop-blur-xs flex items-center justify-center p-4" 
             x-data
             @keydown.escape.window="$wire.closeViewModal()">
            
            <div class="relative w-full max-w-md rounded-lg border border-zinc-200 bg-white p-6 shadow-lg space-y-4">
                
                <div class="flex items-start justify-between">
                    <div>
                        <h2 class="text-base font-semibold leading-none tracking-tight text-zinc-900">Review Preview</h2>
                        <p class="text-xs text-zinc-500 mt-1">Endorsement appearance on website.</p>
                    </div>
                    <button wire:click="closeViewModal" type="button" class="text-zinc-400 hover:text-zinc-700 cursor-pointer">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="space-y-3 pt-1">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-semibold text-zinc-900">{{ $viewingTestimonial->name }}</p>
                            <p class="text-xs text-zinc-500">{{ $viewingTestimonial->designation }}</p>
                        </div>
                        <div class="flex text-amber-500 text-xs">
                            @for($i = 1; $i <= $viewingTestimonial->rating; $i++)
                                ★
                            @endfor
                        </div>
                    </div>

                    <div class="rounded-md border border-zinc-200 bg-zinc-50/50 p-3 text-xs text-zinc-700 italic leading-relaxed">
                        "{{ $viewingTestimonial->description }}"
                    </div>

                    <div class="flex items-center justify-between text-xs text-zinc-500 pt-2 border-t border-zinc-100">
                        <div class="flex items-center gap-1.5">
                            <span class="h-1.5 w-1.5 rounded-full {{ $viewingTestimonial->is_active ? 'bg-emerald-500' : 'bg-zinc-300' }}"></span>
                            <span>{{ $viewingTestimonial->is_active ? 'Active & Published' : 'Inactive' }}</span>
                        </div>
                        <div>
                            {{ $viewingTestimonial->created_at ? $viewingTestimonial->created_at->format('M d, Y') : '—' }}
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-2 pt-2">
                    <button wire:click="editFromViewModal" 
                            type="button" 
                            class="h-8 px-3 rounded-md border border-zinc-200 bg-white text-xs font-medium text-zinc-700 hover:bg-zinc-50 cursor-pointer shadow-2xs">
                        Edit
                    </button>
                    <button wire:click="closeViewModal" 
                            type="button" 
                            class="h-8 px-3 rounded-md bg-zinc-900 text-xs font-medium text-white hover:bg-zinc-800 cursor-pointer shadow-xs">
                        Close
                    </button>
                </div>

            </div>
        </div>
    @endif

    <!-- ========================================== -->
    <!-- SHADCN DIALOG: CREATE / EDIT               -->
    <!-- ========================================== -->
    @if($showModal)
        <div class="fixed inset-0 z-50 bg-black/50 backdrop-blur-xs flex items-center justify-center p-4" 
             x-data
             @keydown.escape.window="$wire.closeModal()">
            
            <div class="relative w-full max-w-lg rounded-lg border border-zinc-200 bg-white p-6 shadow-lg space-y-4">
                
                <div class="flex items-start justify-between">
                    <div>
                        <h2 class="text-base font-semibold leading-none tracking-tight text-zinc-900">
                            {{ $isEditing ? 'Edit Testimonial' : 'Add Testimonial' }}
                        </h2>
                        <p class="text-xs text-zinc-500 mt-1">
                            {{ $isEditing ? 'Modify review content and client details.' : 'Record a new client endorsement.' }}
                        </p>
                    </div>
                    <button wire:click="closeModal" type="button" class="text-zinc-400 hover:text-zinc-700 cursor-pointer">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <form wire:submit="save" class="space-y-3.5">
                    
                    <div class="grid grid-cols-2 gap-3">
                        <div class="space-y-1">
                            <label for="t-name" class="text-xs font-medium text-zinc-700">Client Name</label>
                            <input wire:model="name" 
                                   type="text" 
                                   id="t-name" 
                                   placeholder="Alexander Wright" 
                                   class="h-9 w-full rounded-md border @error('name') border-red-500 @else border-zinc-200 @enderror bg-white px-3 text-xs placeholder:text-zinc-400 focus:outline-none focus:ring-1 focus:ring-zinc-950">
                            @error('name')
                                <p class="text-[11px] text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-1">
                            <label for="t-designation" class="text-xs font-medium text-zinc-700">Role / Company</label>
                            <input wire:model="designation" 
                                   type="text" 
                                   id="t-designation" 
                                   placeholder="Director, Hilton" 
                                   class="h-9 w-full rounded-md border @error('designation') border-red-500 @else border-zinc-200 @enderror bg-white px-3 text-xs placeholder:text-zinc-400 focus:outline-none focus:ring-1 focus:ring-zinc-950">
                            @error('designation')
                                <p class="text-[11px] text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Rating Selector -->
                    <div class="space-y-1">
                        <label class="text-xs font-medium text-zinc-700">Rating (1 to 5)</label>
                        <div class="flex items-center gap-1">
                            @for($star = 1; $star <= 5; $star++)
                                <button type="button" 
                                        wire:click="setRating({{ $star }})" 
                                        class="h-7 w-7 text-sm rounded-md border transition-colors cursor-pointer {{ $star <= $rating ? 'bg-zinc-900 text-white border-zinc-900' : 'bg-white text-zinc-400 border-zinc-200 hover:bg-zinc-50' }}">
                                    {{ $star }}★
                                </button>
                            @endfor
                        </div>
                    </div>

                    <!-- Review Description -->
                    <div class="space-y-1">
                        <label for="t-description" class="text-xs font-medium text-zinc-700">Review Feedback</label>
                        <textarea wire:model="description" 
                                  id="t-description" 
                                  rows="3" 
                                  placeholder="Client comments on machine performance..." 
                                  class="w-full rounded-md border @error('description') border-red-500 @else border-zinc-200 @enderror bg-white p-3 text-xs placeholder:text-zinc-400 focus:outline-none focus:ring-1 focus:ring-zinc-950 leading-relaxed"></textarea>
                        @error('description')
                            <p class="text-[11px] text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status Toggle -->
                    <div class="flex items-center justify-between pt-1">
                        <div>
                            <span class="text-xs font-medium text-zinc-700 block">Published</span>
                            <span class="text-[11px] text-zinc-500">Show on the website testimonials list.</span>
                        </div>
                        <input wire:model="is_active" type="checkbox" class="h-4 w-4 rounded border-zinc-300 text-zinc-900 focus:ring-zinc-950 cursor-pointer">
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center justify-end gap-2 pt-3 border-t border-zinc-100">
                        <button wire:click="closeModal" 
                                type="button" 
                                class="h-8 px-3 rounded-md border border-zinc-200 bg-white text-xs font-medium text-zinc-700 hover:bg-zinc-50 cursor-pointer shadow-2xs">
                            Cancel
                        </button>
                        <button type="submit" 
                                wire:loading.attr="disabled"
                                class="h-8 px-3 rounded-md bg-zinc-900 text-xs font-medium text-white hover:bg-zinc-800 disabled:opacity-50 cursor-pointer shadow-xs inline-flex items-center gap-1.5">
                            <svg wire:loading wire:target="save" class="animate-spin -ml-0.5 h-3 w-3 text-white" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            <span>{{ $isEditing ? 'Save Changes' : 'Create Testimonial' }}</span>
                        </button>
                    </div>

                </form>

            </div>
        </div>
    @endif

    <!-- ========================================== -->
    <!-- SHADCN DIALOG: DELETE CONFIRMATION         -->
    <!-- ========================================== -->
    @if($showDeleteModal)
        <div class="fixed inset-0 z-50 bg-black/50 backdrop-blur-xs flex items-center justify-center p-4" 
             x-data
             @keydown.escape.window="$wire.closeDeleteModal()">
            
            <div class="relative w-full max-w-md rounded-lg border border-zinc-200 bg-white p-6 shadow-lg space-y-4">
                <div>
                    <h2 class="text-base font-semibold leading-none tracking-tight text-zinc-900">Are you absolutely sure?</h2>
                    <p class="text-xs text-zinc-500 mt-2 leading-relaxed">
                        This action cannot be undone. This will permanently delete the review:
                    </p>
                    <p class="text-xs font-medium text-zinc-800 mt-1.5">"{{ $deleteName }}"</p>
                </div>

                <div class="flex items-center justify-end gap-2 pt-2 border-t border-zinc-100">
                    <button wire:click="closeDeleteModal" 
                            type="button" 
                            class="h-8 px-3 rounded-md border border-zinc-200 bg-white text-xs font-medium text-zinc-700 hover:bg-zinc-50 cursor-pointer shadow-2xs">
                        Cancel
                    </button>
                    <button wire:click="delete" 
                            type="button" 
                            wire:loading.attr="disabled"
                            class="h-8 px-3 rounded-md bg-red-600 text-xs font-medium text-white hover:bg-red-700 disabled:opacity-50 cursor-pointer shadow-xs">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    @endif

</div>
