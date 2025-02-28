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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title_en'); // Title in English
            $table->string('title_ar'); // Title in Arabic
            $table->decimal('price', 10, 2); // Price
            $table->string('item1')->nullable(); // Item 1
            $table->string('item1_ar')->nullable(); // Item 1 in Arabic
            $table->string('item2')->nullable(); // Item 2
            $table->string('item2_ar')->nullable(); // Item 2 in Arabic
            $table->string('item3')->nullable(); // Item 3
            $table->string('item3_ar')->nullable(); // Item 3 in Arabic
            $table->string('item4')->nullable(); // Item 4
            $table->string('item4_ar')->nullable(); // Item 4 in Arabic
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
