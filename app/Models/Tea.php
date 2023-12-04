<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    protected $fillable = ['name', 'picture', 'description', 'topping', 'sugar', 'price'];
}