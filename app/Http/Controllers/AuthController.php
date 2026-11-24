<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
 
public function showRegister()
{
    return view('auth.register');
}

public function register(Request $request)
{
   $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:8|confirmed',
], [
    'name.required' => 'Veuillez saisir votre nom.',
    'email.required' => 'Veuillez saisir votre adresse email.',
    'email.unique' => 'Cette adresse email est déjà utilisée.',
    'password.required' => 'Veuillez saisir un mot de passe.',
    'password.min' => 'Votre mot de passe doit contenir au moins 8 caractères.',
    'password.confirmed' => 'Les deux mots de passe ne correspondent pas.',
]);
}

public function showLogin()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    return back()->withErrors([
        'email' => 'Adresse email ou mot de passe incorrect.',
    ])->onlyInput('email');
}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login');
}
   
}
