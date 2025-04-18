<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SupportMessage;
use App\Models\SupportMessage as SupportMessageModel;

class SupportController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Créer un nouveau message dans la base de données
        $supportMessage = SupportMessageModel::create($validated);

        // Envoyer l'email de support
        Mail::to('support@edutrustsign.com')->send(new SupportMessage($validated));

        return redirect()->route('support')->with('success', 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.');
    }
} 