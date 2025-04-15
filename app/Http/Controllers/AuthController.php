<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        User::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('auth'); // Предполагается, что у вас есть представление register.blade.php

    }


    /**
     * Update the specified resource in storage.
     */

}
