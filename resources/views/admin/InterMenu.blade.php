@extends('layout')

@section('content')
    <div class="container-fluid br info-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-light">Crée une intervention</h1>
                <hr class="bg-light">
                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci distinctio fugiat fugit laborum molestias, natus veritatis. Ab adipisci, amet fuga harum incidunt possimus rem repellendus reprehenderit sapiente sed unde voluptatum.</p>
                <a class="btn btn-outline-light" href="/admin/intervention/create">Crée une intervention</a>
            </div>
        </div>
    </div>

    <div class="container-fluid info-container">
        <div class="row">
            <div class="col-12 text-center text-r">
                <h2 class="text-r">Gestion Intervention</h2>
                <hr>
                @foreach($intervention as $intervention)
                    <hr class="br">
                    <h2>Intervention</h2>
                    <p>Type: {{ $intervention->type_intervention }}</p>
                    <p>Ville: {{ $intervention->city }}</p>
                    <p>Date: {{ $intervention->intervention_date }}</p>
                    <p>Véhicule du Centre: {{ $intervention->inter_vehicle }}</p>
                    <p>Véhicule hors Centre: {{ $intervention->extra_vehicle }}</p>
                    <a class="btn btn-outline-danger MenuButton" href="/admin/intervention/{{$intervention->id}}/edit">Modifier l'intervention</a>
                    <a class="btn btn-outline-danger MenuButton" href="/admin/intervention/{{$intervention->id}}/delete" >Supprimer l'intervention</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
