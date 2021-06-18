<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCreateProduct;
use App\Http\Requests\RequestUpdateProduct;
use App\Models\Product;
use App\Models\ProductCategory;

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
        $categories = ProductCategory::all();
        return view('shop.create', compact('categories'));
    }

    public function store(RequestCreateProduct $request) {
        // $product = new Product($request->except('_token')) : ne récupère pas : $product->product_category_id = $request->get('category');
        // dd($product);
        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->image = $request->get('image');
        $product->stock = $request->get('stock');
        $product->product_category_id = $request->get('category');
        // dd($product);
        $product->save();
        return redirect(route('admin.products'));
    }

    public function edit($id) {
        $categories = ProductCategory::all();
        $product = Product::find($id);
        return view('shop.edit', compact('product', 'categories'));
    }

    public function update(RequestUpdateProduct $request, $id) {
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->image = $request->get('image');
        $product->stock = $request->get('stock');
        $product->product_category_id = $request->get('category');
        $product->save();
        return redirect(route('admin.products'));
    }

    public function delete($id) {
        $product = Product::find($id);
        return view('shop.delete', compact('product'));
    }

    public function destroy($id) {
        Product::destroy($id);
        return redirect(route('admin.products'));
    }

}
