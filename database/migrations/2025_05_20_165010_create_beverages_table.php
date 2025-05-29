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

            // prodotto
            $table->foreignId('product_id')->constrained();

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
