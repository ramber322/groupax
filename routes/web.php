<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserxController;
use App\Http\Controllers\DashboardController;

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
Route::get('/', function () {
    return view('login');
});


Route::get('dashboard', function () {
    return view('dashboard');
});



Route::get('users', function () {
    return view('users');
});

Route::get('products', function () {
    return view('products');
});

Route::get('home.blade.php', function () {
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::get('ctdrinks', function () {
    return view('ctdrinks');
});

Route::get('ctchips', function () {
    return view('ctchips');
});


//productcontroller methods index-to display. store to store into table using form request
Route::get('products.blade.php', [ProductController::class, 'index']);
Route::post('products.blade.php', [ProductController::class, 'store'])->name('products.store');

Route::get('users', [UserxController::class, 'index']);
Route::get('dashboard', [DashboardController::class, 'index']);


Route::get('dashboard', [DashboardController::class, 'login'])->name('dashboard');