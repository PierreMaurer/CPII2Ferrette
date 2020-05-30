<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intervention;
class InterventionController extends Controller
{
    public function index() {
        $intervention = Intervention::take(3)->latest()->get();
        return view('admin/InterMenu', [
            'intervention'=> $intervention]);
    }

    public function create() {
        return view('admin/createInter');
    }

    public function edit(Intervention $intervention) {
        return view('admin/editInter', compact('intervention'));
    }

    public function delete() {
        return view('admin/createInter');
    }
}
