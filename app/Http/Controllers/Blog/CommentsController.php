<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCreateBlogComment;
use App\Http\Requests\RequestUpdateBlogComment;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CommentsController extends Controller
{
    public function store(RequestCreateBlogComment $request) {
        $comment = new Comment();
        $comment->user_id = 1;
        $comment->article_id = $request->get('article');
        $comment->parent_id = $request->get('parent');
        $comment->content = $request->get('comment');
        $comment->save();
        return redirect()->back();
    }

    public function edit($id) {
        $comment = Comment::find($id);
        return view('blog.comments.edit', compact('comment'));
    }

    public function update(RequestUpdateBlogComment $request, $id) {
        $comment = Comment::with('article')->find($id);
        $comment->content = $request->get('comment');
        $comment->save();
        return redirect(route('blog.article', ['slug'=>Str::slug($comment->article->name), 'id'=>$comment->article->id]));
    }

    public function delete($id) {
        $comment = Comment::find($id);
        return view('blog.comments.delete', compact('comment'));
    }

    public function destroy($id) {
        $comment = Comment::with('article')->find($id);
        Comment::destroy($id);
        return redirect(route('blog.article', ['slug'=>Str::slug($comment->article->name), 'id'=>$comment->article->id]));
    }
}
