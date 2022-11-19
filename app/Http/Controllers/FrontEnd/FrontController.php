<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Producte;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::all();
    //     $productes = Producte::all();
    //     return view('frontend.front' , ['categories' =>$categories , 'productes'=>$productes]);
    // }



    public function index()
    {
        $categories = Category::all();
        $productes = Producte::all();
        $featured_product = Producte::where('status', '1')->latest()->limit(3)->get();
        $latest_product = Producte::latest('id')->limit(3)->get();
        $prod_trending = Producte::where('trending', '1')->latest('id')->limit(3)->get();
        $sliders = Slider::Where('active', '1')->get();
        $blogs = Blog::where('status', 1)->get();
        return view('frontend.Front_App.front2', ['categories' => $categories, 'productes' => $productes, 'latest_product' => $latest_product, 'prod_trending' => $prod_trending, 'featured_product' => $featured_product, 'sliders' => $sliders, 'blogs' => $blogs]);
    }

    public function shoping()
    {
        $categories = Category::all();
        $latest_product = Producte::latest('id')->limit(3)->get();
        $product_with_sell = Producte::where('selling', '1')->get();
        $productes = Producte::paginate(6);

        return view('frontend.Front_App.shoping', ['latest_product' => $latest_product, 'product_with_sell' => $product_with_sell, 'productes' => $productes, 'categories' => $categories]);
    }

    public function result_search(Request $request)
    {
        $productes = Producte::latest();
        $categories = Category::latest();

         //Search
        if ($request->filled('search')) {
            $productes->where('name', 'like', "%$request->search%")->orWhere('description', 'like', "%$request->search%")->orderBy('created_at', 'desc')->get();

        }

        $productes =  $productes->paginate(10);
        // $categories =  $categories->paginate(10);

        return view('frontend.Front_App.result_search', ['productes' => $productes , 'categories'=>$categories]);
    }

    public function subscriber()
    {
        return redirect()->route('/')->with('status' , 'Thank you, news will be sent exclusively');
    }
}
