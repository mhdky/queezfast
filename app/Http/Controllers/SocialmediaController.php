<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    public function index() {
        return view('dashboard.social-media.index', [
            'title' => 'queezfast - Social Media',
            'socials' => Social::all(),
        ]);
    }
}
