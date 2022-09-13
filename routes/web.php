<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::Middleware(['middleware' => 'auth', 'middleware' => 'IsAdmin'])->groupe(function () {

//     Route::get('dashboard' , function () {
//         return view('admin.admin_dashboard.index');

//     })->name('dashboard');

//     Route::resource('categories', AdminCategoryController::class);

// });


Route::middleware(['auth' , 'IsAdmin'])->group(function () {

    Route::get('dashboard' , function () {
        return view('admin.admin_dashboard.index');

    })->name('dashboard');

    Route::resource('categories', AdminCategoryController::class);

});



