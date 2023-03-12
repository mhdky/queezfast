<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('dashboard.post.index', [
            'title' => 'queezfast - Post',
            'posts' => Post::latest()->get(),
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request) {
        $post = new Post();
        $post->category_id = $request->input('category_id');
        $post->github = $request->input('github');
        $post->author = $request->input('author');
        $post->date = $request->input('date');
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->excerpt = $request->input('excerpt');
        $post->save();

        return response()->json(['success' => true, 'message' => 'Postingan berhasil ditambahkan']);
    }
}
