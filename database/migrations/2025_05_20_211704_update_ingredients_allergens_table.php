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
        Schema::table('ingredients_allergens', function (Blueprint $table) {
            // Add Foreign key
            $table->foreign('id_ingredient')->references('id')->on('ingredients');
            $table->foreign('id_allergen')->references('id')->on('allergens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ingredients_allergens', function (Blueprint $table) {
            // rimuovi le foreign key
            $table->dropForeign(['id_ingredient']);
            $table->dropForeign(['id_allergen']);
        });
    }
};
