<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function (){
//    Route::resource('/', 'HomeController');
//    Route::get('/create', 'PostController@index');
//    Route::get('/list', 'PostController@postList');
//    Route::get('/detail/{id}', 'PostController@show');
//    Route::post('/post/store', 'PostController@store');

//    Route::get('/profile', 'HomeController@profile');
    Route::get('/', [App\Http\Controllers\PostController::class, 'postList']);
    Route::get('/search/{name}', [App\Http\Controllers\PostController::class, 'search']);
    Route::get('/create', [App\Http\Controllers\PostController::class, 'index'])->name('create');
    Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('store');
    Route::get('/post/close/{id}', [App\Http\Controllers\PostController::class, 'closePost']);
    Route::get('/detail/{id}', [App\Http\Controllers\PostController::class, 'show']);
    Route::get('/post/detail/{id}', [App\Http\Controllers\PostController::class, 'take']);
    Route::post('/post/edit', [App\Http\Controllers\PostController::class, 'update']);
    Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'edit']);
    
    Route::post('/order/store', [App\Http\Controllers\OrderController::class, 'store']);
    Route::get('/order', [App\Http\Controllers\OrderController::class, 'orderList']);
    Route::get('/history/order', [App\Http\Controllers\OrderController::class, 'historyOrder']);
    Route::get('/order/detail/{id}', [App\Http\Controllers\OrderController::class, 'order']);
    Route::get('/order/post/{id}', [App\Http\Controllers\OrderController::class, 'show']);
    Route::get('/order/post/detail/{id}', [App\Http\Controllers\OrderController::class, 'showDetail']);
    Route::post('/order/update', [App\Http\Controllers\OrderController::class, 'update']);
    Route::post('/order/update/post', [App\Http\Controllers\OrderController::class, 'updatePost']);
    Route::get('/order/confirm/{id}', [App\Http\Controllers\OrderController::class, 'confirm']);
    Route::post('/order/{id}/confirm', [App\Http\Controllers\OrderController::class, 'orderConfirm']);
    Route::get('/order/{id}/cancel', [App\Http\Controllers\OrderController::class, 'cancel']);
    Route::get('/order/cancel/{id}', [App\Http\Controllers\OrderController::class, 'cancelOrder']);
    Route::get('/order/{id}/{status}', [App\Http\Controllers\OrderController::class, 'statusUpdate']);
    
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
    Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'profileOther']);
    Route::get('/profile/edit/{id}', [App\Http\Controllers\HomeController::class, 'profileEdit']);
    Route::get('/profile/coin/{newcoin}', [App\Http\Controllers\HomeController::class, 'updateCoin']);
    Route::get('/profile/{coin}/withdraw', [App\Http\Controllers\HomeController::class, 'withdraw']);
    Route::post('/profile/edit', [App\Http\Controllers\HomeController::class, 'update']);
    
    Route::get('/profile/fav/{id}', [App\Http\Controllers\HomeController::class, 'fav']);
    Route::get('/profile/dislike/{id}', [App\Http\Controllers\HomeController::class, 'dislike']);

    Route::get('/report', [App\Http\Controllers\HomeController::class, 'report']);
    Route::post('/report', [App\Http\Controllers\HomeController::class, 'createReport']);

    Route::get('/review/{id}', [App\Http\Controllers\HomeController::class, 'review']);
    Route::post('/review', [App\Http\Controllers\HomeController::class, 'reviewStore']);

    Route::get('/notification', [App\Http\Controllers\NotificationController::class, 'index']);
    Route::get('/notification/hide/{id}', [App\Http\Controllers\NotificationController::class, 'hide']);
    
});
