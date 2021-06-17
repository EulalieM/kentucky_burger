<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCreateBlogCategory;
use App\Http\Requests\RequestUpdateBlogCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        return view('admin.blog');
    }

    public function create() {
        return view('blog.categories.create');
    }

    public function store(RequestCreateBlogCategory $request) {
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();
        return redirect(route('admin.blog'));
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('blog.categories.edit', compact('category'));
    }

    public function update(RequestUpdateBlogCategory $request, $id) {
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->save();
        return redirect(route('admin.blog'));
    }

    public function delete($id) {
        $category = Category::find($id);
        return view('blog.categories.delete', compact('category'));
    }

    public function destroy($id) {
        Category::destroy($id);
        return redirect(route('admin.blog'));
    }
}
