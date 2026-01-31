<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function email()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $adminEmail = 'mostapha10tawba@gmail.com';
        $data = [
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'user_email' => $request->input('email'),
        ];

        // Envoyer l'e-mail à l'administrateur
        Mail::to($adminEmail)
            ->send(new TestMail($data));

        return back()->with('success', 'Email sent to admin successfully!');
    }
}
