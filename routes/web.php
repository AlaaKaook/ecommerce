<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController ;
use App\Http\Controllers\Admin\ProducteController as AdminProducteController ;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\SliderController as AdminSliderController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\FrontEnd\CartController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\FrontController;
use App\Http\Controllers\FrontEnd\OrderController;
use App\Http\Controllers\FrontEnd\ProducteController;
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

// Route::get('/', [FrontController::class, 'index'])->name('/');
Route::get('/', [FrontController::class, 'index'])->name('/');

Route::get('user/productes', [ProducteController::class , 'index'])->name('producte_all');

// Route::get('user/productes/{producte}', [ProducteController::class , 'show'])->name('details_producte');

Route::get('user/productes/{producte}', [ProducteController::class , 'product_details'])->name('details_producte');

Route::get('user/productes/{slug}/{name}', [ProducteController::class , 'product_by_category'])->name('product_by_category');

Route::get('cart', [CartController::class , 'cart'])->name('cart');

Route::get('remove_item/{id}', [CartController::class , 'remove_item'])->name('remove_item');

Route::get('addcart/{id}', [CartController::class , 'addcart'])->name('addcart');

Route::get('checkout', [OrderController::class , 'checkout'])->name('checkout');

Route::get('addorder', [OrderController::class , 'addorder'])->name('addorder');

Route::get('shoping', [FrontController::class, 'shoping'])->name('shoping');

Route::get('contact', [ContactController::class, 'contact'])->name('contact');

Route::post('send_email', [ContactController::class, 'send_email'])->name('contact.send_email');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::Middleware(['middleware' => 'auth', 'middleware' => 'IsAdmin'])->groupe(function () {

//     Route::get('dashboard' , function () {
//         return view('admin.admin_dashboard.index');

//     })->name('dashboard');

//     Route::resource('categories', AdminCategoryController::class);

// });


Route::middleware(['auth' , 'IsAdmin'])->group(function () {

    // Route::get('dashboard' , function () {
    //     return view('admin.admin_dashboard.index');

    // })->name('dashboard');

    Route::get('dashboard', [AdminController::class , 'index'])->name('dashboard');

    Route::resource('categories', AdminCategoryController::class);

    Route::resource('productes', AdminProducteController::class);

    Route::resource('orders', AdminOrderController::class)->only(['index']);

    Route::get('orders/pending', [AdminOrderController::class , 'pending'])->name('orders.pending');

    Route::get('orders/canceled', [AdminOrderController::class , 'canceled'])->name('orders.canceled');

    Route::get('orders/completed', [AdminOrderController::class , 'completed'])->name('orders.completed');

    Route::get('orders/update/status/{id}', [AdminOrderController::class , 'update'])->name('orders.update');

    Route::get('orders/details/{order}', [AdminOrderController::class , 'order_details'])->name('order.details');

    Route::resource('brands', AdminBrandController::class);

    Route::resource('users', AdminUserController::class);

    Route::resource('sliders', AdminSliderController::class);

    Route::resource('blogs', AdminBlogController::class);

    //message route
    Route::resource('messages', AdminMessageController::class)->only(['index', 'destroy']);

    Route::post('messages/{message}', [AdminMessageController::class , 'store'])->name('messages.store');

    Route::get('messages/{message}/replay', [AdminMessageController::class , 'replay'])->name('messages.replay');

    Route::get('messages/admin', [AdminMessageController::class , 'admin_messages'])->name('admin.messages');

    Route::get('messages/replay', [AdminMessageController::class , 'replay_message'])->name('replay_message');

    Route::get('messages/notreplay', [AdminMessageController::class , 'not_replay_message'])->name('not_replay_message');

    Route::get('messages/Details/{message}', [AdminMessageController::class , 'show'])->name('message_details');


});



