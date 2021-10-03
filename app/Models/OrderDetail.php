<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
        'price',
        'amount',
    ];

    function Order() {
        return $this->belongsTo(Order::class);
    }

    function Product() {
        return $this->hasOne(Product::class);
    }
}
