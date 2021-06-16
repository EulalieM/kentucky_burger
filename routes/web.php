<?php

use Illuminate\Support\Facades\Route;

/* --- Pages --- */
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Pages\ContactController;

/* --- Shop --- */
use App\Http\Controllers\Shop\ProductsController;

/* --- Blog --- */
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\CategoriesController;

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

/* --- Blog --- */
Route::prefix('blog')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/article', [BlogController::class, 'article'])->name('blog.article');
});

/* --- Admin --- */
Route::prefix('administrateur')->group(function() {

    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

    Route::prefix('/produits')->group(function() {
        Route::get('/', [DashboardController::class, 'products'])->name('admin.products');

        Route::get('/nouveau', [ProductsController::class, 'create'])->name('shop.products.create');
        Route::post('/nouveau', [ProductsController::class, 'store'])->name('shop.products.store');

        Route::get('/modifier/{id}', [ProductsController::class, 'edit'])
            ->where('id', '[0-9]+')
            ->name('shop.products.edit');
        Route::put('/modifier/{id}', [ProductsController::class, 'update'])
            ->where('id', '[0-9]+')
            ->name('shop.products.update');

        Route::get('/supprimer/{id}', [ProductsController::class, 'delete'])
            ->where('id', '[0-9]+')
            ->name('shop.products.delete');
        Route::delete('/supprimer/{id}', [ProductsController::class, 'destroy'])
            ->where('id', '[0-9]+')
            ->name('shop.products.destroy');
    });

    Route::prefix('/blog/category')->group(function() {
        Route::get('/nouveau', [CategoriesController::class, 'create'])->name('blog.categories.create');
        Route::post('/nouveau', [CategoriesController::class, 'store'])->name('blog.categories.store');

        Route::get('/modifier/{id}', [CategoriesController::class, 'edit'])
            ->where('id', '[0-9]+')
            ->name('blog.categories.edit');
        Route::put('/modifier/{id}', [CategoriesController::class, 'update'])
            ->where('id', '[0-9]+')
            ->name('blog.categories.update');

        Route::get('/supprimer/{id}', [CategoriesController::class, 'delete'])
            ->where('id', '[0-9]+')
            ->name('blog.categories.delete');
        Route::delete('/supprimer/{id}', [CategoriesController::class, 'destroy'])
            ->where('id', '[0-9]+')
            ->name('blog.categories.destroy');
    });

    Route::prefix('/blog/article')->group(function() {
        Route::get('/', [DashboardController::class, 'blog'])->name('admin.blog');

        Route::get('/nouveau', [BlogController::class, 'create'])->name('blog.article.create');
        Route::post('/nouveau', [BlogController::class, 'store'])->name('blog.article.store');

        Route::get('/modifier/{id}', [BlogController::class, 'edit'])
            ->where('id', '[0-9]+')
            ->name('blog.article.edit');
        Route::put('/modifier/{id}', [BlogController::class, 'update'])
            ->where('id', '[0-9]+')
            ->name('blog.article.update');

        Route::get('/supprimer/{id}', [BlogController::class, 'delete'])
            ->where('id', '[0-9]+')
            ->name('blog.article.delete');
        Route::delete('/supprimer/{id}', [BlogController::class, 'destroy'])
            ->where('id', '[0-9]+')
            ->name('blog.article.destroy');
    });
});
