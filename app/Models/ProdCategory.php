<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProdCategory extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMany(Product::class);
    }
    
}
