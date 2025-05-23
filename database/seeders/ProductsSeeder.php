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

        foreach ($products as $product) {

            $newProduct = new Product();

            $newProduct->id_food = $product[0];
            $newProduct->id_beverage = $product[1];

            $newProduct->save();
        }
    }
}
