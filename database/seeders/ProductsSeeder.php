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
            [
                'name_it' => 'Margherita',
                'name_eng' => 'Margherita',
                'description_it' => 'Pomodoro, mozzarella e basilico fresco',
                'description_eng' => 'Tomato, mozzarella and fresh basil',
                'primary_price' => 5.50,
                'secondary_price' => null,
            ],
            [
                'name_it' => 'Diavola',
                'name_eng' => 'Spicy Salami',
                'description_it' => 'Pomodoro, mozzarella, salame piccante',
                'description_eng' => 'Tomato, mozzarella, spicy salami',
                'primary_price' => 7.00,
                'secondary_price' => null,
            ],
            [
                'name_it' => 'Capricciosa',
                'name_eng' => 'Capricciosa',
                'description_it' => 'Pomodoro, mozzarella, prosciutto, funghi, carciofi, olive',
                'description_eng' => 'Tomato, mozzarella, ham, mushrooms, artichokes, olives',
                'primary_price' => 8.00,
                'secondary_price' => null,
            ],
            [
                'name_it' => 'Coca-Cola',
                'name_eng' => 'Coca-Cola',
                'description_it' => 'Bibita gassata classica da 33cl',
                'description_eng' => 'Classic fizzy drink 33cl',
                'primary_price' => 2.00,
                'secondary_price' => 1.50,
            ],
            [
                'name_it' => 'Acqua Naturale',
                'name_eng' => 'Still Water',
                'description_it' => 'Bottiglia di acqua naturale 50cl',
                'description_eng' => 'Still water bottle 50cl',
                'primary_price' => 1.00,
                'secondary_price' => 0.80,
            ],
            [
                'name_it' => 'Acqua Frizzante',
                'name_eng' => 'Sparkling Water',
                'description_it' => 'Bottiglia di acqua frizzante 50cl',
                'description_eng' => 'Sparkling water bottle 50cl',
                'primary_price' => 1.00,
                'secondary_price' => 0.80,
            ]
        ];

        foreach ($products as $product) {

            $newProduct = new Product();

            $newProduct->name_it = $product['name_it'];
            $newProduct->name_eng = $product['name_eng'];
            $newProduct->description_it = $product['description_it'];
            $newProduct->description_eng = $product['description_eng'];
            $newProduct->primary_price = $product['primary_price'];
            $newProduct->secondary_price = $product['secondary_price'];

            $newProduct->save();
        }
    }
}
