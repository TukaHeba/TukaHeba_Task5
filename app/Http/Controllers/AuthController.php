<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Facade;

class AuthController extends Controller
{
    public function register(Request $request){
        $post_data = $request->validate([
            'first_name'=>'required|string',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|min:8'
        ]);
    
        $user = User::create([
            'first_name' => $post_data['first_name'],
            'last_name' => $post_data['last_name'],
            'email' => $post_data['email'],
            'password' => Hash::make($post_data['password']),
            'specialization' => $post_data['specialization'],
        ]);
    
        $token = $user->createToken('authToken')->plainTextToken;
    
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    
public function login(Request $request){
    // if (!Auth::attempt($request->only('email', 'password'))) {
    //     return response()->json([
    //         'message' => 'Invalid login details'
    //     ], 401);
    // }

    // $user = User::where('email', $request['email'])->firstOrFail();

    // $token = $user->createToken('authToken')->plainTextToken;

    // return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'Bearer',
    // ]);
}


}
