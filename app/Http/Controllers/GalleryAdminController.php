<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryAdminController extends Controller
{
    public function index() {
        return view('admin/galleryMenu');
    }
}
