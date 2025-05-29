<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
    protected $table = 'beverages';

    //connessione one to one con product
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
