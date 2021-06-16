<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCreateBlogComment;
use App\Models\Comment;
use Illuminate\Http\Request;

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
}
