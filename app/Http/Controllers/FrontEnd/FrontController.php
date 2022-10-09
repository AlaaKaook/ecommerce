<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Producte;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $productes = Producte::all();
        return view('frontend.front' , ['categories' =>$categories , 'productes'=>$productes]);
    }

}
