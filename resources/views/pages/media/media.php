<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Media | 7A GLOBAL MACHINERY PVT. LTD.')] class extends Component
{
    public string $type = 'all'; // all, news, event, press, video

    /**
     * @return array<int, array<string, string>>
     */
    public function mediaItems(): array
    {
        return [
            [
                'type' => 'news',
                'typeLabel' => 'News',
                'date' => 'March 2026',
                'title' => '7A Global Expands Flatwork Ironer Range',
                'excerpt' => 'The e² line chest ironer family grows with new roller widths engineered for large-format hotel and hospital linen.',
            ],
            [
                'type' => 'event',
                'typeLabel' => 'Event',
                'date' => 'February 2026',
                'title' => 'Exhibiting at the International Laundry Expo',
                'excerpt' => 'Join us at booth H-24 to see live demonstrations of the G line cylinder ironers and automated feeding systems.',
            ],
            [
                'type' => 'press',
                'typeLabel' => 'Press Release',
                'date' => 'January 2026',
                'title' => 'New Telemetry Diagnostics Platform Launched',
                'excerpt' => 'A new remote monitoring platform enables 7A Global technicians to review machine operating data in real time.',
            ],
            [
                'type' => 'video',
                'typeLabel' => 'Video',
                'date' => 'December 2025',
                'title' => 'Inside the 7A Global Manufacturing Facility',
                'excerpt' => 'A behind-the-scenes look at how our flatwork ironers are designed, assembled, and quality-tested.',
            ],
            [
                'type' => 'news',
                'typeLabel' => 'News',
                'date' => 'November 2025',
                'title' => 'Hospital Laundry Project Commissioned in NCR',
                'excerpt' => 'A 280 kg/hour central linen facility featuring G line cylinder ironers is now fully operational.',
            ],
            [
                'type' => 'press',
                'typeLabel' => 'Press Release',
                'date' => 'October 2025',
                'title' => 'Commitment to Energy-Efficient Laundry Systems',
                'excerpt' => 'Our latest thermal innovations reduce radiant heat loss and cut operating costs for high-volume clients.',
            ],
        ];
    }

    /**
     * @return array<int, array<string, string>>
     */
    public function filteredMedia(): array
    {
        $items = $this->mediaItems();

        if ($this->type === 'all') {
            return $items;
        }

        return array_values(array_filter($items, fn (array $item): bool => $item['type'] === $this->type));
    }

    public function setType(string $type): void
    {
        if (in_array($type, ['all', 'news', 'event', 'press', 'video'])) {
            $this->type = $type;
        }
    }
};
