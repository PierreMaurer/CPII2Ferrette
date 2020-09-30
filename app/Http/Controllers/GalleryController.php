<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Stmt\Return_;

class GalleryController extends Controller
{
    public function index() {
        $gallery = Gallery::paginate(4);
        return view('admin/gallery/galleryMenu', [
            'gallery'=> $gallery]);
        return view('admin/gallery/galleryMenu');
    }

    public function create() {
        return view('admin/gallery/galleryCreateMenu');
    }

    public function store(Request $request) {
        $name = $request->file('img')->hashName();
        $path = $request->file('img')->move("uploads", $name);
        Gallery::create([
            "file" => $name
        ]);
        Return "Image envoyées avec succès1";

    }

    public function delete(Gallery $gallery) {
        Gallery::
    }
}

