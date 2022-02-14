<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'val']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/details/{idx}', [DetailsController::class, 'index'])->middleware('auth');

Route::post('/rent', [DetailsController::class, 'rent'])->middleware('auth');

Route::get('/cart', [CartController::class, 'index'])->middleware('auth')->name('cart');
Route::post('/deleteOrder', [CartController::class, 'delete'])->middleware('auth');
Route::post('/checkout', [CartController::class, 'checkout'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/updateProfile', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');
Route::post('/updateUser', [AdminController::class, 'update'])->middleware('auth');
Route::post('/updateRole', [AdminController::class, 'updateRole'])->middleware('auth');
Route::post('/deleteUser', [AdminController::class, 'delete'])->middleware('auth');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang']);


