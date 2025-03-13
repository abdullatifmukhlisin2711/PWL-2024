<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

Route::get('/hello', [WelcomeController::class,'hello']);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Abdul Latif']);
    });

    Route::get('/greeting', [
        WelcomeController::class,
        'greeting'
    ]);
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

Route::get('/hello', function(){
    return 'Hello, World!';
});
Route::get('/world', function(){
    return 'World';
});
Route::get('/welcome', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/user/{$name?}', function($name = 'John'){
    return 'Nama Saya ' . $name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos Ke- ' . $postId . " Komentar Ke- " . $commentId;
});
Route::get('/articles/{$id}', ArticleController::class)


?>