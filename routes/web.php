<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\System\DashboardController;
use App\Http\Controllers\System\OrderController;
use App\Http\Controllers\System\UserController;
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



Route::group(['namespace' => 'System', 'prefix' => 'system'], function () {


  //Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

  //System Routes
    Route::resource('dashboard', 'DashboardController');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('category', 'CategoryController');

    Route::resource('orders', 'OrderController');
    Route::resource('users', 'UserController');
    Route::resource('orders', 'OrderController');
    Route::put('/orders/{order}/status', [OrderController::class, 'OrderController@updateStatus'])->name('orders.updateStatus');

});

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
