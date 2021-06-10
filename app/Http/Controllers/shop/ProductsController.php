<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCreateProduct;
use App\Models\Product;

class ProductsController extends Controller
{

    /* --- View products --- */

    public function index() {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    public function read($id, $slug) {
        // détail d'un produit
    }

    /* --- Form admin --- */

    public function create() {
        return view('shop.create');
    }

    public function store(RequestCreateProduct $request) {
        $product = new Product($request->except('_token'));
        // dd($product);
        $product->save();
        return redirect(route('shop.products.create'));
    }

    public function edit($id) {

    }

    public function update($id) {

    }

    public function delete($id) {

    }

}
