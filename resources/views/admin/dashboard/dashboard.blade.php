<div class="space-y-6">

    <!-- Simple Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <div>
            <h1 class="text-xl sm:text-2xl font-bold tracking-tight text-zinc-900">Dashboard</h1>
            <p class="text-xs sm:text-sm text-zinc-500 mt-0.5">
                Overview of commercial flatwork ironer inquiries.
            </p>
        </div>
        
        <div class="flex items-center gap-2">
            <a href="{{ route('home') }}" target="_blank"
               class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-zinc-700 bg-white border border-zinc-200 rounded-md hover:bg-zinc-50 hover:text-zinc-900 transition-colors">
                <span>Live Website</span>
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
            <a href="{{ route('home2') }}" target="_blank"
               class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-zinc-700 bg-white border border-zinc-200 rounded-md hover:bg-zinc-50 hover:text-zinc-900 transition-colors">
                <span>Home V2</span>
                <svg class="w-3.5 h-3.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- 3 Simple Stat Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <!-- Stat 1 -->
        <div class="rounded-lg border border-zinc-200 bg-white p-4">
            <span class="text-xs font-medium text-zinc-500">Total Inquiries</span>
            <div class="mt-1 flex items-baseline justify-between">
                <span class="text-2xl font-bold tracking-tight text-zinc-900">148</span>
                <span class="text-xs font-medium text-emerald-600">+18%</span>
            </div>
        </div>

        <!-- Stat 2 -->
        <div class="rounded-lg border border-zinc-200 bg-white p-4">
            <span class="text-xs font-medium text-zinc-500">Active Machinery</span>
            <div class="mt-1 flex items-baseline justify-between">
                <span class="text-2xl font-bold tracking-tight text-zinc-900">12</span>
                <span class="text-xs text-zinc-500">Flatwork models</span>
            </div>
        </div>

        <!-- Stat 3 -->
        <div class="rounded-lg border border-zinc-200 bg-white p-4">
            <span class="text-xs font-medium text-zinc-500">Pending Review</span>
            <div class="mt-1 flex items-baseline justify-between">
                <span class="text-2xl font-bold tracking-tight text-zinc-900">24</span>
                <span class="text-xs text-amber-600">Action needed</span>
            </div>
        </div>
    </div>

    <!-- Simple, Clean Data Table: Recent Inquiries -->
    <div class="rounded-lg border border-zinc-200 bg-white overflow-hidden">
        
        <!-- Table Header & Search -->
        <div class="p-4 border-b border-zinc-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <div>
                <h2 class="text-sm font-semibold text-zinc-900">Recent Inquiries</h2>
                <p class="text-xs text-zinc-500 mt-0.5">Latest machinery quotation requests.</p>
            </div>

            <!-- Search input -->
            <div class="w-full sm:w-64">
                <input wire:model.live.debounce.250ms="search" 
                       type="text" 
                       placeholder="Search inquiries..." 
                       class="w-full px-3 py-1.5 text-xs bg-zinc-50 border border-zinc-200 rounded-md text-zinc-800 placeholder:text-zinc-600 focus:outline-none focus:ring-1 focus:ring-zinc-900 focus:bg-white transition-all">
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead>
                    <tr class="border-b border-zinc-200 bg-zinc-50/50 text-zinc-500 font-medium">
                        <th class="px-4 py-2.5">Client</th>
                        <th class="px-4 py-2.5">Model</th>
                        <th class="px-4 py-2.5">Date</th>
                        <th class="px-4 py-2.5">Value</th>
                        <th class="px-4 py-2.5">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    @forelse($this->filteredInquiries as $inquiry)
                        <tr class="hover:bg-zinc-50/60 transition-colors" wire:key="{{ $inquiry['id'] }}">
                            <td class="px-4 py-3">
                                <div class="font-medium text-zinc-900">{{ $inquiry['client'] }}</div>
                                <div class="text-[11px] text-zinc-500">{{ $inquiry['contact'] }}</div>
                            </td>
                            <td class="px-4 py-3 text-zinc-700">
                                {{ $inquiry['model'] }}
                            </td>
                            <td class="px-4 py-3 text-zinc-500 whitespace-nowrap">
                                {{ $inquiry['date'] }}
                            </td>
                            <td class="px-4 py-3 font-medium text-zinc-900">
                                {{ $inquiry['value'] }}
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap">
                                @if($inquiry['status'] === 'New')
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[11px] font-medium bg-blue-50 text-blue-700 border border-blue-200/60">
                                        New
                                    </span>
                                @elseif($inquiry['status'] === 'Quoted')
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[11px] font-medium bg-amber-50 text-amber-700 border border-amber-200/60">
                                        Quoted
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[11px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-200/60">
                                        Completed
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-8 text-center text-zinc-500">
                                No inquiries found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</div>