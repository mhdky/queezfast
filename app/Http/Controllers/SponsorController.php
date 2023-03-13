<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function index() {
        return view('dashboard.sponsor.index', [
            'title' => 'queezfast - Sponsor',
            'sponsors' => Sponsor::all()
        ]);
    }

    // add sponsor
    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:254',
            'url' => 'required|min:3|max:254',
        ]);

        Sponsor::create($validateData);

        return redirect('/sponsor')->with('ok', 'Sponsor berhasil ditambahkan');
    }

    // edit sponsor
    public function edit (Sponsor $sponsor) {
        return response()->json($sponsor);
    }

    // update sosmed
    public function update(Request $request, Sponsor $sponsor) {
        $validateData = $request->validate([
            'name' => 'required|min:3|max:254',
            'url' => 'required|min:3|max:254',
        ]);

        Sponsor::where('id', $sponsor->id)->update($validateData);

        return redirect('/sponsor')->with('ok', 'Sponsor berhasil edit');
    }
}
