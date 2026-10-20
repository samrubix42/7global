<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Equipment Guide | 7A GLOBAL MACHINERY PVT. LTD.')] class extends Component
{
    public string $series = 'all'; // all, e2, g, 7a

    /**
     * @return array<int, array<string, mixed>>
     */
    public function equipmentModel(): array
    {
        return [
            [
                'series' => 'e2',
                'seriesLabel' => 'e² line',
                'category' => 'Chest Heated Series',
                'image' => '/images/menu-e2.jpg',
                'name' => 'e² line Chest Ironers',
                'summary' => 'Evolution meets finest ironing finish and ease of use. Chromium chests ensure frictionless linen travel and delicate fiber treatment.',
                'sizes' => '6 Sizes',
                'rollerWidth' => '1400 – 3200 mm',
                'heating' => 'Electric • Steam • Gas',
                'output' => '60 – 220 kg/h',
                'bestFor' => 'Luxury hotels, boutique resorts, healthcare linen',
            ],
            [
                'series' => 'g',
                'seriesLabel' => 'G line',
                'category' => 'Cylinder Heated Series',
                'image' => '/images/menu-g.jpg',
                'name' => 'G line Drying Ironers',
                'summary' => 'High throughput drying ironer handling moisture straight from the extractor. Engineered for round-the-clock commercial shifts.',
                'sizes' => '9 Sizes',
                'rollerWidth' => 'Ø 350 – Ø 800 mm',
                'heating' => 'Electric • Steam • Gas',
                'output' => '80 – 320+ kg/h',
                'bestFor' => 'Industrial laundry plants, hospitals, high-volume linen',
            ],
            [
                'series' => '7a',
                'seriesLabel' => '7A line',
                'category' => 'Commercial Standard',
                'image' => '/images/menu-7a.jpg',
                'name' => '7A line Commercial Ironers',
                'summary' => 'Your foundational entrance into professional flatwork ironing. Compact footprint, intuitive controls, and minimal maintenance costs.',
                'sizes' => '8 Models',
                'rollerWidth' => '1000 – 2000 mm',
                'heating' => 'Electric • Gas',
                'output' => '30 – 90 kg/h',
                'bestFor' => 'OPL, small hotels, guest houses, commercial laundries',
            ],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public function equipmentModels(): array
    {
        $items = $this->equipmentModel();

        if ($this->series === 'all') {
            return $items;
        }

        return array_values(array_filter($items, fn (array $item): bool => $item['series'] === $this->series));
    }

    public function setSeries(string $series): void
    {
        if (in_array($series, ['all', 'e2', 'g', '7a'])) {
            $this->series = $series;
        }
    }
};
