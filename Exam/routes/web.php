<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstituteController; // Add this line to import the missing class
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // open login
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [InstituteController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('institutes', InstituteController::class);
    Route::resource('orders', OrderController::class);
});

route::get('/admin', function () {
    return view('admin');
})->name('admin');