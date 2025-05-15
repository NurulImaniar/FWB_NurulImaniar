<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Order_Item extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'quantity', 'price', 'total'];

    public function Order()
    {
        return $this->belongsTo(Order::class);
    }

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}

