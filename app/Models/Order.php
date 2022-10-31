<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    // function get user
    public function customer()
    {
        return $this->belongsTo(Customer::class , 'customer_id');
    }

    // function get user
    public function user()
    {
        return $this->belongsTo(Customer::class , 'customer_id');
    }

    // function get country
    public function country()
    {
       return $this->belongsTo(Country::class , 'country_id');
    }

    // function get city
    public function city()
    {
        return $this->belongsTo(City::class , 'city_id');
    }

    // function get items
    public function items()
    {
        return $this->hasMany(Item::class , 'order_id');
    }
}
