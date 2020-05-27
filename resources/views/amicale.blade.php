@extends('layout')

@section('content')

    <div class="container-fluid br info-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-light">L'Amicale</h1>
                <hr class="bg-light">
                <p class="text-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi architecto autem beatae blanditiis dicta eos eum, excepturi hic ipsa minima molestiae, odit officiis omnis qui quidem quis repellat tenetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto asperiores est ipsa molestias nostrum odit praesentium ullam? Ab animi atque beatae culpa dolore ea illum, maxime nemo quod tempore? </p>

                <a href="/"><button type="button" class="btn btn-outline-light" id="joinButton" href="/">Rejoindre l'amicale</button></a>
            </div>
        </div>
    </div>

    <div class="container info-container">
        <div class="row text-r">
            <div class="col-12">
                <h2 class="text-center text-intervention">Evenement à venir</h2>
            </div>
        </div>
    </div>

    <div class="container event-soon">
        <div class="row">
            <div class="col-2 text-right">
                <h1 class="display-4"><span class="badge br text-light">21</span></h1>
                <h2>JUIN</h2>
            </div>
            <div class="col-10">
                <h3 class="text-uppercase"><strong>Fête de la musique</strong></h3>
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i>Dimanche</li>
                    <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 17H30 - 1H00</li>
                    <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Rue du Chateau</li>
                </ul>
                <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2 text-right">
                <h1 class="display-4"><span class="badge br text-light">24</span></h1>
                <h2>DEC</h2>
            </div>
            <div class="col-10">
                <h3 class="text-uppercase"><strong>Marché de Noël</strong></h3>
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Jeudi</li>
                    <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 00H01 - 23H59</li>
                    <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> CPI</li>
                </ul>
                <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>

@endsection
