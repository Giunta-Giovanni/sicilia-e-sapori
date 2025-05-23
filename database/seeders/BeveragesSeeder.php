<?php

namespace Database\Seeders;

use App\Models\Beverage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeveragesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beverages = [
            [
                'id_beverage_category' => 5,
                'name_it' => 'Coca-Cola',
                'name_eng' => 'Coca-Cola',
                'description_it' => 'Bibita gassata classica da 33cl',
                'description_eng' => 'Classic fizzy drink 33cl',
                'primary_price' => 2.00,
                'secondary_price' => 1.50,
                'is_alcholic' => 0,
                'alcohol_volume' => 0,
                'primary_size' => 330,
                'secondary_size' => 660,
            ],

            [
                'id_beverage_category' => 5,
                'name_it' => 'Acqua Naturale',
                'name_eng' => 'Still Water',
                'description_it' => 'Bottiglia di acqua naturale 50cl',
                'description_eng' => 'Still water bottle 50cl',
                'primary_price' => 1.00,
                'secondary_price' => 0.80,
                'is_alcholic' => 0,
                'alcohol_volume' => 0,
                'primary_size' => 500,
                'secondary_size' => 1000,
            ],
            [
                'id_beverage_category' => 5,
                'name_it' => 'Acqua Frizzante',
                'name_eng' => 'Sparkling Water',
                'description_it' => 'Bottiglia di acqua frizzante 50cl',
                'description_eng' => 'Sparkling water bottle 50cl',
                'primary_price' => 1.00,
                'secondary_price' => 0.80,
                'is_alcholic' => 0,
                'alcohol_volume' => 0,
                'primary_size' => 500,
                'secondary_size' => 1000,
            ]
        ];

        // creiamo un istanza bevande

        foreach ($beverages as $beverage) {
            $newBeverage = new Beverage();

            $newBeverage->id_beverage_category = $beverage['id_beverage_category'];
            $newBeverage->name_it = $beverage['name_it'];
            $newBeverage->name_eng = $beverage['name_eng'];
            $newBeverage->description_it = $beverage['description_it'];
            $newBeverage->description_eng = $beverage['description_eng'];
            $newBeverage->primary_price = $beverage['primary_price'];
            $newBeverage->secondary_price = $beverage['secondary_price'];
            $newBeverage->is_alcholic = $beverage['is_alcholic'];
            $newBeverage->alcohol_volume = $beverage['alcohol_volume'];
            $newBeverage->primary_size = $beverage['primary_size'];
            $newBeverage->secondary_size = $beverage['secondary_size'];

            $newBeverage->save();
        }

        // salviamo l'istanza bevande
    }
}
