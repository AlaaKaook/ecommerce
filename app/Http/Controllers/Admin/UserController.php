<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index' , ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $image=$request->file('image');
        $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
        $path = public_path('/user_img');
        $image->move($path ,  $input['imagename']);
        $user->image = $input['imagename'];
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');

        if( $user->password != $request->input('password'))
        {
            $user->password = Hash::make($request->input('password'));
        }
        else
        {
            $user->password != $request->input('password');
        }
        // $user->password = Hash::make($request->input('password'));
        $user->role_as = $request->input('role_as');

        $user->save();

        return redirect()->route('users.index')->with('status','Add User Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->hasFile('image'))
        {
            $path = public_path('/user_img'.$user->image);

            if(File::exists($path))
            {
                File::delete($path);
            }
            $image=$request->file('image');
            $input['imagename'] = time(). '.' . $image->getClientOriginalExtension();
            $path = public_path('/user_img');
            $image->move($path ,  $input['imagename']);
            $user->image = $input['imagename'];
        }

        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');

        if( $user->password != $request->input('password'))
        {
            $user->password = Hash::make($request->input('password'));
        }
        else
        {
            $user->password != $request->input('password');
        }

        $user->role_as = $request->input('role_as');

        $user->update();

        return redirect()->route('users.index')->with('status','Update User Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('status','Delete User Successfully');
    }
}
