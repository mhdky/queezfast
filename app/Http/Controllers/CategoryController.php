<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Social;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category) {
        return view('home', [
            'title' => 'queezfast - ' . $category->name . ' Category',
            'posts' => $category->post()->paginate(30),
            'categories' => Category::all(),
            'socials' => Social::all(),
            'blogs' => Blog::all(),
            'sponsors' => Sponsor::all()
        ]);
    }
}
