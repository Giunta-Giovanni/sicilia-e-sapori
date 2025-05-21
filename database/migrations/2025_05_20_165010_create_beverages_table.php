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
            $table->unsignedBigInteger('id_product'); //id prodotto
            $table->boolean('is_alcholic')->default(false); //è alcolico?
            $table->decimal('alcohol_volume', 4, 1)->nullable(); //percentuale alcolica
            $table->decimal('primary_size', 3, 0); //dimensioni primarie
            $table->decimal('secondary_size', 3, 0)->nullable(); //dimensioni primarie
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
