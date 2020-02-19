<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function store(CommentRequest $request, $id) {
        $comment = new Comment();
        $comment->content = $request['content'];
        $comment->movie_id = $id;
        $comment->save();
        return redirect('/movies/' . $id);
    }
}
