<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $items_weekly = OrderProduct::select("*")
        ->whereBetween( 'created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

        $sales_weekly = 0;

        foreach($items_weekly as $item => $details)
        {
            $sales_weekly += $details['price'];
        }


        $items_orders_weekly = Order::select("*")
        ->whereBetween( 'created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

         $orders_weekly = count($items_orders_weekly);


        return view('admin.admin_dashboard.index' ,['sales_weekly'=>$sales_weekly ,'orders_weekly'=>$orders_weekly]);
    }
}
