<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        $existingUser = User::where('email', $user->email)->first();
        if ($existingUser) {
            $user = $existingUser;
        } else {
            $user = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => 'google'
            ]);
        }
        Auth::login($user);

        return redirect()->route('index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index')->with('success', 'Login successful!');
        } else {
            return back()->withErrors(['email' => 'These credentials do not match our records.'])->withInput();
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('my.course')->with('success', 'Registration successful!');
    }

    public function edit()
    {
    }

    public function update(Request $request)
    {
    }

    public function profile()
    {
        return view('profile');
    }
}
