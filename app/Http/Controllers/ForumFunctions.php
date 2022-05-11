<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ForumFunctions extends Controller
{
    public function StarterPage()
    {
        Inertia::share('currentLocation', [
            "Home",
        ]);
        return Inertia::render('ForumStarterPage', [
            'categories' => Category::all(),
        ]);
    }
}
