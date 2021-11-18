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
    public function getInfoFullAttribute(){
        if (!empty($this->path)) {
            if (Storage::disk('products')->exists($this->info)) {
                return Storage::disk('products')->url($this->info);
            } else {
                return Storage::disk('products')->url('default.png');
            }
        } else {
            return Storage::disk('products')->url('default.png');
        }
    }
}
