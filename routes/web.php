<?php

use Illuminate\Support\Facades\Route;

/* --- Pages --- */
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Pages\ContactController;

/* --- Shop --- */
use App\Http\Controllers\Shop\ProductsController;

/* --- Admin --- */
use App\Http\Controllers\admin\DashboardController;

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

/* --- Pages --- */
Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/mentions-legales', [PagesController::class, 'legalNotice'])->name('pages.legal_notice');
Route::get('/plan-du-site', [PagesController::class, 'sitemap'])->name('pages.sitemap');
Route::get('/contact', [ContactController::class, 'contact'])->name('pages.contact');
Route::post('/contact', [ContactController::class, 'process'])->name('pages.contact.process');

/* --- Shop --- */
Route::prefix('produits')->group(function() {
    Route::get('/', [ProductsController::class, 'index'])->name('shop.index');
    Route::get('/{slug}-{id}', [ProductsController::class, 'read'])
        ->name('shop.read')
        ->where('slug', '[a-zA-Z0-9-_]+')
        ->where('id', '[0-9]+');
});

/* --- Admin --- */
Route::prefix('administrateur')->group(function() {

    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    Route::get('/produits', [DashboardController::class, 'products'])->name('admin.products');

    Route::get('/produits/nouveau', [ProductsController::class, 'create'])->name('shop.products.create');
    Route::post('/produits/nouveau', [ProductsController::class, 'store'])->name('shop.products.store');

    Route::get('/produits/modifier/{id}', [ProductsController::class, 'edit'])
        ->where('id', '[0-9]+')
        ->name('shop.products.edit');

    Route::put('/produits/modifier/{id}', [ProductsController::class, 'update'])
        ->where('id', '[0-9]+')
        ->name('shop.products.update');

    Route::get('/produits/supprimer/{id}', [ProductsController::class, 'delete'])
        ->where('id', '[0-9]+')
        ->name('shop.products.delete');

    Route::delete('/produits/supprimer/{id}', [ProductsController::class, 'destroy'])
        ->where('id', '[0-9]+')
        ->name('shop.products.destroy');
});
