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
        Schema::table('beverages', function (Blueprint $table) {
            // Aggiungiamo le foreign
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beverages', function (Blueprint $table) {
            // rimuoviamo le foreign key
            $table->dropForeign(['product_id']);
        });
    }
};
