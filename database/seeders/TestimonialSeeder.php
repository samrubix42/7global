<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Alexander Wright',
                'designation' => 'Director of Laundry Operations, Grand Continental Hotels',
                'description' => 'The 7A-3200 steam flatwork ironer has transformed our laundry throughput. We process over 1,400 hotel sheets per shift with impeccable mirror finish and zero fabric scorching. Outstanding build quality.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Elena Rostova',
                'designation' => 'Procurement Head, Nordic Clean Linens',
                'description' => 'Energy efficiency was our primary concern when upgrading from our old Italian ironers. The gas heating system in 7A machinery slashed our monthly utility overhead by 28% while increasing production speed.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Dr. Marcus Vance',
                'designation' => 'Hospital Facilities Manager, Apex Medical Center',
                'description' => 'In healthcare hygiene, consistency and sanitation temperature compliance are paramount. 7A Global delivers reliable heat distribution and reliable moisture extraction on every linen batch.',
                'rating' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Jean-Luc Moreau',
                'designation' => 'Executive Housekeeping, Riviera Luxury Resorts',
                'description' => 'Compact footprint yet massive industrial performance. The customer support and installation engineers ensured our resort laundry operation was commissioned without a single hour of downtime.',
                'rating' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::firstOrCreate(
                ['name' => $testimonial['name']],
                $testimonial
            );
        }
    }
}
