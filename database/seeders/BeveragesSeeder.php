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
        $beverages = config('data.beverages');

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
