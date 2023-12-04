<?php

namespace App\Http\Controllers;

use App\Models\Tea;
use App\Models\Topping;
use App\Models\Sugars;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Session;


class TeaController extends Controller
{
    public function index()
    {
        $teas = Tea::all();
        return view('admin.products', ['teas' => $teas]);
    }
    public function create()
    {
        return view('tea.create');
    }


    public function info(Tea $tea)
    {
    $tea->all();
    return view('admin.updateTea', ['tea' => $tea]);
    }
    

    public function destroy(Tea $tea)
    {

    $tea->delete();
    return redirect()->route('admin.products');
    }

    public function update(Request $request, Tea $tea)
    {
    $data = $request->validate([
        'name' => 'required',
        'picture' => 'nullable|image', 
        'description' => 'required',
        'price' => 'required|numeric',
        
    ]);

    if ($request->hasFile('picture')) {
        $data['picture'] = $request->file('picture')->store('tea_pictures', 'public');
    }
    $tea->update($data);

    return redirect()->route('admin.products')->with('success', 'Tea updated successfully!');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'picture' => 'required|image',
            'description' => 'required',
            'price' => 'required|numeric',
            'name' => 'required',
        ]);
        $data['picture'] = $request->file('picture')->store('tea_pictures', 'public');
        Tea::create($data);
        return redirect()->route('admin.products')->with('success', 'Tea added successfully!');
    }

    public function allteas()
    {
        $cart = session()->get('cart', []);
        $teas = Tea::all();
        $toppings = Topping::all();
        $sugars = Sugars::all();
    
        return view('teas', [
            'teas' => $teas,
            'toppings' => $toppings,
            'sugars' => $sugars,
            'cart' => $cart
            
        ]);
    }


    public function addToCart(Request $request)
    {
        
        $validatedData = $request->validate([
            'tea_id' => 'required',
            'sugar_id' => 'required',
            'topping_id' => 'required',
           
        ]);
    
        $cartItem = [
            'tea_id' => $validatedData['tea_id'],
            'sugar_id' => $validatedData['sugar_id'],
            'topping_id' => $validatedData['topping_id'],
          
        ];
    
        $cart = $request->session()->get('cart', []);
        $cart[] = $cartItem;
        $request->session()->put('cart', $cart);
        
        return redirect()->route('allTeas');
    }  


  

}
