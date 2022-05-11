<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserConroller extends Controller
{
    public function UserProfile(User $user) {
        Inertia::share('currentLocation', [
            "Home", "User", $user->username
        ]);
        return Inertia::render('SingleUser', [
            'user' => $user,
            'UserPosts' => $user->posts,
        ]);
    }
}
