@extends('layout')

@section('content')
    <div class="container-fluid br info-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-light">Crée un Evenement</h1>
                <hr class="bg-light">
                <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci distinctio fugiat fugit laborum molestias, natus veritatis. Ab adipisci, amet fuga harum incidunt possimus rem repellendus reprehenderit sapiente sed unde voluptatum.</p>
                <a class="btn btn-outline-light" href="/admin/event/create">Crée un Evenement</a>
            </div>
        </div>
    </div>

    <div class="container-fluid info-container">
        <div class="row">
            <div class="col-12 text-center text-r">
                <h2 class="text-r">Gestion des Evenements</h2>
                <hr>
                @foreach($event as $evenement)
                    <hr class="br">
                    <h2>Evenement</h2>
                    <p>Titre: {{$evenement->title}}</p>
                    <p>Description: {{ $evenement->description }}</p>
                    <p>Adresse: {{ $evenement->Adresse }} - {{ $evenement->city }}</p>
                    <p>Date: {{ $evenement->EventDate }}</p>
                    <a class="btn btn-outline-danger MenuButton" href="/admin/event/{{$evenement->id}}/edit">Modifier l'évenement</a>
                    <a class="btn btn-outline-danger MenuButton" href="/admin/event/{{$evenement->id}}/delete" >Supprimer l'évenement</a>
                @endforeach
            </div>

        </div>
    </div>
@endsection

