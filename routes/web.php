<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsNavController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/productsnav', [ProductsNavController::class, 'productsNav'])->name('productsnav');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/order', [OrderController::class, 'order'])->name('order');
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/legal_notice', function() {
    return view('legal_notice');
})->name('legal_notice');

Route::get('/sitemap', function() {
    return view('sitemap');
})->name('sitemap');
