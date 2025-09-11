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
        Schema::dropIfExists('gallery_items');
        Schema::dropIfExists('blog_posts');
        Schema::dropIfExists('tours');
        Schema::dropIfExists('destinations');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No action needed for down
    }
};
