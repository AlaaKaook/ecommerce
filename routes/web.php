<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController ;
use App\Http\Controllers\Admin\ProducteController as AdminProducteController ;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\FrontEnd\CartController;
use App\Http\Controllers\FrontEnd\FrontController;
use App\Http\Controllers\FrontEnd\OrderController;
use App\Http\Controllers\FrontEnd\ProducteController;
use App\Http\Controllers\TestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index'])->name('/');

Route::get('user/productes', [ProducteController::class , 'index'])->name('producte_all');

Route::get('user/productes/{producte}', [ProducteController::class , 'show'])->name('details_producte');

Route::get('user/productes/{slug}/{name}', [ProducteController::class , 'product_by_category'])->name('product_by_category');

Route::get('cart', [CartController::class , 'cart'])->name('cart');

Route::get('remove_item/{id}', [CartController::class , 'remove_item'])->name('remove_item');

Route::get('addcart/{id}', [CartController::class , 'addcart'])->name('addcart');

Route::get('checkout', [OrderController::class , 'checkout'])->name('checkout');

Route::get('addorder', [OrderController::class , 'addorder'])->name('addorder');



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

    Route::resource('productes', AdminProducteController::class);

    Route::resource('orders', AdminOrderController::class)->only(['index']);

    Route::get('orders/pending', [AdminOrderController::class , 'pending'])->name('orders.pending');

    Route::get('orders/canceled', [AdminOrderController::class , 'canceled'])->name('orders.canceled');

    Route::get('orders/completed', [AdminOrderController::class , 'completed'])->name('orders.completed');

    Route::get('orders/update/status/{id}', [AdminOrderController::class , 'update'])->name('orders.update');
});



