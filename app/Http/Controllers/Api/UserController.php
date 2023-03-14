<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials))
        {
            $token = Auth::user()->createToken('myapptokken')->plainTextToken;

            return response()->json($token);
        }
        return response()->json("Usuari o contrasenya invalid");
    }
}
