<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;
use App\Models\Category;
use App\Models\ProductCategory;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function products() {
        $categories = ProductCategory::all();
        $products = Product::all();
        return view('admin.products', compact('products', 'categories'));
    }

    public function blog() {
        $categories = Category::all();
        $articles = Article::all();
        return view('admin.blog', compact('articles', 'categories'));
    }
}
