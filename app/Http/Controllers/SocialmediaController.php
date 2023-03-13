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

    // update sosmed
    public function update(Request $request, Social $social) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:254',
            'url' => 'required|min:3|max:254',
        ]);

        Social::where('id', $social->id)->update($validateData);

        return redirect('/social-media')->with('ok', 'Social media berhasil edit');
    }

    // hapust sosmed
    public function destroy(Social $social) {
        $social->delete();

        return response()->json([
            'message' => 'Social media berhasil berhasil dihapus'
        ]);
    }
}
