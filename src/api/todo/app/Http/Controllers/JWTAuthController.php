<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class JWTAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['register', 'login', 'respondWithToken']]);
    }

    public function register(Request $req)
    {
        $req->validate([
            'user.email' => 'required|email:rfc',
            'user.password' => 'required|string|min:4|max:255|',
        ]);
        $jsonData = $req->json()->all();
        $email = $jsonData['user']['email'];
        $password = $jsonData['user']['password'];

        $user = User::create([
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        return response()->json(["user" => $user]);
    }

    public function login(Request $req)
    {
        $req->validate([
            'user.email' => 'required|email:rfc',
            'user.password' => 'required|string|min:4|max:255|',
        ]);

        $jsonData = $req->json()->all();
        $email = $jsonData['user']['email'];
        $password = $jsonData['user']['password'];
        $credentials = ['email' => $email, 'password' => $password];

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $jwtToken=$this->respondWithToken($token);
        return response()->json([
            "user"=>[
                "email"=>$email,
                "token"=>$jwtToken
            ]
            ]);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
