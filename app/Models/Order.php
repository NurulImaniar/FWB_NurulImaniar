<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status'];

    // Relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan order_items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
