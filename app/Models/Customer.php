<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [ 'name', 'email', 'password', 'phone' ];


    // function get order user
    public function cart()
    {
        return $this->hasOne(Order::class, 'customer_id')->where('type' , 'order');
    }

    // function get fav user
    public function favourites()
    {
        return $this->hasMany(Favourite::class , 'customer_id');
    }


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
