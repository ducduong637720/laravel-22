<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    
    public function setNameAttribute($name){
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function category(){
        return $this->belongsTo(ProdCategories::class, 'category_id');
    }
    public function reviews (){
        return $this->hasMany(Review::class, 'product_id');
    }
    public function comments (){
        return $this->hasMany(Comment::class, 'product_id');
    }

    public function orders() {
        return $this->belongsToMany(Order::class,'order_product');
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
