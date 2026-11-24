<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public $users = [
        ['name' => 'Valerio', 'surname' => 'Scanu', 'role' => 'Senior Manager'],
        ['name' => 'Carlo', 'surname' => 'Magno', 'role' => 'HR'],
        ['name' => 'Walter', 'surname' => 'White', 'role' => 'Developer'],
    ];

    public function homepage()
    {
        return view('welcome');
    }

    public function aboutUs()
    {
        return view('about-us', ['users' => $this->users]);
    }

    public function aboutUsDetail(string $name)
    {
        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('about-us-detail', ['user' => $user]);
            }
        }
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function submitContact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $userData = compact('name', 'email', 'message');

        try {
            Mail::to($email)->send(new ContactMail($userData));
        } catch (Exception $e) {
            return redirect()->route('homepage')->with('emailError', "C'è stato un problema con l'invio dell'email. Per favore, riprova più tardi.");
        }

        return redirect()->route('homepage')->with('emailSent', "Grazie, il tuo messaggio è stato inviato!");
    }
}