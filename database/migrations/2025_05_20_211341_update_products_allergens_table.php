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
        Schema::table('products_allergens', function (Blueprint $table) {
            // Foreign key
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('allergen_id')->references('id')->on('allergens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products_allergens', function (Blueprint $table) {
            // prima rimuovi le foreign key
            $table->dropForeign(['product_id']);
            $table->dropForeign(['allergen_id']);
        });
    }
};
