<div class="space-y-6">

    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <div class="flex items-center gap-2">
                <h1 class="text-xl sm:text-2xl font-bold tracking-tight text-zinc-900">FAQ Management</h1>
                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-zinc-100 text-zinc-700">
                    {{ $this->stats['total'] }} Total
                </span>
            </div>
            <p class="text-xs sm:text-sm text-zinc-500 mt-0.5">
                Manage frequently asked questions displayed on the website and client portal.
            </p>
        </div>

        <div class="flex items-center gap-2.5">
            <button wire:click="openCreateModal"
                    type="button"
                    class="inline-flex items-center gap-2 px-3.5 py-2 text-xs font-semibold text-white bg-zinc-900 hover:bg-zinc-800 active:scale-[0.98] rounded-lg shadow-xs transition-all cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Add FAQ</span>
            </button>
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="rounded-xl border border-zinc-200/80 bg-white p-4 shadow-2xs">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Total Questions</span>
                <span class="p-1.5 rounded-md bg-zinc-100 text-zinc-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </span>
            </div>
            <div class="mt-2 flex items-baseline justify-between">
                <span class="text-2xl font-bold tracking-tight text-zinc-900">{{ $this->stats['total'] }}</span>
                <span class="text-xs text-zinc-400">Database entries</span>
            </div>
        </div>

        <div class="rounded-xl border border-zinc-200/80 bg-white p-4 shadow-2xs">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Published / Active</span>
                <span class="p-1.5 rounded-md bg-emerald-50 text-emerald-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </span>
            </div>
            <div class="mt-2 flex items-baseline justify-between">
                <span class="text-2xl font-bold tracking-tight text-emerald-600">{{ $this->stats['active'] }}</span>
                <span class="text-xs font-medium text-emerald-600">Live on site</span>
            </div>
        </div>

        <div class="rounded-xl border border-zinc-200/80 bg-white p-4 shadow-2xs">
            <div class="flex items-center justify-between">
                <span class="text-xs font-medium text-zinc-500">Inactive / Draft</span>
                <span class="p-1.5 rounded-md bg-zinc-100 text-zinc-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
                    </svg>
                </span>
            </div>
            <div class="mt-2 flex items-baseline justify-between">
                <span class="text-2xl font-bold tracking-tight text-zinc-700">{{ $this->stats['inactive'] }}</span>
                <span class="text-xs text-zinc-400">Hidden from public</span>
            </div>
        </div>
    </div>

    <!-- Main Table Container -->
    <div class="rounded-xl border border-zinc-200/80 bg-white shadow-2xs overflow-hidden">
        
        <!-- Filter Toolbar -->
        <div class="p-4 border-b border-zinc-200/80 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 bg-zinc-50/40">
            <div class="flex flex-col sm:flex-row sm:items-center gap-2.5 flex-1">
                <!-- Search input -->
                <div class="relative w-full sm:w-80">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-zinc-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input wire:model.live.debounce.250ms="search" 
                           type="text" 
                           placeholder="Search questions or answers..." 
                           class="w-full pl-9 pr-3 py-1.5 text-xs bg-white border border-zinc-200 rounded-lg text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all">
                </div>

                <!-- Status Filter -->
                <div class="w-full sm:w-44">
                    <select wire:model.live="statusFilter" 
                            class="w-full px-3 py-1.5 text-xs bg-white border border-zinc-200 rounded-lg text-zinc-700 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all">
                        <option value="all">All Statuses</option>
                        <option value="active">Active Only</option>
                        <option value="inactive">Inactive Only</option>
                    </select>
                </div>

                @if($search !== '' || $statusFilter !== 'all')
                    <button wire:click="$set('search', ''); $set('statusFilter', 'all');" 
                            type="button" 
                            class="text-xs text-zinc-500 hover:text-zinc-900 underline underline-offset-2 transition-colors">
                        Reset Filters
                    </button>
                @endif
            </div>

            <div class="text-xs text-zinc-500 shrink-0">
                Showing <span class="font-medium text-zinc-900">{{ $this->faqs->firstItem() ?? 0 }}</span> - <span class="font-medium text-zinc-900">{{ $this->faqs->lastItem() ?? 0 }}</span> of <span class="font-medium text-zinc-900">{{ $this->faqs->total() }}</span>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50/60 text-zinc-500 font-medium">
                        <th class="px-5 py-3 w-16">#</th>
                        <th class="px-5 py-3">Question & Answer</th>
                        <th class="px-5 py-3 w-32">Status</th>
                        <th class="px-5 py-3 w-32">Date Added</th>
                        <th class="px-5 py-3 w-32 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @forelse($this->faqs as $faq)
                        <tr class="hover:bg-zinc-50/60 transition-colors group" wire:key="faq-{{ $faq->id }}">
                            <td class="px-5 py-4 text-zinc-400 font-mono">
                                {{ $faq->id }}
                            </td>
                            <td class="px-5 py-4 max-w-xl">
                                <div class="font-semibold text-zinc-900 text-sm leading-snug">
                                    {{ $faq->question }}
                                </div>
                                <div class="text-zinc-600 mt-1 line-clamp-2 leading-relaxed text-[12px]">
                                    {{ $faq->answer }}
                                </div>
                            </td>
                            <td class="px-5 py-4">
                                <button wire:click="toggleStatus({{ $faq->id }})" 
                                        type="button"
                                        title="Click to toggle status"
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-medium transition-all cursor-pointer {{ $faq->is_active ? 'bg-emerald-50 text-emerald-700 hover:bg-emerald-100' : 'bg-zinc-100 text-zinc-600 hover:bg-zinc-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $faq->is_active ? 'bg-emerald-500' : 'bg-zinc-400' }}"></span>
                                    <span>{{ $faq->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </td>
                            <td class="px-5 py-4 text-zinc-500 whitespace-nowrap">
                                {{ $faq->created_at ? $faq->created_at->format('M d, Y') : '—' }}
                            </td>
                            <td class="px-5 py-4 text-right whitespace-nowrap">
                                <div class="flex items-center justify-end gap-1.5">
                                    <!-- Edit Button -->
                                    <button wire:click="openEditModal({{ $faq->id }})" 
                                            type="button" 
                                            title="Edit FAQ"
                                            class="p-1.5 text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 rounded-md transition-colors cursor-pointer">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </button>

                                    <!-- Delete Button -->
                                    <button wire:click="confirmDelete({{ $faq->id }})" 
                                            type="button" 
                                            title="Delete FAQ"
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
                            <td colspan="5" class="px-5 py-12 text-center">
                                <div class="flex flex-col items-center justify-center max-w-sm mx-auto">
                                    <div class="p-3 bg-zinc-100 rounded-full text-zinc-400 mb-3">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-sm font-semibold text-zinc-900">No FAQs found</h3>
                                    <p class="text-xs text-zinc-500 mt-1">
                                        @if($search !== '' || $statusFilter !== 'all')
                                            No FAQs match your search criteria. Try resetting the filters.
                                        @else
                                            No FAQ entries have been created yet. Click "Add FAQ" to create your first one.
                                        @endif
                                    </p>
                                    @if($search === '' && $statusFilter === 'all')
                                        <button wire:click="openCreateModal" 
                                                type="button" 
                                                class="mt-4 px-3 py-1.5 text-xs font-medium text-white bg-zinc-900 hover:bg-zinc-800 rounded-md transition-colors cursor-pointer">
                                            Add First FAQ
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
        @if($this->faqs->hasPages())
            <div class="p-4 border-t border-zinc-200/80 bg-zinc-50/30">
                {{ $this->faqs->links() }}
            </div>
        @endif
    </div>

    <!-- ========================================== -->
    <!-- CREATE / EDIT MODAL                        -->
    <!-- ========================================== -->
    @if($showModal)
        <div class="fixed inset-0 z-50 overflow-y-auto" 
             aria-labelledby="modal-title" 
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
                            <h3 class="text-base font-semibold text-zinc-900" id="modal-title">
                                {{ $isEditing ? 'Edit FAQ' : 'Add New FAQ' }}
                            </h3>
                            <p class="text-xs text-zinc-500 mt-0.5">
                                {{ $isEditing ? 'Update the question and answer details below.' : 'Create a new frequently asked question for the website.' }}
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
                            
                            <!-- Question Field -->
                            <div>
                                <label for="faq-question" class="block text-xs font-semibold text-zinc-700 mb-1.5">
                                    Question <span class="text-red-500">*</span>
                                </label>
                                <input wire:model="question" 
                                       type="text" 
                                       id="faq-question"
                                       placeholder="e.g. What is the roll diameter of the 7A-3200 ironer?" 
                                       class="w-full px-3 py-2 text-xs bg-white border @error('question') border-red-300 ring-1 ring-red-300 @else border-zinc-200 @enderror rounded-lg text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all">
                                @error('question')
                                    <p class="text-[11px] text-red-500 mt-1 flex items-center gap-1">
                                        <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>{{ $message }}</span>
                                    </p>
                                @enderror
                            </div>

                            <!-- Answer Field -->
                            <div>
                                <label for="faq-answer" class="block text-xs font-semibold text-zinc-700 mb-1.5">
                                    Answer <span class="text-red-500">*</span>
                                </label>
                                <textarea wire:model="answer" 
                                          id="faq-answer"
                                          rows="5"
                                          placeholder="Provide a detailed, clear explanation..." 
                                          class="w-full px-3 py-2 text-xs bg-white border @error('answer') border-red-300 ring-1 ring-red-300 @else border-zinc-200 @enderror rounded-lg text-zinc-900 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-zinc-900/10 focus:border-zinc-900 transition-all leading-relaxed"></textarea>
                                @error('answer')
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
                                    <label for="faq-active" class="text-xs font-medium text-zinc-900 cursor-pointer">Active Status</label>
                                    <p class="text-[11px] text-zinc-500">Make this question visible to visitors on the live website.</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input wire:model="is_active" 
                                           type="checkbox" 
                                           id="faq-active"
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
                                <span>{{ $isEditing ? 'Save Changes' : 'Create FAQ' }}</span>
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
             aria-labelledby="delete-modal-title" 
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
                                <h3 class="text-sm font-semibold text-zinc-900" id="delete-modal-title">
                                    Delete FAQ
                                </h3>
                                <p class="text-xs text-zinc-500 mt-1">
                                    Are you sure you want to permanently delete this FAQ? This action cannot be undone.
                                </p>
                                <div class="mt-3 p-2.5 rounded-lg bg-zinc-50 border border-zinc-200/80 text-xs text-zinc-800 font-medium line-clamp-2">
                                    "{{ $deleteQuestion }}"
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
                            <span>Delete FAQ</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>