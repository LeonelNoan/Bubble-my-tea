<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;
use App\Models\Tea;


class HomeController extends Controller
{

    public function index(){
        return view('home.userPage');
    }
    
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){
            return view('admin.home');
        }
        else{
            return view('home.userPage');
        }
    }

    public function teashop()
    {
        $tea=Tea::all();
        return view('home.teashop', ['tea' => $tea]);
        
    }

    public function showOrder(){
        $tea=Tea::all();
        return view('home.show_order', ['tea' => $tea]);
    }


}
