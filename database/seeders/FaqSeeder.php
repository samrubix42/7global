<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is the heating technology utilized in 7A Global flatwork ironers?',
                'answer' => 'Our flatwork ironers are available in Steam-Heated, Gas-Heated, Thermal Oil, and Electric-Heated configurations. Each system features calibrated temperature regulation and ultra-efficient heat transfer across the entire roller surface.',
                'is_active' => true,
            ],
            [
                'question' => 'What roll diameter and working width options are available?',
                'answer' => 'We offer cylinder diameters from 500mm up to 1200mm, with usable roller widths ranging from 1800mm to 3300mm to accommodate king-size hotel bed linens and high-capacity hospital textiles.',
                'is_active' => true,
            ],
            [
                'question' => 'How does the automated speed control system optimize linen finish quality?',
                'answer' => 'The integrated PLC dynamic inverter drive automatically adjusts line feed speed between 2 to 18 meters per minute depending on linen moisture content and target ironing dryness.',
                'is_active' => true,
            ],
            [
                'question' => 'What safety systems are incorporated in the industrial ironers?',
                'answer' => 'Every machine includes full-width finger-guard safety bars with instant microswitch shutoff, thermal overload breakers, emergency stop palm buttons, and redundant steam/gas solenoid valves.',
                'is_active' => true,
            ],
            [
                'question' => 'What warranty and preventative maintenance support do you offer?',
                'answer' => 'All 7A Global commercial machinery includes a standard 24-month comprehensive mechanical warranty alongside 24/7 technical hotline assistance and scheduled preventative maintenance spare part kits.',
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::firstOrCreate(
                ['question' => $faq['question']],
                $faq
            );
        }
    }
}
