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
}
