<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = config('data.foods');

        foreach ($foods as $foodsections) {
            foreach ($foodsections as $food) {
                // controllo per vedere se l'istanza è gia stata inserita
                $newFood = Food::firstOrNew([
                    'name_it' => $food['name_it'],
                    'id_food_category' => $food['id_food_category'],
                ]);

                $newFood->name_eng = $food['name_eng'];
                $newFood->description_it = $food['description_it'];
                $newFood->description_eng = $food['description_eng'];
                $newFood->primary_price = $food['primary_price'] === null ? 0 : $food['primary_price'];
                $newFood->secondary_price = $food['secondary_price'];
                $newFood->is_spicy = $food['is_spicy'];
                $newFood->is_vegetarian = $food['is_vegetarian'];

                $newFood->save();
            }
        }
    }
}
