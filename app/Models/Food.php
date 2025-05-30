<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    //connessione one to one con product
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
