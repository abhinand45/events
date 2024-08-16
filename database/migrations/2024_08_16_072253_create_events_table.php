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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID (Primary Key)
            $table->string('title'); // Title of the event
            $table->text('description')->nullable(); // Description of the event (nullable)
            $table->date('date'); // Date of the event
            $table->string('location')->nullable(); // Location of the event (nullable)
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
