<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;
    public function products(){
        return $this->belongsTo(Product::class,'product_id');
    }
    public function getImageUrlFullAttribute(){
        if (!empty($this->path)) {
            if (Storage::disk('product')->exists($this->path)) {
                return Storage::disk('product')->url($this->path);
            } else {
                return Storage::disk('product')->url('default.jpg');
            }
        } else {
            return Storage::disk('product')->url('default.jpg');
        }
    }

    public function getProductImageAttribute(){
        return Image::where('product_id', $this->product_id)->get();
        
    }
}
