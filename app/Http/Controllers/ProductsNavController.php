<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsNavController extends Controller
{
    public function productsNav() {
        return view('products.products_nav');
    }
}
