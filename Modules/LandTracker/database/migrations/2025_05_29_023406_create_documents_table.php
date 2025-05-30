<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parcel_id')->constrained('parcels')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('agent_id')->nullable()->constrained('real_estate_agents')->onDelete('set null');
            $table->string('type'); // e.g., 'sale', 'lease', 'title deed'
            $table->string('title'); // e.g., 'Sale Agreement', 'Lease Agreement'
            $table->string('file_url'); // URL to the document file
            $table->timestamp('signed_at')->nullable(); // Timestamp when the document was signed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
