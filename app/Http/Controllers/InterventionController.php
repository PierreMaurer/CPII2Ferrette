<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intervention;
class InterventionController extends Controller
{
    public function index() {
        $intervention = Intervention::take(3)->latest()->get();
        return view('corps', [
            'intervention'=> $intervention]);
    }
}
