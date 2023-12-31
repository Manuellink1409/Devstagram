<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('principal');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/crear-cuenta',[RegisterController::class, 'index'] )->name('crear-cuenta');
Route::post('/crear-cuenta',[RegisterController::class, 'store'] );

Route::get('/login',[LoginController::class, 'index'] )->name('login');
Route::post('/login',[LoginController::class, 'store'] );

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/{user:username}',[PostController::class, 'index'] )->name('posts.index');
Route::get('/posts/create',[PostController::class, 'create'] )->name('posts.create');