<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        $products = Product::all();
            
        return view ('cart', ['Products' => $products]);
   
    }
    
}
