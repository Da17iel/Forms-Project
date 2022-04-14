<?php

namespace App\Http\Controllers;

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
            'users' => User::all(),
        ]);
    }

    public function SinglePost(Post $post) {
        return Inertia::render('SinglePost', [
            'post' => $post,
            'comments' => $post->comments,
            'users' => User::all(),
        ]);
    }
}
