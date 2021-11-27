<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public function products() {
        return $this->hasMany(Product::class,'product_id');
    }

    public function getImageUrlFullAttribute()
    {
        if (!empty($this->image)) {
            if (Storage::disk($this->disk)->url($this->image)) {
                return Storage::disk($this->disk)->url($this->image);
            } else {
                return Storage::disk('public')->url('default.png');
            }
        } else {
            return Storage::disk('public')->url('default.png');
        }
        return Storage::disk($this->disk)->url($this->image);
    }
}
