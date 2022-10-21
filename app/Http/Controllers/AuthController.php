<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function login()
    {
        $urlGitHub = 'https://github.com/login/oauth/authorize';
        $parameters = [
            'client_id' => getenv('OAUTH_GITHUB_CLIENT_ID'),
            'redirect_uri' => getenv('OAUTH_GITHUB_REDIRECT_URI'),
            'scope' => 'user',
        ];
        $urlGitHub .= '?' . http_build_query($parameters);

        $urlGoogle = 'https://accounts.google.com/o/oauth2/auth';
        $parameters = [
            'redirect_uri'  => 'https://516e-78-26-174-243.ngrok.io/oauth/google/callback',
            'response_type' => 'code',
            'client_id'     => '11792182643-tbmgs8seod7gq1rf7sh56qms8q5dvii3.apps.googleusercontent.com',
            'scope'         => implode(' ', [
                'https://www.googleapis.com/auth/userinfo.email',
                'https://www.googleapis.com/auth/userinfo.profile'
            ]),
        ];
        $urlGoogle .= '?' . http_build_query($parameters);

        return view('auth/form', compact('urlGitHub', 'urlGoogle'));
    }

    public function handleLogin(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5'],
        ]);

        if (Auth::attempt($data)) {
            $user = Auth::user();
            if (Hash::needsRehash($user->password)) {
                $user->password = Hash::make($data['password']);
                $user->save();
            }
            return redirect()->route('admin.panel');
        }

        return back()->withErrors([
            'email' => 'Error',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('main');
    }
}
