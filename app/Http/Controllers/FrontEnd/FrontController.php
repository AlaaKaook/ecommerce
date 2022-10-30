<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Producte;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::all();
    //     $productes = Producte::all();
    //     return view('frontend.front' , ['categories' =>$categories , 'productes'=>$productes]);
    // }

    // public function front2()
    // {
    //     return view('frontend.front2');
    // }

    public function index()
    {
        $categories = Category::all();
        $productes = Producte::all();
        $featured_product = Producte::where('status','1')->latest()->limit(3)->get();
        $latest_product = Producte::latest('id')->limit(3)->get();
        $prod_trending = Producte::where('trending','1')->latest('id')->limit(3)->get();
        return view('frontend.Front_App.front2' , ['categories' =>$categories , 'productes'=>$productes , 'latest_product'=> $latest_product , 'prod_trending' => $prod_trending , 'featured_product'=>$featured_product ]);
    }
}
