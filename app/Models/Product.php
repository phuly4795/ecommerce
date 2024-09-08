<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'description', 'price', 'is_active', 'is_featured', 'in_stock', 'on_sale'];

    protected $casts = ['image' => 'array'];

    public function categories() {
        return $this->belongsTo(Category::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function orderItem() {
        return $this->hasMany(OrderItem::class);
    }
}
