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
        Schema::table('foods', function (Blueprint $table) {
            // foreign key
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_food_categories')->references('id')->on('food_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foods', function (Blueprint $table) {
            // prima rimuovi le foreign key
            $table->dropForeign(['id_food_categories']);
            $table->dropForeign(['id_product']);
        });
    }
};
