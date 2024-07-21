<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\System\OrderController;
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

Route::group(['namespace' => 'System', 'prefix' => 'system', 'middleware' => 'auth'], function () {

    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


  //Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

  //System Routes
    Route::resource('dashboard', 'DashboardController');

    Route::resource('category', 'CategoryController');

    Route::resource('orders', 'OrderController');
});

require __DIR__.'/auth.php';
