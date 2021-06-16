<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Article;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function products() {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    // Dashboard du blog
    public function blog() {
        $categories = Category::all();
        $articles = Article::all();
        return view('admin.blog', compact('articles', 'categories'));
    }
}
