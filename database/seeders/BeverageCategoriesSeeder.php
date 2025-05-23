<?php

namespace Database\Seeders;

use App\Models\BeverageCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeverageCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beverage_categories = ['cocktail', 'birre', 'vini rossi', 'vini bianchi', 'soft drinks'];

        foreach ($beverage_categories as $category) {

            // creiamo l'istanza
            $newBeverageCategory = new BeverageCategory();

            $newBeverageCategory->name = $category;

            // salviamo l'istanza  
            $newBeverageCategory->save();
        }
    }
}
