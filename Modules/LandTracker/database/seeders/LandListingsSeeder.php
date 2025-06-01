<?php

namespace Modules\LandTracker\Database\Seeders;
use Modules\LandTracker\Models\LandListings;
use Illuminate\Database\Seeder;

class LandListingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LandListings::create([
            "name" => "Green Acres",
            "location" => "123 Green St, Springfield",
            "parcel_id" => 1,
        ]);

        LandListings::create([
            "name" => "Sunny Meadows",
            "location" => "456 Sunny Ave, Springfield",
            "parcel_id" => 2,
        ]);
    }
}
