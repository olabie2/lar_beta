<?php

use App\Models\CompanyEvent;
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
        Schema::create('event_register_applications', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('full_name');
            $table->string('phone_number')->nullable();
            $table->foreignIdFor(CompanyEvent::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_register_applications');
    }
};
