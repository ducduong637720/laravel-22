<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    const STATUS_DRAFT = 0;
    const STATUS_PUBLIC = 1;
    const STATUS_DONE = 2;

    protected $statusArr = [
        self::STATUS_DRAFT => 'Draft',
        self::STATUS_PUBLIC => 'Public',
        self::STATUS_DONE => 'Done'
    ];
    protected $statusColor = [
        self::STATUS_DRAFT => 'danger',
        self::STATUS_PUBLIC => 'warning',
        self::STATUS_DONE => 'success'
    ];
    public function getStatusTextAttribute()
    {
        return '<span class="badge badge-' . $this->statusColor[$this->status] . '">' . $this->statusArr[$this->status] . '<span>';
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }
}
