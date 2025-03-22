<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
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
Route::get('/',function(){
    return view('welcome');
});
Route::get('/level', [HomeController::class, 'index']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/sales', [SalesController::class, 'index']);