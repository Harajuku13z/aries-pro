<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        try {
            Mail::send([], [], function ($mail) use ($validated) {
                $mail->to('aries@aries-investissements.com')
                    ->from(config('mail.from.address'), $validated['name'])
                    ->replyTo($validated['email'])
                    ->subject('[ARIES] ' . $validated['subject'])
                    ->setBody(
                        "Nom : {$validated['name']}\n" .
                        "Email : {$validated['email']}\n" .
                        "Téléphone : " . ($validated['phone'] ?? 'Non renseigné') . "\n\n" .
                        "Message :\n{$validated['message']}",
                        'text/plain'
                    );
            });

            return back()->with('success', 'Votre message a bien été envoyé. Nous vous répondrons dans les meilleurs délais.');
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue. Veuillez réessayer ou nous contacter directement par téléphone.')->withInput();
        }
    }
}
