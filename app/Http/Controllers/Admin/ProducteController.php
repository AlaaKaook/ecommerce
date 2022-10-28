<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Producte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return view('admin.producte.index' , ['productes'=>$productes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.producte.create' , ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producte = new Producte();
        // if($request->hasFile('image'))
        // {
        //     $file = $request->file('image');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file->move('ctegoryimg/'.$filename);
        //     $category->image = $file;
        // }

        $image=$request->file('image');
        $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
        $path = public_path('/producte_img');
        $image->move($path ,  $input['imagename']);
        $producte->image = $input['imagename'];
        $producte->category_id = $request->input('category_id');
        $producte->name = $request->input('name');
        $producte->slug = $request->input('slug');
        $producte->small_description = $request->input('small_description');
        $producte->description = $request->input('description');
        $producte->original_price = $request->input('original_price');
        $producte->selling_price = $request->input('selling_price');
        $producte->qantity = $request->input('qantity');
        $producte->status = $request->input('status') == True ? '1':'0';
        $producte->trending = $request->input('trending')== True ? '1':'0';
        // $producte->meta_title = $request->input('meta_title');
        // $producte->meta_keywords = $request->input('meta_keywords');
        // $producte->meta_description = $request->input('meta_description');
        $producte->save();
        return redirect()->route('productes.index')->with('status','Add producte Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $producte
     * @return \Illuminate\Http\Response
     */
    public function show(Producte $producte)
    {
        return view('admin.producte.show' ,['producte' => $producte]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $producte
     * @return \Illuminate\Http\Response
     */
    public function edit(Producte $producte)
    {
        $categories = Category::all();
        return view('admin.producte.edit', ['producte' => $producte , 'categories'=>$categories]);

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

        if($request->hasFile('image'))
        {
            $path = public_path('/producte_img'.$producte->image);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('image');
            $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/producte_img');
            $image->move($path ,  $input['imagename']);
            $producte->image = $input['imagename'];
        }
        $producte->category_id = $request->input('category_id');
        $producte->name = $request->input('name');
        $producte->slug = $request->input('slug');
        $producte->small_description = $request->input('small_description');
        $producte->description = $request->input('description');
        $producte->original_price = $request->input('original_price');
        $producte->selling_price = $request->input('selling_price');
        $producte->qantity = $request->input('qantity');
        $producte->status = $request->input('status') == True ? '1':'0';
        $producte->trending = $request->input('trending')== True ? '1':'0';

        $producte->update();

        return redirect()->route('productes.index')->with('status','Update Producte Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producte $producte)
    {
        $producte->delete();

        return redirect()->route('productes.index')->with('status','Delete Producte Successfully');
    }
}
