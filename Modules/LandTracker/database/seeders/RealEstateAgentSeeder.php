<?php

namespace Modules\LandTracker\Database\Seeders;
use Modules\LandTracker\Models\realEstateAgent;
use Illuminate\Database\Seeder;

class RealEstateAgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        realEstateAgent::create([
            "name" => "John Doe",
            "phone number" => "1234567890",
            "license_number" => "1234567890",
            "agency_name" => "Doe Realty",
            "agency_address" => "123 Main St, Springfield",
            "agency_phone" => "0987654321",
            "agency_email" => "agency@doe.com",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        realEstateAgent::create([
            "name" => "Jane Smith",
            "phone number" => "0987654321",
            "license_number" => "0987654321",
            "agency_name" => "Smith Realty",
            "agency_address" => "456 Elm St, Springfield",
            "agency_phone" => "1234567890",
            "agency_email" => "agency@smith.com",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
