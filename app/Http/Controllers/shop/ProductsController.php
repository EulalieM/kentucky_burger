<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCreateProduct;
use App\Models\Product;

class ProductsController extends Controller
{
    public function create() {
        return view('shop.create');
    }

    public function store(RequestCreateProduct $request) {
        $product = new Product($request->except('_token'));
        // dd($product);
        $product->save();
        return redirect(route('shop.products.create'));
    }

    public function index() {
        return view('shop.index');
    }

    public function read($id, $slug) {
        // détail d'un produit
    }
}
