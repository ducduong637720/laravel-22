<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    const STATUS_DRAFT = 0;
    const STATUS_PUBLIC = 1;
    const STATUS_DONE = 2;

    protected $statusArr = [
        self::STATUS_DRAFT => 'Bản nháp',
        self::STATUS_PUBLIC => 'Công khai',
        self::STATUS_DONE => 'Hoàn thiện'
    ];
    protected $statusColor = [
        self::STATUS_DRAFT => 'danger',
        self::STATUS_PUBLIC => 'warning',
        self::STATUS_DONE => 'success'
    ];
    public function getStatusTextAttribute()
    {
        return '<span class="badge badge-'
            . $this->statusColor[$this->status] . '">'
            . $this->statusArr[$this->status] . '<span>';
    }
    public function getSalePriceFormatAttribute()
    {
        return  number_format($this->sale_price, 0, '', ',') . ' đ ';
    }
    public function getOrginPriceFormatAttribute()
    {
        return  number_format($this->orgin_price, 0, '', ',') . ' đ ';
    }
    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }
    public function getInfoUrlFullAttribute()
    {
        if (!empty($this->info)) {
            if (Storage::disk($this->disk)->url($this->info)) {
                return Storage::disk($this->disk)->url($this->info);
            } else {
                return Storage::disk('public')->url('default.png');
            }
        } else {
            return Storage::disk('public')->url('default.png');
        }
        return Storage::disk($this->disk)->url($this->info);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category()
    {
        return $this->belongsToMany(Category::class,'category_id');
    }
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userUpdate()
    {
        return $this->belongsTo(User::class, 'user_updated_id');
    }
}
