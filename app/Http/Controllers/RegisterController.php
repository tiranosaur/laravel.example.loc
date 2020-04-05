<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function signup(RegisterRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'remember_token' => Str::random(10),
            ]);
            return response()->json($user, 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'User was already registered'], 409);
        }
    }
}
