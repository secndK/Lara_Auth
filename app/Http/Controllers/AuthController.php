<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //afficher la vue enregistrement
        public function showRegisterForm()
    {
    return view('auth.register');
    }

    //afficher la vue connexion

        public function showLoginForm()
    {
    return view('auth.login');
    }


    // logique derrière la vue enrégistrement
    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => hash::make($request->password),

        ]);


        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    // Créez le compte utilisateur
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Connectez automatiquement l'utilisateur
    Auth::login($user);

    // Redirigez vers le tableau de bord
    return redirect()->route('dashboard');
}


    //logique derrière la connexion
    public function login(Request $request)
{
    // Validation des champs
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);

    // Vérification de l'existence de l'email
    if (!\App\Models\User::where('email', $request->email)->exists()) {
        return back()->withErrors([
            'email' => 'Ce compte n\'existe pas.',
        ]);
    }

    // Tentative d'authentification
    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect()->route('dashboard');
    }

    // Message d'erreur si les identifiants sont incorrects
    return back()->withErrors([
        'email' => 'Identifiants incorrects.',
    ]);
}

    //logique derrière déconnexion

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }






}
