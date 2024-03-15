<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ProductController;
//EACH TIME U HAVE A CONTROLLER PUT THIS HERE
//EACH TIME U HAVE A CONTROLLER PUT THIS HERE
//EACH TIME U HAVE A CONTROLLER PUT THIS HERE
//EACH TIME U HAVE A CONTROLLER PUT THIS HERE
//EACH TIME U HAVE A CONTROLLER PUT THIS HERE
//EACH TIME U HAVE A CONTROLLER PUT THIS HERE
//EACH TIME U HAVE A CONTROLLER PUT THIS HERE
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

Route::get('dashboard.blade.php', function () {
    return view('dashboard');
});

Route::get('users.blade.php', function () {
    return view('users');
});

Route::get('products.blade.php', function () {
    return view('products');
});

Route::get('home.blade.php', function () {
    return view('home');
});

Route::get('home.blade.php', [ProductController::class, 'index']);

Route::get('products.blade.php', [ProductController::class, 'index']);
Route::post('products.blade.php', [ProductController::class, 'store'])->name('products.store');


