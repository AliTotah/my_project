<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking; // استيراد موديل الحجز
use App\Models\User; // استيراد موديل المستخدم
use App\Models\Event; // استيراد موديل الفعالية

class BookingsTableSeeder extends Seeder
{
    public function run()
    {
        // إضافة حجوزات افتراضية
        Booking::create([
            'user_id' => User::where('email', 'admin@example.com')->first()->id,
            'event_id' => Event::where('title', 'Event 1')->first()->id,
            'num_tickets' => 2,
            'total_price' => 100.00,
            'status' => 'confirmed',
        ]);

        Booking::create([
            'user_id' => User::where('email', 'user@example.com')->first()->id,
            'event_id' => Event::where('title', 'Event 2')->first()->id,
            'num_tickets' => 3,
            'total_price' => 225.00,
            'status' => 'pending',
        ]);
    }
}
