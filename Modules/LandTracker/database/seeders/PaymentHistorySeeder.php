<?php

namespace Modules\LandTracker\Database\Seeders;
use Modules\LandTracker\Models\paymentHistory;
use Illuminate\Database\Seeder;

class PaymentHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         paymentHistory::create([
            "parcel_id" => 1,
            "amount" => 10000,
            "payment_date" => "2023-01-01",
            "payment_method" => "cash",
        ]);

        paymentHistory::create([
            "parcel_id" => 2,
            "amount" => 20000,
            "payment_date" => "2023-02-01",
            "payment_method" => "bank_transfer",
        ]);
    }
}
