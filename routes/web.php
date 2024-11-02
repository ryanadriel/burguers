<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::group(['namespace' => 'System', 'prefix' => 'system', 'middleware' => 'auth'], function () {


  //Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

  //System Routes
    Route::resource('dashboard', 'DashboardController');

    Route::resource('category', 'CategoryController');

    Route::resource('orders', 'OrderController');
});
