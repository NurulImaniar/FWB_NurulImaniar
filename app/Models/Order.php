<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status'];

    public function Users()
    {
        return $this->belongsTo(User::class);
    }

    public function Order_Items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
