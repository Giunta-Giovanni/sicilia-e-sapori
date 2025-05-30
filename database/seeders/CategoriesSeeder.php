<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = config('data.categories');
        foreach ($categories as $category) {

            // creiamo l'istanza
            $newCategory = new Category();

            $newCategory->name = $category;

            // salviamo l'istanza  
            $newCategory->save();
        }
    }
}
