<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $query = Post::with(['category', 'author'])->latest();

        if (request('category')) {
            $query->whereHas('category', function ($q) {
                $q->where('slug', request('category'));
            });
        }

        if (request('search')) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('body', 'like', "%{$search}%");
            });
        }

        $posts = $query->paginate(9)->withQueryString();

        $categories = Category::has('posts')->get();

        $featuredPost = (request()->input('page', 1) == 1 && !request('category') && !request('search')) 
            ? $posts->first() 
            : null;

        return view('post.index', compact('posts', 'categories', 'featuredPost'));
    }

    public function show($slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post.show', [
            'post' => $post
        ]);
    }
}

