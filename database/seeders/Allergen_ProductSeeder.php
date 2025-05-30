<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Allergen_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        // file data di tabella pivot
        $allergensProducts = config('data.allergen_product');

        // per ogni dato 
        foreach ($allergensProducts as $item) {
            // troviamo il prodotto associato 
            $product = Product::find($item['product_id']);
            // se il prodotto esiste
            if ($product) {
                // colleghiamo l'allergene
                $product->allergens()->attach($item['allergen_id']);
            }
        }
    }
}
