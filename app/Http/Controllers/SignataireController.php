<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signataire;

class SignataireController extends Controller
{
    public function index()
    {
        $signataires = Signataire::all();
        return view('signataires.index', compact('signataires'));
    }

    public function create()
    {
        return view('signataires.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:signataires,email',
            'telephone' => 'nullable|string'
        ]);

        $signataire = Signataire::create([
            'name'  => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone
        ]);

        // Lier le signataire à l'utilisateur connecté
        auth()->user()->contacts()->attach($signataire->id);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'signataire' => [
                    'id' => $signataire->id,
                    'name' => $signataire->name,
                    'email' => $signataire->email
                ]
            ]);
        }

        return redirect()->route('documents.create')
                         ->with('success', 'Signataire ajouté. Vous pouvez maintenant le sélectionner.');
    }
}