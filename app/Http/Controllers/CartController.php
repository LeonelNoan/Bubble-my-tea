<?php

namespace App\Http\Controllers;

use App\Models\Tea;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::with('product')->get();
        $total = Cart::total();

        return view('home.show_order', compact('cartItems', 'total'));
    }

    public function addToCart(Tea $tea)
    {
        Cart::create([
            'tea_id' => $tea->id,
            'quantity' => 1,
        ]);

        return redirect()->route('home.show_order');
    }
}
