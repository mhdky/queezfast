<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index', [
            'title' => 'queezfast - Dashboard',
            'posts' => Post::latest()->take(3)->get()
        ]);
    }
}
