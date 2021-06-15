<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function products() {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }
}
