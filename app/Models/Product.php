<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'active',
        'current_quantity',
        'category_id',
    ];

    function OrderDetail() {
        return $this->hasMany(OrderDetails::class);
    }

    function ProductImage() {
        return $this->hasMany(ProductImage::class);
    }

    function ProductCategory() {
        return $this->belongsTo(ProductCategory::class); 
    }
}
