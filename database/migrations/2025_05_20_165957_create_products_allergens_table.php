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
        Schema::create('products_allergens', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id'); //id prodotto
            $table->unsignedBigInteger('allergen_id')->nullable(); //id ingrediente

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_allergens');
    }
};
