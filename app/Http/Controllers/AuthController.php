<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        if (!$user) {
            $user = User::create([
                'name' => $user->name,
                'email' => $user->email,
            ]);
        }
        Auth::login($user);

        return $user;
    }

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
    }
    public function edit()
    {
    }

    public function update(Request $request)
    {
    }
}
