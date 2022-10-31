<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    // function get product
    public function product()
    {
       return $this->belongsTo(Product::class , 'product_id');
    }

    // function get order
    public function order()
    {
        return $this->belongsTo(Order::class , 'order_id');
    }


}
