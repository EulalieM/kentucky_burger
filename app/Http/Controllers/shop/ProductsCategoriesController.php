<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCreateProductCategory;
use App\Http\Requests\RequestUpdateProductCategory;
use App\Models\Product_Category;
use Illuminate\Http\Request;

class ProductsCategoriesController extends Controller
{
    public function index() {
        return view('admin.products');
    }

    public function create() {
        return view('shop.categories.create');
    }

    public function store(RequestCreateProductCategory $request) {
        $category = new Product_Category();
        $category->name = $request->get('name');
        $category->save();
        return redirect(route('admin.products'));
    }

    public function edit($id) {
        $category = Product_Category::find($id);
        return view('shop.categories.edit', compact('category'));
    }

    public function update(RequestUpdateProductCategory $request, $id) {
        $category = Product_Category::find($id);
        $category->name = $request->get('name');
        $category->save();
        return redirect(route('admin.products'));
    }

    public function delete($id) {
        $category = Product_Category::find($id);
        return view('shop.categories.delete', compact('category'));
    }

    public function destroy($id) {
        Product_Category::destroy($id);
        return redirect(route('admin.products'));
    }
}
