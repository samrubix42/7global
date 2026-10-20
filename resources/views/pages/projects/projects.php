<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Projects | 7A GLOBAL MACHINERY PVT. LTD.')] class extends Component
{
    public string $sector = 'all'; // all, healthcare, hospitality, corporate, commercial

    /**
     * @return array<int, array<string, string>>
     */
    public function projects(): array
    {
        return [
            [
                'sector' => 'healthcare',
                'sectorLabel' => 'Healthcare',
                'title' => 'Multispecialty Hospital Central Laundry',
                'location' => 'New Delhi, India',
                'scope' => 'G line cylinder ironers + automated feeding',
                'capacity' => '280+ kg/hour',
                'image' => '/images/hero-1.jpg',
                'detail' => 'A high-turnover central linen facility serving a 600-bed hospital, engineered for strict soil-to-clean separation and continuous two-shift operation.',
            ],
            [
                'sector' => 'hospitality',
                'sectorLabel' => 'Hospitality',
                'title' => 'Luxury Resort Linen Finishing Line',
                'location' => 'Goa, India',
                'scope' => 'e² line chest ironers',
                'capacity' => '180 kg/hour',
                'image' => '/images/hero-2.jpg',
                'detail' => 'Mirror-finish chest ironing for banquet linen and high thread-count bed sheets, delivering a crisp, stress-free finish for a five-star property.',
            ],
            [
                'sector' => 'commercial',
                'sectorLabel' => 'Commercial',
                'title' => 'Third-Party Industrial Laundry Plant',
                'location' => 'Greater Noida (NCR), India',
                'scope' => 'G line + e² line hybrid plant',
                'capacity' => '320+ kg/hour',
                'image' => '/images/product-ironer.jpg',
                'detail' => 'A multi-line commercial plant combining drying and chest ironers for mixed hotel, hospital, and institutional linen at scale.',
            ],
            [
                'sector' => 'corporate',
                'sectorLabel' => 'Corporate',
                'title' => 'Corporate Campus OPL Upgrade',
                'location' => 'Pune, India',
                'scope' => '7A line commercial ironers',
                'capacity' => '90 kg/hour',
                'image' => '/images/menu-7a.jpg',
                'detail' => 'A compact on-premise laundry retrofit for a large corporate campus, replacing older equipment with intuitive, low-maintenance ironers.',
            ],
            [
                'sector' => 'healthcare',
                'sectorLabel' => 'Healthcare',
                'title' => 'District Hospital OPL Installation',
                'location' => 'Jaipur, India',
                'scope' => '7A line + G line',
                'capacity' => '120 kg/hour',
                'image' => '/images/menu-g.jpg',
                'detail' => 'An on-premise laundry for a regional hospital, designed for reliable hygiene processing with minimal operator complexity.',
            ],
            [
                'sector' => 'hospitality',
                'sectorLabel' => 'Hospitality',
                'title' => 'Business Hotel Linen Processing',
                'location' => 'Mumbai, India',
                'scope' => 'e² line chest ironers',
                'capacity' => '140 kg/hour',
                'image' => '/images/menu-e2.jpg',
                'detail' => 'A space-efficient ironing line for a city business hotel, balancing premium finish with a compact plant footprint.',
            ],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public function filteredProjects(): array
    {
        $items = $this->projects();

        if ($this->sector === 'all') {
            return $items;
        }

        return array_values(array_filter($items, fn (array $item): bool => $item['sector'] === $this->sector));
    }

    public function setSector(string $sector): void
    {
        if (in_array($sector, ['all', 'healthcare', 'hospitality', 'corporate', 'commercial'])) {
            $this->sector = $sector;
        }
    }
};
