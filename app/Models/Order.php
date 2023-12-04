<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','tea_id', 'sugar_id', 'topping_id', 'tea_price', 'date', 'price'];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
