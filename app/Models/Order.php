<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    
    protected $fillable = [
        'money_total',
        'payment_methods',
        'user_info',
        'status',
    ];
 
    const STATUS_DRAFT = 0;
    const STATUS_PUBLIC = 1;
    const STATUS_DONE = 2;

    protected $statusArr = [
        self::STATUS_DRAFT => 'Đang xử lý',
        self::STATUS_PUBLIC =>'Đang vận chuyển',
        self::STATUS_DONE => 'Đã giao hàng'
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

    // public function user_info(){
    //     return $this->belongsTo(UserInfo::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function order_products(){
        return $this->belongsToMany(OrderProduct::class);
    }

    
}
