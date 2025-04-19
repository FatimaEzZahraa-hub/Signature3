<?php

//UserController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showAccount()
    {
        return view('account');
    }
    

    public function updateAccount(Request $request)
    {
        $user = Auth::user();

        // Validation
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string',
            'old_password' => 'required_with:new_password|string',
            'new_password' => 'nullable|string|confirmed|min:8',
        ]);

        // Mise à jour des infos de base
        $user->last_name = $validated['nom'];
        $user->first_name = $validated['prenom'];
        $user->email = $validated['email'];
        $user->phone = $validated['telephone'];

        // Mise à jour du mot de passe si fourni
        if ($request->filled('new_password')) {
            if (!Hash::check($request->old_password, $user->password)) {
                return back()->withErrors(['old_password' => 'L\'ancien mot de passe est incorrect.']);
            }
            $user->password = Hash::make($validated['new_password']);
        }

        $user->save();

        return redirect()->route('dashboard')->with('success', 'Profil mis à jour avec succès.');
    }

}