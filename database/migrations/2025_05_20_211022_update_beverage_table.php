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
        Schema::table('beverage', function (Blueprint $table) {
            // Aggiungiamo le foreign
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_beverage_categories')->references('id')->on('beverage_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beverage', function (Blueprint $table) {
            // rimuoviamo le foreign key
            $table->dropForeign(['id_beverage_categories']);
            $table->dropForeign(['id_product']);
        });
    }
};
