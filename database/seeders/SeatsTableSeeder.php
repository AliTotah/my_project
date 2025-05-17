<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seat;
use App\Models\Event;

class SeatsTableSeeder extends Seeder
{
    public function run()
    {
        $event1 = Event::where('title', 'Event 1')->first();
        $event2 = Event::where('title', 'Event 2')->first();

        if ($event1) {
            for ($i = 1; $i <= 10; $i++) {
                Seat::create([
                    'event_id' => $event1->id,
                    'seat_number' => "A$i",
                    'status' => 'available',
                ]);
            }
        }

        if ($event2) {
            for ($i = 1; $i <= 10; $i++) {
                Seat::create([
                    'event_id' => $event2->id,
                    'seat_number' => "B$i",
                    'status' => 'available',
                ]);
            }
        }
    }
}
