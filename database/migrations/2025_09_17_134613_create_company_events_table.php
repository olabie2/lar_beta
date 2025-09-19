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
        Schema::create('company_events', function (Blueprint $table) {
            $table->id();
            $table->string('title');               // Event title
            $table->text('description')->nullable(); // Event description
            $table->string('location')->nullable(); // Location of the event
            $table->dateTime('start_time');        // Start date & time
            $table->dateTime('end_time');          // End date & time
            $table->string('banner_image')->nullable(); // Optional image/banner
            $table->unsignedBigInteger('organizer_id'); // Who hosts it
            $table->integer('capacity')->nullable();    // Max attendees
            $table->string('price')->default('Free'); // Price if paid
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_events');
    }
};
