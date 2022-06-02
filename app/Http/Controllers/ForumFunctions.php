<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ForumFunctions extends Controller
{
    public function StarterPage()
    {
        Inertia::share('currentLocation', [
            [

                'displayName' => "Home",
                'url' => '/forum',

            ],
        ]);
        return Inertia::render('ForumStarterPage', [
            'categories' => Category::all(),
        ]);
    }

    public function SearchPage() {
        Inertia::share('currentLocation', [
            [

                'displayName' => "Home",
                'url' => '/forum',

            ],
        ]);
        return Inertia::render('SearchPage', [
            'posts' => Post::all(),
        ]);
    }
}
