<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, BlogPost $post)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $comment = new Comment([
            'author' => $request->get('author'),
            'content' => $request->get('content'),
        ]);

        $post->comments()->save($comment);

        return redirect()->route('blog.single', $post);
    }
}


