<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description'); // Brief description for cards
            $table->longText('problem_solved');
            $table->longText('solution');
            $table->json('team_members')->nullable(); // Store team info as JSON
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('image_url')->nullable();
            $table->string('client')->nullable(); // Client name
            $table->string('website')->nullable(); // Project website URL
            $table->json('technologies')->nullable(); // Tech stack as JSON array
            $table->text('testimonial_quote')->nullable(); // Client testimonial
            $table->string('testimonial_author')->nullable(); // Who said it
            $table->json('stats')->nullable(); // Key metrics/stats as JSON
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
