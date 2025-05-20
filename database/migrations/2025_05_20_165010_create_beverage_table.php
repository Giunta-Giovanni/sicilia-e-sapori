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
        Schema::create('beverage', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_beverage_category'); //id categoria bevande
            $table->integer('id_product'); //id prodotto
            $table->boolean('is_alcholic')->default(false); //è alcolico?
            $table->decimal('alcohol_Percentage', 4, 1)->nullable(); //percentuale alcolica
            $table->decimal('primary_volume', 3, 0); //dimensioni primarie
            $table->decimal('secondary_volume', 3, 0)->nullable(); //dimensioni primarie
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
        Schema::dropIfExists('beverage');
    }
};
