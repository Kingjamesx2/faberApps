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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('parcel_no')->unique(); // Unique identifier for the parcel
            $table->foreignId('real_estate_agent_id')->constrained('real_estate_agents')->onDelete('cascade'); // Foreign key to real estate agents table
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key to users table            
            $table->decimal('total_price', 15, 2); // Total price of the parcel
            $table->decimal('paid_amount', 15, 2)->default(0); // Amount paid towards the parcel
            $table->decimal('size', 10, 2); // Size of the parcel in appropriate units (e.g., acres, square feet)
            $table->date('purchase_date'); // Date of purchase
            $table->enum('status', ['available', 'sold', 'pending'])->default('available'); // Status of the parcel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};
