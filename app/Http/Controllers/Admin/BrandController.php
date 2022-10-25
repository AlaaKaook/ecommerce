<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index' , ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        // if($request->hasFile('image'))
        // {
        //     $file = $request->file('image');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file->move('ctegoryimg/'.$filename);
        //     $brand->image = $file;
        // }

        $image=$request->file('image');
        $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
        $path = public_path('/brand_img');
        $image->move($path ,  $input['imagename']);
        $brand->image = $input['imagename'];
        $brand->name = $request->input('name');
        $brand->slug = $request->input('slug');
        $brand->status = $request->input('status') == True ? '1':'0';
        $brand->is_popular = $request->input('is_popular')== True ? '1':'0';
        $brand->save();
        return redirect()->route('brands.index')->with('status','Add Brand Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        if($request->hasFile('image'))
        {
            $path = public_path('/brand_img'.$brand->image);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('image');
            $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/brand_img');
            $image->move($path ,  $input['imagename']);
            $brand->image = $input['imagename'];
        }
        $brand->name = $request->input('name');
        $brand->slug = $request->input('slug');
        $brand->status = $request->input('status') == True ? '1':'0';
        $brand->is_popular = $request->input('is_popular')== True ? '1':'0';

        $brand->update();

        return redirect()->route('brands.index')->with('status','Update Brand Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('brands.index')->with('status','Delete Brand Successfully');
    }
}
