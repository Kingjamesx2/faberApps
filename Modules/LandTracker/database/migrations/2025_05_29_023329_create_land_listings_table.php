<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('land_listings', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the land listing
            $table->string('location'); // Location of the land listing
            $table->foreignId('parcel_id')->constrained('parcels')->onDelete('cascade'); // Foreign key to parcels table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land_listings');
    }
};
