<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;
use Inertia\Inertia;

class UserConroller extends Controller
{
    public function UserProfile(User $user) {
        Inertia::share('currentLocation', [
            [
                'displayName' => "Home",
                'url' => '/forum',
            ],
            [
                'displayName' => "Benutzer",
                'url' => '',
            ],
            [
                'displayName' => $user->username,
                'url' => '/forum/user/' . $user->username,
            ],
        ]);
        return Inertia::render('SingleUser', [
            'user' => $user,
            'UserPosts' => $user->posts,
        ]);
    }

    public function MyProfile() {
        return Inertia::render('MyProfile');
    }
}
