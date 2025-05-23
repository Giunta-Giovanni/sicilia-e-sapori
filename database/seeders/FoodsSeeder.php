<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            [
                'id_food_category' => 4,
                'name_it' => 'Margherita',
                'name_eng' => 'Margherita',
                'description_it' => 'Pomodoro, mozzarella e basilico fresco',
                'description_eng' => 'Tomato, mozzarella and fresh basil',
                'primary_price' => 5.50,
                'secondary_price' => null,
                'is_spicy' => 0,
                'is_vegetarian' => 0
            ],
            [
                'id_food_category' => 4,
                'name_it' => 'Diavola',
                'name_eng' => 'Spicy Salami',
                'description_it' => 'Pomodoro, mozzarella, salame piccante',
                'description_eng' => 'Tomato, mozzarella, spicy salami',
                'primary_price' => 7.00,
                'secondary_price' => null,
                'is_spicy' => 1,
                'is_vegetarian' => 0
            ],
            [
                'id_food_category' => 4,
                'name_it' => 'Capricciosa',
                'name_eng' => 'Capricciosa',
                'description_it' => 'Pomodoro, mozzarella, prosciutto, funghi, carciofi, olive',
                'description_eng' => 'Tomato, mozzarella, ham, mushrooms, artichokes, olives',
                'primary_price' => 8.00,
                'secondary_price' => null,
                'is_spicy' => 0,
                'is_vegetarian' => 0
            ],
        ];

        // creiamo un ciclo per ogni cibo che abbiamo
        foreach ($foods as $food) {
            // creiamo l'istanza Food
            $newFood = new Food();

            $newFood->id_food_category = $food['id_food_category'];
            $newFood->name_it = $food['name_it'];
            $newFood->name_eng = $food['name_eng'];
            $newFood->description_it = $food['description_it'];
            $newFood->description_eng = $food['description_eng'];
            $newFood->primary_price = $food['primary_price'];
            $newFood->secondary_price = $food['secondary_price'];
            $newFood->is_spicy = $food['is_spicy'];
            $newFood->is_vegetarian = $food['is_vegetarian'];

            // salviamo l'istanza
            $newFood->save();
        }
    }
}
