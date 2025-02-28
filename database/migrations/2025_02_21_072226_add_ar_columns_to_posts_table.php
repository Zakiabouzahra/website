<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArColumnsToPostsTable extends Migration
{
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title_ar')->nullable(); // Arabic Title
            $table->string('short_description_ar')->nullable(); // Arabic Short Description
            $table->text('content_ar')->nullable(); // Arabic Content
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['title_ar', 'short_description_ar', 'content_ar']);
        });
    }
}
