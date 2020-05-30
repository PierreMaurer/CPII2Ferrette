@extends('layout')

@section('content')
        <div class="container-fluid br info-container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-light">Panel d'administration</h1>
                    <hr class="bg-light">
                    <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci distinctio fugiat fugit laborum molestias, natus veritatis. Ab adipisci, amet fuga harum incidunt possimus rem repellendus reprehenderit sapiente sed unde voluptatum.</p>
                </div>
            </div>
        </div>

        <div class="container-fluid info-container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-r">Menu de Navigation</h2>
                    <hr>
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="btn btn-outline-danger" href="/admin/gallery">Gestion Gallerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-danger" href="/admin/event">Gestion évenement</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-danger" href="/admin/event">Gestion intervention</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endsection
