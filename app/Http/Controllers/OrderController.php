<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Tea;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }
    public function storeOrder(Request $request)
{
    $userId=Auth::user()->id;
    $teas = Tea::all();
    $cart = $request->session()->get('cart', []);

    $fullPrice = 0;
    foreach ($cart as $item) {
        $teaPrice = $teas->where('id', $item['tea_id'])->first()->price ?? 0;
        $fullPrice += $teaPrice;
    }
    foreach ($cart as $item) {
        $price = $teas->where('id', $item['tea_id'])->first()->price ?? 'Unknown Tea';
         $order = Order::create([
             'tea_id' => $item['tea_id'],
             'sugar_id' => $item['sugar_id'],
             'topping_id' => $item['topping_id'],
             'user_id' => $userId,
             'price' => $price,
             'date' => now(),
         ]);
         $order->orderDetails()->create([
            'tea_id' => $item['tea_id'],
            'quantity' => 1,
            'price' => $price,
        ]);
    
        $fullPrice += $price;
     }
    
     
    $request->session()->forget('cart');
    return redirect()->route('allTeas')->with('success', 'Order placed successfully!');
}
}

