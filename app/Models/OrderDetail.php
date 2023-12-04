<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class OrderDetail extends Model
{
    protected $fillable = ['tea_id', 'sugar_id', 'topping_id', 'quantity', 'price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function tea()
    {
        return $this->belongsTo(Tea::class, 'tea_id');
    }
}
