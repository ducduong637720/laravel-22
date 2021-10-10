<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    const STATUS_Online = 0;
    const STATUS_Offline = 1;

    protected $statusArr = [
        self::STATUS_Online => 'Hoạt động',
        self::STATUS_Offline => 'Ngoại tuyến',
    ];
    protected $statusColor = [
        self::STATUS_Online => 'success',
        self::STATUS_Offline => 'primary',
    ];

    public function getStatusTextAttribute()
    {
        return '<span class="badge badge-' 
        . $this->statusColor[$this->status] . '">' 
        . $this->statusArr[$this->status] . '<span>';
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFirstNameAttribute(){
        return ucfirst($this->name);
    }
    
    public function userInfo(){
        return $this->hasOne(UserInfo::class);
    }

    public function posts(){
        return $this->hasMany(Post::class, '');
    }
}
