<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // tampil post
    public function index() {
        $posts = Post::latest();

        if(request('searchPost')) {
            $posts->where('title', 'like', '%' .request('searchPost') . '%');
        }

        return view('dashboard.post.index', [
            'title' => 'queezfast - Post',
            'posts' => $posts->get(),
            'categories' => Category::all(),
        ]);
    }

    // add post
    public function store(Request $request) {
        $validateData = $request->validate([
            'category_id' => 'required|min:1|max:100',
            'github' => 'required|url|min:1|max:300',
            'author' => 'required|min:1|max:50',
            'date' => 'required',
            'title' => 'required|min:1|max:255',
            'slug' => 'required|url|min:1|max:300',
            'excerpt' => 'required|min:5|max:5000000',
        ]);

        Post::create($validateData);
        return redirect('/post')->with('ok', 'Postingan berhasil ditambah');
    }

    // edit post
    public function edit (Post $post) {
        return response()->json($post);
    }

    // update post
    public function update(Request $request, Post $post) {
        $validateData = $request->validate([
            'category_id' => 'required|min:1|max:100',
            'github' => 'required|url|min:1|max:300',
            'author' => 'required|min:1|max:50',
            'date' => 'required',
            'title' => 'required|min:1|max:255',
            'slug' => 'required|url|min:1|max:300',
            'excerpt' => 'required|min:5|max:5000000',
        ]);

        Post::where('id', $post->id)->update($validateData);
        return redirect('/post')->with('ok', 'Postingan berhasil diedit');
    }

    // hapust post
    public function destroy(Post $post) {
        $post->delete();

        return response()->json([
            'message' => 'Post berhasil dihapus'
        ]);
    }
}
