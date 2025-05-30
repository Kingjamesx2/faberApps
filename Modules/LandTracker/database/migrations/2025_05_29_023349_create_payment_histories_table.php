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
        Schema::create('payment_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parcel_id')->constrained('parcels')->onDelete('cascade');
            $table->date('payment_date'); // Date of the payment
            $table->decimal('amount', 10, 2); // Amount paid
            $table->string('payment_method'); // e.g., 'credit_card', 'bank_transfer', 'cash'
            $table->string('transaction_id')->nullable(); // Transaction ID for tracking
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_histories');
    }
};
