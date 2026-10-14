<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin'), Title('Dashboard - 7A Global Machinery Admin')] class extends Component
{
    public string $search = '';

    public string $statusFilter = 'all';

    public array $inquiries = [
        [
            'id' => 'INQ-8821',
            'client' => 'Hilton International Laundry',
            'contact' => 'operations@hilton-laundry.com',
            'model' => '7A-3200 Industrial Ironer',
            'category' => 'Steam-Heated',
            'date' => 'Today, 10:45 AM',
            'status' => 'New',
            'value' => '$42,500',
        ],
        [
            'id' => 'INQ-8820',
            'client' => 'Apex Healthcare Linens',
            'contact' => 'procurement@apex-linens.co.uk',
            'model' => '7A-2500 Commercial Ironer',
            'category' => 'Gas-Heated',
            'date' => 'Yesterday, 3:15 PM',
            'status' => 'Quoted',
            'value' => '$31,200',
        ],
        [
            'id' => 'INQ-8819',
            'client' => 'Grand Royale Hospitality Group',
            'contact' => 'facility@grandroyale.de',
            'model' => '7A-1800 Compact Ironer',
            'category' => 'Electric-Heated',
            'date' => 'Oct 12, 2026',
            'status' => 'Review',
            'value' => '$19,800',
        ],
        [
            'id' => 'INQ-8818',
            'client' => 'Nordic Clean Tech Services',
            'contact' => 'info@nordiccleantech.se',
            'model' => '7A-3200 Industrial Heavy Duty',
            'category' => 'Steam-Heated',
            'date' => 'Oct 11, 2026',
            'status' => 'Completed',
            'value' => '$45,000',
        ],
        [
            'id' => 'INQ-8817',
            'client' => 'Pacific Ocean Resort & Spa',
            'contact' => 'maint@pacificresorts.sg',
            'model' => '7A-2500 Commercial Unit',
            'category' => 'Thermal Oil',
            'date' => 'Oct 09, 2026',
            'status' => 'Completed',
            'value' => '$32,600',
        ],
    ];

    #[Computed]
    public function filteredInquiries(): array
    {
        return array_filter($this->inquiries, function ($inquiry) {
            $matchesSearch = empty($this->search) ||
                str_contains(strtolower($inquiry['client']), strtolower($this->search)) ||
                str_contains(strtolower($inquiry['model']), strtolower($this->search)) ||
                str_contains(strtolower($inquiry['id']), strtolower($this->search));

            $matchesStatus = $this->statusFilter === 'all' ||
                strtolower($inquiry['status']) === strtolower($this->statusFilter);

            return $matchesSearch && $matchesStatus;
        });
    }

    public function setFilter(string $status): void
    {
        $this->statusFilter = $status;
    }
};
