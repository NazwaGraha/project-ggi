<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate(6);

        return view('post.index')->with('posts', $posts);
    }

    public function show($slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post.show', [
            'post' => $post
        ]);
    }
}
