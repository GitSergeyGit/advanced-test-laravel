<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController
{
    public function createToken(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5'],
            'device_name' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages('Невалідні дані!');
        }
//        if($user->role_name == 'admin') {
//            // create, update, delete, view
//        } else {
//            // view
//        }
        return $user->createToken($request->device_name)->plainTextToken;
//        return $user->createToken($request->device_name, ['product:view'])->plainTextToken;
    }

    public function logout(Request $request)
    {
        return $request->user()->currentAccessToken()->delete();
    }
}
