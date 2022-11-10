<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $orders = Order::all();
            return view('admin.order.index', ['orders' => $orders]);
    }


    public function update($id)
    {

        if(Order::where('id',$id)->exists())
        {
            $order = Order::where('id', $id)->first();

            if ($order->status == 0)
            {
                $order->status = 1;
                $order->update();
                // dd($order->status);
            }

            if ($order->status == 1)
            {
                $order->status = 2;
                $order->update();
            }

        }

        return Redirect::back()->with('status', 'Status Update Successfully');

    }

    public function pending()
    {

        $orders = Order::where('status','0')->get();
        return view('admin.order.order_by_status', ['orders' => $orders]);

    }

    public function completed()
    {
        $orders = Order::where('status','1')->get();
        return view('admin.order.order_by_status', ['orders' => $orders]);


    }

    public function canceled()
    {
        $orders = Order::where('status','2')->get();
        return view('admin.order.order_by_status', ['orders' => $orders]);

    }

    public function order_details(Order $order)
    {
        // $order = Order::orderBy('id' , 'desc');
        // $order->orderproducts()->orderBy('prod_qty', 'desc');
        // $user = User::where('id' , $order->user_id)->get();

        $user = User::find($order->user_id);

        return view('admin.order.order_details', ['order' => $order , 'user' => $user]);

    }
}
