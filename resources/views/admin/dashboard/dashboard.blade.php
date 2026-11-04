<div class="space-y-4">

    <!-- Page Header (Minimal Shadcn) -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-lg font-semibold tracking-tight text-zinc-900">Dashboard</h1>
            <p class="text-xs text-zinc-500">Recent Machinery Quotation Inquiries and commercial pipeline overview.</p>
        </div>
        
        <div class="flex items-center gap-1.5">
            <a href="{{ route('home') }}" target="_blank"
               class="inline-flex items-center gap-1.5 h-8 px-2.5 text-xs font-medium text-zinc-700 bg-white border border-zinc-200 rounded-md hover:bg-zinc-50 hover:text-zinc-900 shadow-2xs transition-colors">
                <span>View Website</span>
                <svg class="w-3 h-3 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- Toolbar: Search & Minimal Status Tabs -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2.5">
        
        <!-- Search Input -->
        <div class="relative w-full sm:w-72">
            <svg class="absolute left-2.5 top-2.5 h-3.5 w-3.5 text-zinc-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input wire:model.live.debounce.250ms="search" 
                   type="text" 
                   placeholder="Filter inquiries..." 
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

        <!-- Minimal Counting Tabs -->
        <div class="flex items-center gap-1 flex-wrap">
            <button wire:click="setFilter('all')" 
                    type="button" 
                    class="inline-flex items-center gap-1.5 h-8 px-2.5 rounded-md text-xs transition-colors cursor-pointer {{ $statusFilter === 'all' ? 'bg-zinc-100 text-zinc-900 font-medium' : 'text-zinc-500 hover:text-zinc-900 hover:bg-zinc-50' }}">
                <span>All</span>
                <span class="font-mono text-[10px] text-zinc-400">{{ $this->statusCounts['all'] }}</span>
            </button>
            <button wire:click="setFilter('new')" 
                    type="button" 
                    class="inline-flex items-center gap-1.5 h-8 px-2.5 rounded-md text-xs transition-colors cursor-pointer {{ $statusFilter === 'new' ? 'bg-zinc-100 text-zinc-900 font-medium' : 'text-zinc-500 hover:text-zinc-900 hover:bg-zinc-50' }}">
                <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                <span>New</span>
                <span class="font-mono text-[10px] text-zinc-400">{{ $this->statusCounts['new'] }}</span>
            </button>
            <button wire:click="setFilter('quoted')" 
                    type="button" 
                    class="inline-flex items-center gap-1.5 h-8 px-2.5 rounded-md text-xs transition-colors cursor-pointer {{ $statusFilter === 'quoted' ? 'bg-zinc-100 text-zinc-900 font-medium' : 'text-zinc-500 hover:text-zinc-900 hover:bg-zinc-50' }}">
                <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                <span>Quoted</span>
                <span class="font-mono text-[10px] text-zinc-400">{{ $this->statusCounts['quoted'] }}</span>
            </button>
            <button wire:click="setFilter('review')" 
                    type="button" 
                    class="inline-flex items-center gap-1.5 h-8 px-2.5 rounded-md text-xs transition-colors cursor-pointer {{ $statusFilter === 'review' ? 'bg-zinc-100 text-zinc-900 font-medium' : 'text-zinc-500 hover:text-zinc-900 hover:bg-zinc-50' }}">
                <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                <span>Review</span>
                <span class="font-mono text-[10px] text-zinc-400">{{ $this->statusCounts['review'] }}</span>
            </button>
            <button wire:click="setFilter('completed')" 
                    type="button" 
                    class="inline-flex items-center gap-1.5 h-8 px-2.5 rounded-md text-xs transition-colors cursor-pointer {{ $statusFilter === 'completed' ? 'bg-zinc-100 text-zinc-900 font-medium' : 'text-zinc-500 hover:text-zinc-900 hover:bg-zinc-50' }}">
                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                <span>Completed</span>
                <span class="font-mono text-[10px] text-zinc-400">{{ $this->statusCounts['completed'] }}</span>
            </button>

            @if($search !== '' || $statusFilter !== 'all')
                <button wire:click="$set('search', ''); setFilter('all');" 
                        type="button" 
                        class="ml-2 h-8 px-2 text-xs text-zinc-400 hover:text-zinc-900 transition-colors cursor-pointer">
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
                        <th class="h-9 px-4 text-left align-middle font-medium text-zinc-500 w-24">Ref</th>
                        <th class="h-9 px-4 text-left align-middle font-medium text-zinc-500">Client</th>
                        <th class="h-9 px-4 text-left align-middle font-medium text-zinc-500">Model</th>
                        <th class="h-9 px-4 text-left align-middle font-medium text-zinc-500 w-24">Value</th>
                        <th class="h-9 px-4 text-left align-middle font-medium text-zinc-500 w-28">Date</th>
                        <th class="h-9 px-4 text-center align-middle font-medium text-zinc-500 w-28">Status</th>
                        <th class="h-9 px-4 text-right align-middle font-medium text-zinc-500 w-24">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @forelse($this->filteredInquiries as $inquiry)
                        <tr class="hover:bg-zinc-50/60 transition-colors" wire:key="{{ $inquiry['id'] }}">
                            <!-- Counting Column -->
                            <td class="px-4 py-3 text-center align-middle font-mono text-xs text-zinc-400">
                                {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                            </td>

                            <!-- Ref ID -->
                            <td class="px-4 py-3 align-middle font-mono text-xs text-zinc-500 whitespace-nowrap">
                                {{ $inquiry['id'] }}
                            </td>

                            <!-- Client -->
                            <td class="px-4 py-3 align-middle">
                                <button wire:click="viewInquiry('{{ $inquiry['id'] }}')" 
                                        type="button" 
                                        class="text-left font-medium text-zinc-900 hover:underline transition-all cursor-pointer block leading-snug">
                                    {{ $inquiry['client'] }}
                                </button>
                                <span class="text-[11px] text-zinc-400 font-normal block">
                                    {{ $inquiry['contact'] }}
                                </span>
                            </td>

                            <!-- Model -->
                            <td class="px-4 py-3 align-middle">
                                <span class="text-zinc-800 font-medium block">{{ $inquiry['model'] }}</span>
                                <span class="text-[11px] text-zinc-400 font-normal">{{ $inquiry['category'] }}</span>
                            </td>

                            <!-- Value -->
                            <td class="px-4 py-3 align-middle font-medium text-zinc-900 whitespace-nowrap">
                                {{ $inquiry['value'] }}
                            </td>

                            <!-- Date -->
                            <td class="px-4 py-3 align-middle text-zinc-500 whitespace-nowrap">
                                {{ $inquiry['date'] }}
                            </td>

                            <!-- Minimal Outline Status Badge -->
                            <td class="px-4 py-3 text-center align-middle whitespace-nowrap">
                                <span class="inline-flex items-center gap-1.5 rounded-full border border-zinc-200 bg-zinc-50 px-2 py-0.5 text-[11px] font-medium text-zinc-700">
                                    @if($inquiry['status'] === 'New')
                                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                                    @elseif($inquiry['status'] === 'Quoted')
                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                                    @elseif($inquiry['status'] === 'Review')
                                        <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                                    @else
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                    @endif
                                    <span>{{ $inquiry['status'] }}</span>
                                </span>
                            </td>

                            <!-- Ghost Actions -->
                            <td class="px-4 py-3 text-right align-middle whitespace-nowrap">
                                <div class="flex items-center justify-end gap-1">
                                    <button wire:click="viewInquiry('{{ $inquiry['id'] }}')" 
                                            type="button" 
                                            title="View inquiry"
                                            class="h-7 w-7 inline-flex items-center justify-center rounded-md text-zinc-400 hover:text-zinc-900 hover:bg-zinc-100 transition-colors cursor-pointer">
                                        <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>

                                    @if($inquiry['status'] === 'New')
                                        <button wire:click="updateStatus('{{ $inquiry['id'] }}', 'Quoted')"
                                                type="button"
                                                title="Advance to Quoted"
                                                class="h-7 w-7 inline-flex items-center justify-center rounded-md text-zinc-400 hover:text-amber-600 hover:bg-amber-50 transition-colors cursor-pointer">
                                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </button>
                                    @elseif($inquiry['status'] === 'Quoted' || $inquiry['status'] === 'Review')
                                        <button wire:click="updateStatus('{{ $inquiry['id'] }}', 'Completed')"
                                                type="button"
                                                title="Advance to Completed"
                                                class="h-7 w-7 inline-flex items-center justify-center rounded-md text-zinc-400 hover:text-emerald-600 hover:bg-emerald-50 transition-colors cursor-pointer">
                                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="h-28 text-center text-zinc-400">
                                No inquiries found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Table Footer -->
        <div class="flex items-center justify-between px-4 py-2.5 border-t border-zinc-200 bg-white text-xs text-zinc-500">
            <span>Showing {{ count($this->filteredInquiries) }} of {{ count($this->inquiries) }} entries</span>
            <span class="text-zinc-400 text-[11px]">Synced</span>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- SHADCN DIALOG: INQUIRY DETAILS             -->
    <!-- ========================================== -->
    @if($showInquiryModal && $selectedInquiry)
        <div class="fixed inset-0 z-50 bg-black/50 backdrop-blur-xs flex items-center justify-center p-4" 
             x-data
             @keydown.escape.window="$wire.closeInquiryModal()">
            
            <div class="relative w-full max-w-lg rounded-lg border border-zinc-200 bg-white p-6 shadow-lg space-y-4">
                
                <div class="flex items-start justify-between">
                    <div>
                        <div class="flex items-center gap-2">
                            <h2 class="text-base font-semibold leading-none tracking-tight text-zinc-900">Inquiry Specification</h2>
                            <span class="font-mono text-xs text-zinc-500">{{ $selectedInquiry['id'] }}</span>
                        </div>
                        <p class="text-xs text-zinc-500 mt-1">Review quotation inquiry specifications.</p>
                    </div>
                    <button wire:click="closeInquiryModal" type="button" class="text-zinc-400 hover:text-zinc-700 cursor-pointer">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="space-y-3 pt-1">
                    <div class="grid grid-cols-2 gap-3 text-xs">
                        <div>
                            <span class="text-[11px] text-zinc-400 font-medium uppercase tracking-wider block">Client</span>
                            <p class="font-medium text-zinc-900 mt-0.5">{{ $selectedInquiry['client'] }}</p>
                            <p class="text-zinc-500 text-[11px]">{{ $selectedInquiry['contact'] }}</p>
                        </div>
                        <div>
                            <span class="text-[11px] text-zinc-400 font-medium uppercase tracking-wider block">Estimated Value</span>
                            <p class="font-medium text-zinc-900 mt-0.5">{{ $selectedInquiry['value'] }}</p>
                            <p class="text-zinc-400 text-[11px]">{{ $selectedInquiry['date'] }}</p>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-zinc-100">
                        <span class="text-[11px] text-zinc-400 font-medium uppercase tracking-wider block">Target Machine</span>
                        <div class="mt-1 flex items-center justify-between rounded-md border border-zinc-200 bg-zinc-50/50 p-2.5 text-xs">
                            <span class="font-medium text-zinc-900">{{ $selectedInquiry['model'] }}</span>
                            <span class="text-zinc-500 text-[11px]">{{ $selectedInquiry['category'] }}</span>
                        </div>
                    </div>

                    @if(!empty($selectedInquiry['notes']))
                        <div>
                            <span class="text-[11px] text-zinc-400 font-medium uppercase tracking-wider block mb-1">Notes</span>
                            <p class="text-xs text-zinc-600 rounded-md border border-zinc-200 bg-zinc-50/50 p-2.5 leading-relaxed">
                                {{ $selectedInquiry['notes'] }}
                            </p>
                        </div>
                    @endif

                    <!-- Quick Status Selector -->
                    <div class="pt-2 border-t border-zinc-100">
                        <span class="text-[11px] text-zinc-400 font-medium uppercase tracking-wider block mb-1.5">Change Status</span>
                        <div class="flex items-center gap-1.5">
                            @foreach(['New', 'Quoted', 'Review', 'Completed'] as $st)
                                <button wire:click="updateStatus('{{ $selectedInquiry['id'] }}', '{{ $st }}')"
                                        type="button"
                                        class="h-7 px-2.5 text-xs rounded-md border transition-colors cursor-pointer {{ $selectedInquiry['status'] === $st ? 'bg-zinc-900 text-white border-zinc-900 font-medium shadow-2xs' : 'bg-white text-zinc-600 border-zinc-200 hover:bg-zinc-50' }}">
                                    {{ $st }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end pt-2">
                    <button wire:click="closeInquiryModal" 
                            type="button" 
                            class="h-8 px-3 rounded-md bg-zinc-900 text-xs font-medium text-white hover:bg-zinc-800 cursor-pointer shadow-xs">
                        Close
                    </button>
                </div>

            </div>
        </div>
    @endif

</div>
