<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $items = Cart::with('product')->get();
        return view('cart.index', compact('items'));
    }

    public function add(Product $product)
    {
        $item = Cart::where('product_id',$product->id)->first();

        if($item){
            $item->increment('quantity');
        }else{
            Cart::create([
                'product_id'=>$product->id,
                'quantity'=>1
            ]);
        }

        return redirect()->back()->with('success','Producto agregado al carrito');
    }

    public function remove(Cart $cart)
    {
        $cart->delete();

        return redirect()->route('cart.index');
    }
}
