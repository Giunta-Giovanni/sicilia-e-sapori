<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // connessione one to many con category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // connessione one to one con food
    public function food()
    {
        return $this->hasOne(Food::class);
    }

    // connessione one to one con beverage
    public function beverage()
    {
        return $this->hasOne(Beverage::class);
    }


    // connessione many to many con allergen
    public function allergens()
    {
        return $this->belongsToMany(Allergen::class);
    }
}
