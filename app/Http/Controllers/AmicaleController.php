<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventSP;

class AmicaleController extends Controller
{
    public function index()
    {
        $event = EventSP::take(3)->latest()->get();
        return view("amicale", [
            'event' => $event
        ]);
    }


}
