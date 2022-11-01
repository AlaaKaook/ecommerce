<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    // public function checkout()
    // {
    //     $cartitem = session()->get('cart');

    //     return view('frontend.order.checkout', ['cartitem' => $cartitem]);
    // }

    public function checkout()
    {
        if (!Auth::id()) {
            Session::put('check', '1');
            return redirect()->route('login')->with('status', 'please login first !!');
        }

        $cartitem = session()->get('cart');

        return view('frontend.order.checkout2', ['cartitem' => $cartitem]);
    }

    public function addorder(Request $request)
    {
        if (session()->has('cart')) {
            $request->validate([
                'fname'     => 'required|min:2',
                'lname'     => 'required|min:2',
                'email'   => 'required|email',
                'phone'   => 'required|numeric',
                'address'    => 'required|min:4',
            ]);

            $total = 0;

            if (session('cart')) {
                foreach (session('cart') as $id => $details) {
                    $total += $details['original_price'] * $details['quantity'];
                }
            }


            $user_id = Auth::user()->id;

            $order = new Order();

            $order->fname = $request->input('fname');
            $order->lname = $request->input('lname');
            $order->email = $request->input('email');
            $order->phone = $request->input('phone');
            $order->address = $request->input('address');
            $order->total_price = $total;
            $order->user_id = $user_id;
            $order->save();


            if (session('cart')) {
                $cartitem = session()->get('cart');

                foreach ($cartitem as $item => $details) {
                    OrderProduct::create([
                        'order_id' => $order->id,
                        'producte_id' => $details['id'],
                        'prod_qty' => $details['quantity'],
                        'price' => $details['original_price'] * $details['quantity'],

                    ]);
                }
            }
            // This code is to empty the session
            session()->forget('cart');
            return redirect()->route('/');
        }

        else
        {
            return redirect()->route('/')->with('status' , 'Sorry This Cart Empty');

        }

    }
}
