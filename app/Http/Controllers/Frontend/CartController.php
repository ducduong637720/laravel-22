<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index(){
        $products = Cart::content();
        return view('frontend.products.cart')->with([
            'products' => $products
        ]);
    }

    public function create($id){
        $product = Product::find($id);
        Cart::add($product->id , $product->name, 1, $product->orgin_price, 0);

        return redirect()->route('frontend.cart.index');
    }

    public function increase($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty );

        return redirect()->route('frontend.cart.index');
    }

    public function decrease($rowId){
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty );

        return redirect()->route('frontend.cart.index');
    }

    public function remove($rowId){
        Cart::remove($rowId);

        return redirect()->route('frontend.cart.index');
    }

    public function pay($id){
        return view('frontend.products.pay');
    }
}
