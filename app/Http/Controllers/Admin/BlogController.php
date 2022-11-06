<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index' ,['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();

        $image=$request->file('image');
        $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
        $path = public_path('/blog_img');
        $image->move($path ,  $input['imagename']);
        $blog->image = $input['imagename'];
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->status = $request->input('status') == True ? '1':'0';
        $blog->save();
        return redirect()->route('blogs.index')->with('status','Add Blog Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show',['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if($request->hasFile('image'))
        {
            $path = public_path('/blog_img'.$blog->image);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('image');
            $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/blog_img');
            $image->move($path ,  $input['imagename']);
            $blog->image = $input['imagename'];
        }
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->status = $request->input('status') == True ? '1':'0';
        $blog->update();

        return redirect()->route('blogs.index')->with('status','Update Blog Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('status','Delete blog Successfully');
    }
}
