<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    //connessione on to many con product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
