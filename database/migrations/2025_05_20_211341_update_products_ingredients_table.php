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
        Schema::table('products_ingredients', function (Blueprint $table) {
            // Foreign key
            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_ingredient')->references('id')->on('ingredients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products_ingredients', function (Blueprint $table) {
            // prima rimuovi le foreign key
            $table->dropForeign(['id_product']);
            $table->dropForeign(['id_ingredient']);
        });
    }
};
