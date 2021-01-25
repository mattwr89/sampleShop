<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('homePage');
Route::get('/products', [ProductController::class, 'getAllProducts']);
Route::get('add-to-cart{id}', [ProductController::class, 'addProductToCart'])->name('cart.add');
Route::get('shopping-cart', [ProductController::class, 'getCart'])->name('product.inCart');





