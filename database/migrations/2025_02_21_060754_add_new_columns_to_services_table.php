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
        Schema::table('services', function (Blueprint $table) {
            $table->string('sub_title_ar')->nullable(); // Subtitle in Arabic
            $table->string('sub_title_en')->nullable(); // Subtitle in English
            $table->string('servives_feature1_ar')->nullable(); // Feature 1 in Arabic
            $table->string('servives_feature2_ar')->nullable(); // Feature 2 in Arabic
            $table->string('servives_feature3_ar')->nullable(); // Feature 3 in Arabic
            $table->string('servives_feature1_en')->nullable(); // Feature 1 in English
            $table->string('servives_feature2_en')->nullable(); // Feature 2 in English
            $table->string('servives_feature3_en')->nullable(); // Feature 3 in English
            $table->string('image2')->nullable(); // Additional Image
            $table->string('banner_image')->nullable(); // Banner Image
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'sub_title_ar',
                'sub_title_en',
                'servives_feature1_ar',
                'servives_feature2_ar',
                'servives_feature3_ar',
                'servives_feature1_en',
                'servives_feature2_en',
                'servives_feature3_en',
                'image2',
                'banner_image'
            ]);
        });
    }
};
