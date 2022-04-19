<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ForumFunctions extends Controller
{
    public function StarterPage()
    {
        return Inertia::render('ForumStarterPage', [
            'posts' => Post::all(),
            'comments' => Comment::all('id', 'post_id', 'comment_id'),
            'users' => User::all(),
            'categories' => Category::all(),
        ]);
    }

    public function SinglePost(Post $post) {
        return Inertia::render('SinglePost', [
            'post' => $post,
            'comments' => $post->comments,
            'users' => User::all(),
            'author' => $post->author,
            'category' => $post->category
        ]);
    }
}
