<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Producte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {
        return view('frontend.Cart.cart2');
    }


    public function addcart($id, Request $request)
    {
            $product = Producte::findOrFail($id);

               if($request->qty==0)
                {
                    $qty =1 ;
                }
                else
                {
                    $qty = $request->qty ;
                }


            $cart = session()->get('cart');

            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => $qty,
                "original_price" => $product->original_price,
                "selling_price" => $product->selling_price,
                "image" => $product->image,

            ];

            session()->put('cart', $cart);


            return redirect()->route('producte_all')->with('status', 'product add to cart successfully !!');
    }




    public function updatecart($id, Request $request)
    {
            $product = Producte::findOrFail($id);

               if($request->qty==0)
                {
                    $qty =1 ;
                }
                else
                {
                    $qty = $request->qty ;
                }


            $cart = session()->get('cart');

            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => $qty,
                "original_price" => $product->original_price,
                "selling_price" => $product->selling_price,
                "image" => $product->image,

            ];

            session()->put('cart', $cart);


            return redirect()->route('cart')->with('status', 'Update Cart Successfully !!');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function remove_item($id)
    {
        Session::forget('cart.'.$id);

        return redirect()->route('cart');
    }
}
