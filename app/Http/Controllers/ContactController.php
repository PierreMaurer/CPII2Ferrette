<?php

namespace App\Http\Controllers;

use App\EventSP;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $event = EventSP::take(3)->latest()->get();
        return view('contact', [
            'event' => $event,
        ]);
    }
}
