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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_food_categories'); //id categorie cibo
            $table->integer('id_product'); //id prodotto
            $table->boolean('is_spicy')->default(false); //è piccante?
            $table->boolean('is_vegetarian')->default(false); //è vegetariano?
            $table->timestamps();

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
        Schema::dropIfExists('foods');
    }
};
