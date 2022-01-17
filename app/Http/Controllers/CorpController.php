<?php

namespace App\Http\Controllers;

use App\Intervention;
use Illuminate\Http\Request;

class CorpController extends Controller
{
    public function index() {
        $intervention = Intervention::take(3)->latest()->get();
        return view('corps', [
            'intervention'=> $intervention]);
    }
}
