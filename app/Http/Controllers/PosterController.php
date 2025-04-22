<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function index(){
        $seances = Seance::all();
        return view('poster', compact('seances'));
    }
    public function show($id){
        $movie = Seance::findOrFail($id);
        return view('movie', compact('movie'));
    }
}
