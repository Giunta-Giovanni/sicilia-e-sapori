<?php

namespace Database\Seeders;

use App\Models\FoodCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodCategoriesSeeder extends Seeder
{


    public function run(): void
    {
        // array di categorie di cibo
        $foodCategories = config('data.food_categories');

        // creiamo un ciclo per ogni categoria
        foreach ($foodCategories as $category) {

            // creiamo l'istanza Food
            $newFood = new FoodCategory();

            $newFood->name = $category;

            // salviamo l'istanza
            $newFood->save();
        }
    }
}
