<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    // tampil sosmed
    public function index() {
        return view('dashboard.social-media.index', [
            'title' => 'queezfast - Social Media',
            'socials' => Social::all(),
        ]);
    }

    // add sosmed
    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:254',
            'url' => 'required|min:3|max:254',
        ]);

        Social::create($validateData);

        return redirect('/social-media')->with('ok', 'Social media berhasil ditambahkan');
    }

    // edit sosmed
    public function edit (Social $social) {
        return response()->json($social);
    }
}
