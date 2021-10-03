<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'number',
        'subtotal',
        'total',
        'observations',
        'payment_method_id',
        'shipment_method_id'
    ];

    function PaymentMethod() {
        return $this->hasOne(PaymentMethod::class);
    }

    function ShipmentMethod() {
        return $this->hasOne(ShipmentMethod::class);
    }

    function OrderDetails() {
        return $this->hasMany(OrderDetails::class);
    }
    
    function User() {
        return $this->belongsTo(User::class);
    }
}
