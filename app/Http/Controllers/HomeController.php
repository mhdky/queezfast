<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Post;
use App\Models\Social;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::latest()->paginate(30);
        return view('home', [
        'title' => 'queezfast',
        'posts' => $posts,
        'categories' => Category::all(),
        'socials' => Social::all(),
        'blogs' => Blog::all(),
        'sponsors' => Sponsor::all()
        ]);
    }

    public function search($searchText) {
        $posts = Post::where('title', 'like', '%'.$searchText.'%')->get();

        return response()->json($posts);
    }
}