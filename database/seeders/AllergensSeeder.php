<?php

namespace Database\Seeders;

use App\Models\Allergen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class AllergensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergens = [
            "Cereali contenenti glutine",
            "Crostacei",
            "Uova",
            "Pesce",
            "Arachidi",
            "Soia",
            "Latte",
            "Frutta a guscio",
            "Sedano",
            "Senape",
            "Semi di sesamo",
            "Anidride solforosa e solfiti",
            "Lupini",
            "Molluschi"
        ];

        foreach ($allergens as $allergen) {
            $newAllergen = new Allergen();

            $newAllergen->name = $allergen;

            $newAllergen->save();
        }
    }
}
