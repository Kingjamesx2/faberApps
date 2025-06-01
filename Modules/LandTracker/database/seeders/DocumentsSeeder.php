<?php

namespace Modules\LandTracker\Database\Seeders;
use Modules\LandTracker\Models\documents;
use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        documents::create([
            "parcel_id" => 1,
            "user_id" => 1,
            "agent_id" => 1,
            "type" => "title_deed",
            "file_url" => "https://example.com/documents/title_deed_1.pdf",
            "signed_at" => now(),
            "created_at" => now(),
        ]);

        documents::create([
            "parcel_id" => 2,
            "user_id" => 2,
            "agent_id" => 1,
            "type" => "sale_agreement",
            "file_url" => "https://example.com/documents/sale_agreement_2.pdf",
            "signed_at" => now(),
            "created_at" => now(),
        ]);
    }
}
