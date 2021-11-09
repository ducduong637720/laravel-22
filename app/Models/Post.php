<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class Post extends Model
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

    public function getImageUrlFullAttribute()
    {
        if (!empty($this->img_url)) {
            if (Storage::disk($this->disk)->url($this->img_url)) {
                return Storage::disk($this->disk)->url($this->img_url);
            } else {
                return Storage::disk('public')->url('default.png');
            }
        } else {
            return Storage::disk('public')->url('default.png');
        }
        return Storage::disk($this->disk)->url($this->img_url);
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userUpdate()
    {
        return $this->belongsTo(User::class, 'user_updated_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
