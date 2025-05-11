<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price', 'total'];

    // Relasi dengan order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relasi dengan product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
