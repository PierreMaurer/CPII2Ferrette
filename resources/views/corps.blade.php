@extends('layout')

@section('content')
<div class="container-fluid br info-container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-light">Le Corps</h1>
            <hr class="bg-light">
            <p class="text-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi architecto autem beatae blanditiis dicta eos eum, excepturi hic ipsa minima molestiae, odit officiis omnis qui quidem quis repellat tenetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto asperiores est ipsa molestias nostrum odit praesentium ullam? Ab animi atque beatae culpa dolore ea illum, maxime nemo quod tempore? </p>

            <a href="/"><button type="button" class="btn btn-outline-light" id="joinButton" href="/">Devenez Sapeur-Pompier</button></a>
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
            <div class="col-4">
                <h3>253 Interventions de Secours</h3>
            </div>
            <div class="col-4">
                <h3>53 Incendies</h3>
            </div>

            <div class="col-4">
                <h3>97 Interventions Diverses</h3>
            </div>

        </div>
        <div class="row text-r">
            <div class="col-4">
                <hr class="br">
                <p>Les Sapeurs-Pompiers du Haut-Rhin ont fait face à 34 814 Interventions concernant du secours à victime, notre centre à participé à 253 interventions</p>
            </div>
            <div class="col-4">
                <hr class="br">
                <p>3 880 Incendie ayant eux lieux dans le haut-Rhin ont nécessité sur 53 fois l'interventions du centre des Deux Ferrette</p>
            </div>

            <div class="col-4">
                <hr class="br">
                <p> Notre centre à été déclenché 97 fois pour des interventions diverse comme des captures d'animaux, protections des biens etc...</p>
            </div>
        </div>
    </div>
<div class="container-fluid br info-container">
    <div class="row">
        <div class="col-12 text-center text-light">
            <h1 class="text-light"> Nos dernières Interventions</h1>
 @foreach($intervention as $intervention)
                <h2>Intervention</h2>
                <p>Adresse: {{ $intervention->city }}</p>
                <p>Type: {{ $intervention->type_intervention }}</p>
                <p>Date: {{ $intervention->intervention_date }}</p>
                <p>Véhicule: {{ $intervention->vehicle }}</p>
                <hr class="bg-light">
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid info-container">
    <div class="row">r
        <div class="col-12 text-center">
            <h1 class="text-r text-intervention">Nos véhicules</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/FPT.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Fourgon Pompe Tonne Hors Route</h4>
                    <hr class="br">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/vlhr.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Véhicule Léger Hors Route</h4>
                    <hr class="br">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/FPT.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Véhicule Léger Chef De Groupe</h4>
                    <hr class="br">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/FPT.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>Véhicule Tout Usage</h4>
                    <br>
                    <hr class="br">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection