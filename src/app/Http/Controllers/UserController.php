<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(RegisterRequest $request){
        $data = $request->validated();

        $user = User::create([
            'email' => $data['email'],
            'password' => $data['password'],
            'api_key' => Str::random(64),     
        ]);

        return response()->json([
            'message' => 'User registered successfully', 
            'api_key' => $user->api_key,
        ], 201);
    }
}
