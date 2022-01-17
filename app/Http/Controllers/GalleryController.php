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
            'gallerys'=> $gallery]);
    }

    public function show() {
        $gallery = Gallery::paginate(6);
        return view('gallery/gallery', ['gallerys' => $gallery]);
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
        Return redirect(route('AdminGallery'));

    }

    public function delete($id_gallery) {

        $deleted = Gallery::destroy($id_gallery);
        if ($deleted) {
            return redirect(route('AdminGallery'));
        } else{
            return 'Erreur';
        }

    }
}

