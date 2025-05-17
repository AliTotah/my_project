<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        Event::create([
            'title' => 'Event 1',
            'description' => 'This is the description for Event 1.',
            'location' => 'Venue 1',
            'date' => '2025-06-01',
            'time' => '18:00:00',
            'price' => 50.00,
        ]);

        Event::create([
            'title' => 'Event 2',
            'description' => 'This is the description for Event 2.',
            'location' => 'Venue 2',
            'date' => '2025-07-01',
            'time' => '20:00:00',
            'price' => 75.00,
        ]);
    }
}
