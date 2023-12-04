<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['product_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public static function total()
    {
        return self::with('product')->get()->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });
    }
}
