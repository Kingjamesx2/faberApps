<?php

namespace Modules\LandTracker\Database\Seeders;
use Modules\LandTracker\Models\Parcel;

use Illuminate\Database\Seeder;

class ParcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parcel::create([
            "parcel_no" => "P-0001",
            "real_estate_agent_id" => 1,
            "user_id" => 1,
            "total_price" => 10000,
            "paid_amount" => 5000,
            "size" => 1000,
            "purchase_date" => "2023-01-01",
            "status" => "available",
        ]);

        Parcel::create([
            "parcel_no" => "P-0002",
            "real_estate_agent_id" => 1,
            "user_id" => 2,
            "total_price" => 20000,
            "paid_amount" => 15000,
            "size" => 2000,
            "purchase_date" => "2023-02-01",
            "status" => "sold",
        ]);


    }
}
