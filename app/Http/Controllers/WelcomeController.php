<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\EventSP;
class WelcomeController extends Controller
{
    public function index() {
        $event = EventSP::take(3)->latest()->get();
        return view('welcome', [
            'event' => $event,
        ]);
    }
}
