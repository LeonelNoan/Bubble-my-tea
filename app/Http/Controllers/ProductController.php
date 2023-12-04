<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tea;

class ProductController extends Controller
{
    public function TeaList(Tea $products)
    {
        $products = Tea::all();
        return view('home.teashop', ['products' => $products]);
    }

    public function ProductList()
    {
        $tea=Tea::all();
        return view('test', compact('tea'));
        
    }
}
