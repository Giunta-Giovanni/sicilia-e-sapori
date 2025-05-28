<?php

namespace Database\Seeders;

use App\Models\Beverage;
use Illuminate\Database\Seeder;

class BeveragesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $beverages = config('data.beverages');

        foreach ($beverages as $beverageSections) {
            foreach ($beverageSections as $beverage) {

                // controllo per vedere se l'istanza è gia stata inserita
                $newBeverage = Beverage::firstOrNew([
                    'product_id' => $beverage['product_id'],
                ]);

                // aggiorniamo o impostiamo gli altri campi
                $newBeverage->is_alcholic = $beverage['is_alcholic'];
                $newBeverage->alcohol_volume = $beverage['alcohol_volume'];
                $newBeverage->primary_size = $beverage['primary_size'];
                $newBeverage->secondary_size = $beverage['secondary_size'];

                // salviamo l'istanza (nuova o aggiornata)
                $newBeverage->save();
            }
        }
    }
}
