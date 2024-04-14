<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

   public function  indexRegistre(){
       return view('sinup');
   }
    public function register(Request $request)
    {
        // Validation des données de la requête
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:Utilisateur,Vendeur', // Vérifie que le rôle est soit "Utilisateur" soit "Vendeur"
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Récupération du rôle en fonction de ce qui a été choisi
        $role = Role::where('name', $request->role)->first();

        // Assignation du rôle à l'utilisateur dans la table users_roles
        $user->roles()->attach($role->id);

        // Redirection de l'utilisateur vers la page de connexion après l'enregistrement
        return redirect()->route('login')->with('success', 'Votre compte a été créé avec succès. Veuillez vous connecter.');
    }


    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = Auth::user();


            if ($user->isAdmin()) {

                return redirect()->route('Admin.dashboard');
            } elseif ($user->isVendor()) {

                return redirect()->route('vendeur.dashboard');
            } elseif ($user->isUser()) {

                return redirect()->route('home');
            }
        }
        return redirect()->back()->withInput()->withErrors(['email' => 'Les informations d\'identification fournies sont incorrectes.']);
    }


    public function deconnecter(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
