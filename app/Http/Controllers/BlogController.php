<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // tampil blog
    public function index() {
        return view('dashboard.blog.index', [
            'title' => 'queezfast - Blog',
            'blogs' => Blog::all(),
        ]);
    }

    // add blog
    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:254',
            'url' => 'required|min:3|max:254',
        ]);

        Blog::create($validateData);

        return redirect('/blog')->with('ok', 'Blog berhasil ditambahkan');
    }

    // edit blog
    public function edit (Blog $blog) {
        return response()->json($blog);
    }
}
