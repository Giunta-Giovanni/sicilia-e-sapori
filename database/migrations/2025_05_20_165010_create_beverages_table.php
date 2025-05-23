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
        Schema::create('beverages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_beverage_category'); //id categoria bevande

            // uguali alla tabella foods
            $table->string('name_it', 50); //nome it
            $table->string('name_eng', 50)->nullable(); //nome eng
            $table->text('description_it')->nullable(); //descrizione
            $table->text('description_eng')->nullable(); //descrizione
            $table->decimal('primary_price', 4, 2); //prezzo primario
            $table->decimal('secondary_price', 4, 2)->nullable(); //prezzo secondario

            // diversi alla tabella foods
            $table->boolean('is_alcholic')->default(false); //è alcolico?
            $table->decimal('alcohol_volume', 4, 1)->nullable(); //percentuale alcolica
            $table->decimal('primary_size', 4, 0); //dimensioni primarie
            $table->decimal('secondary_size', 4, 0)->nullable(); //dimensioni primarie

            // $table->unsignedBigInteger('id_product'); //id prodotto

            $table->timestamps();

            // foreign key

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beverages');
    }
};
