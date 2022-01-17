<?php

namespace App\Http\Controllers;

use App\EventSP;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        $event = EventSP::take(3)->latest()->get();
        return view('contact', [
            'event' => $event,
        ]);
    }

    public function store() {
        request()->validate([
            'email' => 'required|email',
            'name' => 'required',
            'LastName' => 'required',
            'message' => 'required'

        ]);



        Mail::to(request('email'))
            ->send(new ContactMe(request('name'), request('LastName'), request('email'), request('message')));

        return redirect('/contact')
            ->with('message', 'Votre email a été envoyé !');
    }
}
