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
        Schema::table('products', function (Blueprint $table) {
            // Aggiungiamo le foreign
            $table->foreign('id_food')->references('id')->on('foods');
            $table->foreign('id_beverage')->references('id')->on('beverages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // rimuoviamo le foreign key
            $table->dropForeign(['id_food']);
            $table->dropForeign(['id_beverage']);
        });
    }
};
