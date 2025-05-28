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
                    'food_id' => $food['food_id'],
                ]);

                $newFood->is_spicy = $food['is_spicy'];
                $newFood->is_vegetarian = $food['is_vegetarian'];

                $newFood->save();
            }
        }
    }
}
