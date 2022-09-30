<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserConroller;
use App\Models\Post;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ForumFunctions;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('HomePage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'questions' => Post::all("title"),
    ]);
});

Route::get('/forum', [ForumFunctions::class, 'StarterPage']);

// Post Routes
Route::get('/forum/post/{post:slug}', [PostController::class, 'SinglePost']);

Route::post('/forum/post/{post:slug}', [CommentController::class, 'create']);

Route::get('/forum/create-post', [PostController::class, 'ShowCreatePost'])
->middleware('auth');

Route::post('/forum/create-post', [PostController::class, 'create']);

Route::get('/forum/category/{category:slug}', [CategoryController::class, 'ShowCategory']);

// User Routes
Route::get('/forum/user/{user:username}', [UserConroller::class, 'UserProfile']);

Route::get('/forum/my-profile', [UserConroller::class, 'MyProfile'])
->middleware('auth');

Route::post('/forum/my-profile', [UserConroller::class, 'UpdateProfile']);

// Other Routes
Route::get('/forum/search', [ForumFunctions::class, 'SearchPage']);

require __DIR__.'/auth.php';
