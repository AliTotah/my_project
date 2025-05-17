<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\Booking;

class PaymentsTableSeeder extends Seeder
{
    public function run()
    {
        $booking1 = Booking::where('status', 'confirmed')->first();
        $booking2 = Booking::where('status', 'pending')->first();

        if ($booking1) {
            Payment::create([
                'booking_id' => $booking1->id,
                'payment_method' => 'credit_card',
                'transaction_id' => 'txn123456',
                'payment_date' => now(),
                'amount' => 100.00,
                'status' => 'completed',
            ]);
        }

        if ($booking2) {
            Payment::create([
                'booking_id' => $booking2->id,
                'payment_method' => 'paypal',
                'transaction_id' => 'txn789012',
                'payment_date' => now(),
                'amount' => 225.00,
                'status' => 'pending',
            ]);
        }
    }
}
