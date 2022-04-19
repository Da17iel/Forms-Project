<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserConroller;
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
    ]);
});

Route::get('/forum', [ForumFunctions::class, 'StarterPage'])->name('page.starter');

Route::get('/forum/posts/{post:slug}', [ForumFunctions::class, 'SinglePost']);

Route::get('/user/{user:username}', [UserConroller::class, 'UserProfile']);

Route::get('/category/{category:slug}', [CategoryController::class, 'ShowCategory']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
