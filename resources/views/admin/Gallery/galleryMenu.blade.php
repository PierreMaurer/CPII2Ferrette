@extends('layout')

@section('content')
    <div class="container-fluid br info-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-light">Importer une image</h1>
                <hr class="bg-light">
                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci distinctio fugiat fugit laborum molestias, natus veritatis. Ab adipisci, amet fuga harum incidunt possimus rem repellendus reprehenderit sapiente sed unde voluptatum.</p>
                <a class="btn btn-outline-light" href="/admin/gallery/create">Importer une intervention</a>
            </div>
        </div>
    </div>

    <div class="container-fluid info-container">
        <div class="row">
            <div class="col-12 text-center text-r">
                <h2 class="text-r">Gestion des images</h2>
                <hr>
                @foreach($gallery as $gallery)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src={{asset("/uploads/" . $gallery->file) }}>
                </div>
                    <a class="btn btn-outline-danger MenuButton" href="/admin/gallery/{{$gallery->id}}/delete" >Supprimer l'intervention</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
