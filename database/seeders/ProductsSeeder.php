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
        $products = [
            [1, null],
            [2, null],
            [3, null],
            [null, 1],
            [null, 2],
            [null, 3],

        ];

        foreach ($products as $product) {

            $newProduct = new Product();

            $newProduct->id_food = $product[0];
            $newProduct->id_beverage = $product[1];

            $newProduct->save();
        }
    }
}
