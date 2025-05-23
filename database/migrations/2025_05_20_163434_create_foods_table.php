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

            $table->unsignedBigInteger('id_food_category');

            // uguali alla tabella beverages
            $table->string('name_it', 50); //nome it
            $table->string('name_eng', 50)->nullable(); //nome eng
            $table->text('description_it')->nullable(); //descrizione
            $table->text('description_eng')->nullable(); //descrizione
            $table->decimal('primary_price', 4, 2); //prezzo primario
            $table->decimal('secondary_price', 4, 2)->nullable(); //prezzo secondario

            // diversi alla tabella beverages
            $table->boolean('is_spicy')->default(false);
            $table->boolean('is_vegetarian')->default(false);

            // $table->unsignedBigInteger('id_product');
            $table->timestamps();
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
