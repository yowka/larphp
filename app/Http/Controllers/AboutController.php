<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $seances = Seance::orderBy('created_at', 'desc')->take(5)->get();

        return view('about', compact('seances'));
    }
}
