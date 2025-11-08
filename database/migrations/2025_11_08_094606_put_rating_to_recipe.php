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
        Schema::rename('posts', 'recipes');
        Schema::table('recipes', function (Blueprint $table) {
            // $table->addColumn('rating', 'double', )
            $table->decimal('rating', 3, 1)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('recipes', 'posts');
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('rating');
        });
    }
};
