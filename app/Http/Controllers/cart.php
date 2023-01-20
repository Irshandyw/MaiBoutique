<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;

class carts extends Controller
{
    public function index()
    {
        $carts = cart::all();
        $total_belanja = 0;
        foreach($carts as $cart){
            $total_belanja += $cart->subtotal;
        }

        return view('cart', compact('carts', 'total_belanja'));
    }
}
