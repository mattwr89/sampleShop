<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all();
        
        return ['Products' => $products];
    }

    public function addProductToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $cart = Session::has('cart') ? Session::get('cart') :null;
        $newCart = new Cart($cart);
        $newCart->add($product, $product->id);

        $request->session()->put('cart', $newCart);
        return redirect()->route('homePage');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('product.inCart');
        }
        $cart = Session::get('cart');
        $newCart = new Cart($cart);
        return view('product.inCart', ['products' => $newCart->items]);
    }



}
