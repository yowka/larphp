<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'login' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        $role_id = 2;

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'api_token',
            'role_id' => $role_id,
        ]);
        $user->api_token = Hash::make(Str::random(60));
        $user->save();
        return redirect('/poster');

    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('login', $request->login)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Неверный логин или пароль'], 401);
        }

        return redirect('/poster');

    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->api_token = null;
        $user->save();
        return response()->json(["message" => "Вы вышли из системы"])->setStatusCode(200);
    }
}
