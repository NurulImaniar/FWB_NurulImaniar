<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'category_id', 'price', 'stock', 'image', 'description'
    ];

    // Relasi dengan category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi dengan order_items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
