<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
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
        Inertia::share('currentLocation', [
            [
                'displayName' => "Home",
                'url' => '/forum',
            ],
            [
                'displayName' => "Mein Profil",
                'url' => '',
            ],
        ]);
        return Inertia::render('MyProfile', [
            'user' => Auth::user(),
        ]);
    }

    public function UpdateProfile(Request $request) {
        // First validate the request
        $request->validate([
            //'ProfilePicture' => 'image',
            'username' => 'required|min:4|string|alpha_dash|max:255|' . Rule::unique('users')->ignore(Auth::user()),
            'email' => 'required|email|min:4|max:255|' . Rule::unique('users')->ignore(Auth::user()),
            'status' => 'required|min:4|string|max:255'
        ]);

        // Upload the ProfilePicture to ProfilePictures
        /*if($request->file('ProfilePicture')){
            $file= $request->file('ProfilePicture');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/ProfilePictures'), $filename);

        }*/

        // Now that everything is validated. User is updated
        $user =Auth::user();
        //if ($filename) { $user->ProfilePicture = $filename; }
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->status = $request['status'];
        $user->save();

        // Return the message
        return back();
    }
}
