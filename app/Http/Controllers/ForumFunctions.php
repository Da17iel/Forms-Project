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
            //'users' => User::paginate(),
        ]);
    }

    public function Post() {
        return Inertia::render('SinglePost', [
            //'post' => Post::where,
        ]);
    }
}
