@extends('layout')

@section('content')

    <div class="container-fluid br">
        <div class="row info-container">
            <div class="col-12 text-center">
                <h1 class="text-light">L'Amicale</h1>
                <hr class="bg-light">
                <!-- TODO: Faire description Amicale -->
                <p class="text-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi architecto autem beatae blanditiis dicta eos eum, excepturi hic ipsa minima molestiae, odit officiis omnis qui quidem quis repellat tenetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto asperiores est ipsa molestias nostrum odit praesentium ullam? Ab animi atque beatae culpa dolore ea illum, maxime nemo quod tempore? </p>

                <a href="/"><button type="button" class="btn btn-outline-light" id="joinButton" href="/">Rejoindre l'amicale</button></a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row info-container">
            <div class="col-12 text-center">
                <h1 class="text-r text-intervention">Nos Locations</h1>
                <hr class="mb-5 br">

            </div>
        </div>

        <div class="row info-container">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/vtu.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- TODO: Faire Fiche location -->
                        <h4>Remorque Frigorifique</h4>
                        <hr class="br">

                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/vtu.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- TODO: Faire Fiche location -->
                        <h4>Four ?? tarte flamb??e</h4>
                        <hr class="br">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/vtu.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- TODO: Faire Fiche location -->
                        <h4>Barbecue</h4>
                        <hr class="br">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/vtu.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- TODO: Faire Fiche location -->
                        <h4>Remorque</h4>
                        <br>
                        <hr class="br">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row br">
            <div class="col-md-12 text-center pt-5 mb-5">
                <!-- TODO: Check style of this col -->
                <p class="text-light">Pour effectuer une location, merci de nous contacter sur la page <a class="font-weight-bold text-light" href="/contact"><u>Contact</u></a> ou de contacter le num??ro suivant: </p>

            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row text-r pt-3">
            <div class="col-12">
                <h2 class="text-center pb-2">Evenement ?? venir</h2>
                <hr class="br">
            </div>
        </div>
        @foreach($event as $evenement)
            <div class="row pb-3">

                <div class="col-2 text-right d-none d-lg-block d-xl-block">
                    <h1 class="display-4"><span class="badge br text-light">{{ $evenement->EventDate->format('d') }}</span></h1>
                    <h2>{{ $evenement->EventDate->format('M')}}</h2>
                </div>
                <div class="col-10">
                    <h3 class="text-uppercase"><strong>{{ $evenement->title }}</strong></h3>
                    <ul class="list-inline">
                        <!-- Todo Fix: Separate the date en the time for the calendar -->
                        <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $evenement->EventDate }}</li>
                        <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 17H30 - 1H00</li>
                        <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> {{ $evenement->city }} - {{$evenement->Adresse}}</li>
                    </ul>
                    <p>{{ $evenement->description }}.</p>
                </div>
            </div>
        @endforeach
    </div>

@endsection
