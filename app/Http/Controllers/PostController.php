<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Inertia\Inertia;
use PhpParser\Node\Expr\Cast\Int_;

class PostController extends Controller
{
    public function SinglePost(Post $post) {

        Inertia::share('currentLocation', [
            [
                'displayName' => "Home",
                'url' => '/forum',
            ],
            [
                'displayName' => "Kategorien",
                'url' => '/forum/',
            ],
            [
                'displayName' => $post->category->name,
                'url' => '/forum/category/' . $post->category->slug,
            ],
            [
                'displayName' => $post->title,
                'url' => '/forum/post/' . $post->slug,
            ],
        ]);
        return Inertia::render('SinglePost', [
            'post' => $post,
            'comments' => $post->comments,
            'users' => User::all(),
            'author' => $post->author,
            'category' => $post->category,
        ]);
    }

    public function ShowCreatePost() {
        Inertia::share('currentLocation', [
            [
                'displayName' => "Home",
                'url' => '/forum',
            ],
            [
                'displayName' => "Create Post",
                'url' => '/forum/create-post',
            ],
        ]);
        return Inertia::render('CreatePost', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     *
     */
    public function create(Request $request)
    {
        // Create a post
        // Check if User is logged in

        // Validate the request
        $request->validate([
            //'ProfilePicture' => 'image',
            'title' => 'required|min:4|string|max:255|',
            'content' => 'required|string|min:4',
            'category' => 'required|string|exists:categories,name|max:255',
        ]);

        // Define the Variables for clean creation of Post
        $slug = Str::slug($request['title']);
        $categoryID = (int)Category::all()->where('name', $request['category'])->first()['id'];

        // Create a new Post
        Post::create([
            'user_id' => Auth::id(),
            'title' => $request['title'],
            'slug' => $slug,
            'content' => $request['content'],
            'category_id' => $categoryID,
            'creationDate' => date("Y.m.d"),
        ]);

        // Return the message
        return redirect('/forum/post/' . $slug);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
