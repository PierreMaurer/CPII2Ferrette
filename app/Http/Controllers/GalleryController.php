<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Stmt\Return_;

class GalleryController extends Controller
{
    public function index() {
        return view('admin/gallery/galleryCreateMenu');
    }

    public function store(Request $request) {
        $path = $request->file('img')->store('public\uploads');
        $name = $request->file('img')->getClientOriginalName();
        Gallery::create([
            "file" => "/storage/app/uploads/{$path}"
        ]);
        Return "Image envoyées avec succès1";

    }
}

