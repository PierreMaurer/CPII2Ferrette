@extends('layout')

@section('content')
    <div class="container-fluid br info-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-light">Menu intervention</h1>
                <hr class="bg-light">
                <!-- TODO: Faire texte Menu Inter -->
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
                @foreach($intervention as $interventions)
                    <hr class="br">
                    <h2>Intervention</h2>
                    <p>Type: {{ $interventions->type_intervention }}</p>
                    <p>Date: {{ $interventions->intervention_date }}</p>
                    <p>Véhicule du Centre: {{ $interventions->inter_vehicle }}</p>
                    <p>Véhicule hors Centre: {{ $interventions->extra_vehicle }}</p>
                    <a class="btn btn-outline-danger MenuButton" href="/admin/intervention/{{$interventions->id}}/edit">Modifier l'intervention</a>
                    <a class="btn btn-outline-danger MenuButton" href="/admin/intervention/{{$interventions->id}}/delete" >Supprimer l'intervention</a>
                @endforeach
            </div>

            <div class="col-12 text-center justify-content-center">
                {{ $intervention->links() }}
            </div>
        </div>
    </div>
@endsection
