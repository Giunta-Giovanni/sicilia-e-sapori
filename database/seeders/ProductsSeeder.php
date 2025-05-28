<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('data.products');

        foreach ($products as $productSections) {
            foreach ($productSections as $product) {

                $newProduct = Product::firstOrNew([
                    'name_it' => $product['name_it'],
                    'category_id' => $product['category_id'],
                ]);

                // aggiorniamo o impostiamo gli altri campi
                $newProduct->name_eng = $product['name_eng'];
                $newProduct->description_it = $product['description_it'];
                $newProduct->description_eng = $product['description_eng'];
                $newProduct->primary_price = $product['primary_price'] === null ? 0 : $product['primary_price'];;
                $newProduct->secondary_price = $product['secondary_price'];

                $newProduct->save();
            }
        }
    }
}
