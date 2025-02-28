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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_en'); // Title in English
            $table->string('title_ar'); // Title in Arabic
            $table->string('short_description_en'); // Short Description in English
            $table->string('short_description_ar'); // Short Description in Arabic
            $table->text('content_en'); // Content in English
            $table->text('content_ar'); // Content in Arabic
            $table->string('image')->nullable(); // Image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
