<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Producte;
use Illuminate\Http\Request;

class ProducteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productes = Producte::all();
        $categories = Category::all();
        return view('frontend.producte.index' , ['productes'=>$productes , 'categories'=>$categories]);
    }


    public function product_by_category($slug)
    {
        if(Category::where('slug',$slug)->exists())
        {
            $category = Category::where('slug', $slug)->first();
            $productes = Producte::where('category_id' , $category->id)->get();
            return view('frontend.producte.product_by_category_2' , ['productes'=>$productes , 'category'=>$category]);
        }
        else
        {

            return view('frontend.front')->with('status', 'sorry not found this category');
        }
    }


    // public function filter_producte(Category $category)
    // {
    //     $productes = Producte::latest();
    //     if (request('id'))
    //     {
    //         // dd('bjbkj');

    //        $productes->whereIn('category_id', $category->id);
    //         // $productes->whereIn('category_id', $request->categories);
    //     }

    //     return view('frontend.producte.index' , ['productes'=>$productes]);
    // }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function show(Producte $producte)
    {
        return view('frontend.producte.show' , ['producte' => $producte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function edit(Producte $producte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producte $producte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producte $producte)
    {
        //
    }
}
