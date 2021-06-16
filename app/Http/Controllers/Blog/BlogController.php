<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCreateBlogArticle;
use App\Http\Requests\RequestUpdateBlogArticle;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class BlogController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('blog.index', compact('articles'));
    }

    public function article($slug, $id) {
        // $comments = Article::find($id)->comments;
        // $article = Article::find($id);
        // 2 requetes

        // $comments = Article::find($id)->comments()
        //     ->orderBy('updated_at', 'DESC')
        //     ->limit(5)
        //     ->where('parent_id', 0)
        //     ->get();
        // $article = Article::find($id);
        // 2 requetes


        $article = Article::with(['comments' => function($query) {
            $query->where('parent_id', 0)->orderBy('created_at', 'ASC');
        }])->find($id);
        //1 requete

        return view('blog.articles.article', compact('article'));
    }

    public function create() {
        $categories = Category::all();
        return view('blog.articles.create', compact('categories'));
    }

    public function store(RequestCreateBlogArticle $request) {
        $article = new Article();
        $article->name = $request->get('name');
        $article->image = $request->get('image');
        $article->content = $request->get('content');
        $article->category_id = $request->get('category');
        $article->save();
        return redirect(route('admin.blog'));
    }

    public function edit($id) {
        $categories = Category::all();
        $article = Article::find($id);
        return view('blog.articles.edit', compact('article', 'categories'));
    }

    public function update(RequestUpdateBlogArticle $request, $id) {
        $article = Article::find($id);
        $article->category_id = $request->get('category_id');
        $article->name = $request->get('name');
        $article->image = $request->get('image');
        $article->content = $request->get('content');
        $article->save();
        return redirect(route('admin.blog'));
    }

    public function delete($id) {
        $article = Article::find($id);
        return view('blog.articles.delete', compact('article'));
    }

    public function destroy($id) {
        Article::destroy($id);
        return redirect(route('admin.blog'));
    }

}
