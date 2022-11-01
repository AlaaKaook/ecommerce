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
        // $cartitems = Cart::where('user_id', Auth::id())->get();
        // return view('frontend.Cart.cart', ['$cartitems' => $cartitems]);
        return view('frontend.Cart.cart2');
    }




    public function addcart($id, Request $request)
    {

        // if (Auth::id()) {

            $product = Producte::findOrFail($id);

            $cart = session()->get('cart');

            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => $request->qty,
                "original_price" => $product->original_price,
                "selling_price" => $product->selling_price,
                "image" => $product->image,

            ];

            session()->put('cart', $cart);


            return redirect()->route('producte_all')->with('status', 'product add to cart successfully !!');
        // } else {


        //     return redirect()->route('login')->with('status', 'please login first !!');
        // }


        // $product = Producte::findOrFail($id);

        // $cart = session()->get('cart');

        // $cart[$id]=[

        //     "name" => $product->name ,
        //     "quantity" => $request->qty ,
        //     "original_price" => $product->original_price ,
        //     "selling_price" => $product->selling_price ,
        //     "image" => $product->image ,

        // ];

        // session()->put('cart' , $cart);


        //This code is to empty the session
        // session()->forget('cart');
        // return redirect()->route('producte_all')->with('status', 'product add to cart successfully !!');



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
