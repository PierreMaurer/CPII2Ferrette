@extends('layout')

@section('content')
<div class="container-fluid br info-container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-light">Le Corps</h1>
            <hr class="bg-light">
            <!-- TODO: Faire description Corps -->
            <p class="text-light">Le Corps des Sapeurs-Pompiers des Deux-Ferrette sont situé dans un CPI, un Centre de Première Intervention. Il s'agit d'un regroupement entre le CPI de Ferrette et de Vieux-Ferrette, qui en 2013 à été intégrés au sein du Service Départementale d'Incendie et de Secours.</p>

            <a href="/devenirSp"><button type="button" class="btn btn-outline-light" id="joinButton">Devenez Sapeur-Pompier</button></a>
        </div>
    </div>
</div>

    <div class="container info-container">
            <div class="row text-r">
                <div class="col-12">
                    <h2 class="text-center text-intervention">403 Interventions</h2>
                </div>
            </div>

        <div class="row text-r">
            <div class="col-md-4">
                <h3>253 Interventions de Secours</h3>
                <hr class="br">
                <!-- TODO: Faire Intervention Secours -->
                <p>Les Sapeurs-Pompiers du Haut-Rhin ont fait face à 34 814 Interventions concernant du secours à victime, notre centre à participé à 253 interventions</p>

            </div>
            <div class="col-md-4">
                <h3>53 Incendies</h3>
                <hr class="br">
                <!-- TODO: Faire Intervention Incendie -->
                <p>53 Incendie ayant eux lieux dans le haut-Rhin ont nécessité sur 3880 fois l'interventions du centre des Deux Ferrette</p>
            </div>

            <div class="col-md-4">
                <h3>97 Interventions Diverses</h3>
                <hr class="br">
                <!-- TODO: Faire Diverses -->
                <p> Notre centre à été déclenché 97 fois pour des interventions diverse comme des captures d'animaux, protections des biens etc...</p>
            </div>

        </div>
    </div>
<div class="container-fluid br info-container">
    <div class="row">
        <div class="col-12 text-center text-light">
            <h1 class="text-light"> Nos dernières Interventions</h1>
 @foreach($intervention as $intervention)
                <hr class="bg-light">
                <h2>Intervention</h2>
                <p>Type: {{ $intervention->type_intervention }}</p>
                <p>Date: {{ $intervention->intervention_date }}</p>
                <p>Véhicule du centre: {{ $intervention->inter_vehicle }}</p>
                <p>Véhicule hors centre: {{ $intervention->extra_vehicle }}</p>

            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid info-container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-r text-intervention">Nos véhicules</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/FPT2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Fourgon Pompe Tonne Hors Route</h4>
                    <hr class="br">
                    <!-- TODO: Faire description FPTHR -->
                    <p class="card-text">Le Fourgon Pompe Tonne Hors Route est un engin pompe sur un chassis 4x4, permettant d'emprunter des routes escarpées.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/vlhr1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Véhicule Léger Hors Route</h4>
                    <hr class="br">
                    <!-- TODO: Faire description VLHR -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/vlcdg1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Véhicule Léger Chef De Groupe</h4>
                    <hr class="br">
                    <!-- TODO: Faire description VLCDG -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/vtu.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Véhicule Tout Usage</h4>
                    <br>
                    <hr class="br">
                    <!-- TODO: Faire description VTU -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
