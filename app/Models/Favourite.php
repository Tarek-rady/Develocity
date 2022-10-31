<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    protected $guarded = [];

    // function get user
    public function customer()
    {
       return $this->belongsTo(Customer::class , 'customer_id');
    }

    // function get product
    public function product()
    {
        return $this->belongsTo(Product::class , 'product_id');
    }
}
