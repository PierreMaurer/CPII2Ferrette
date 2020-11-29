@extends ('layout')
@section('content')
    <div class="container-fluid">
        <div class="row br info-container">
            <div class="col-md-4 col-info ml-auto">
                <i class="fas fa-fire fa-3x"></i>
                <hr class="bg-light">
                <h2 class="text-light text-center">Interventions</h2>
                <!-- TODO: Faire description Interventions -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto doloremque eius
                    eveniet explicabo facilis id illo ipsam molestiae, numquam odio officia optio quae quas, quisquam
                    quo recusandae repudiandae tempore.
                </p>
            </div>
            <div class="col-md-4 col-info">
                <i class="fas fa-phone-alt fa-3x"></i>
                <hr class="bg-light">
                <h2 class="text-light text-center">Les Numéros d'urgences</h2>
                <!-- TODO: Faire description Numeros d'urgence -->
                <p>Les principaux numéros d'urgences sont le 18 pour les Sapeurs-Pompiers, le 15 pour le SAMU, le 17 pour la Police et le 112 le Numéro d'urgence Européen.
                </p>
            </div>
            <div class="col-md-4 col-info">
                <i class="fas fa-handshake fa-3x"></i>
                <hr class="bg-light">
                <h2 class="text-light text-center">L'Amicale</h2>
                <!-- TODO: Faire description Amicale -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto doloremque eius
                    eveniet explicabo facilis id illo ipsam molestiae, numquam odio officia optio quae quas, quisquam
                    quo recusandae repudiandae tempore.
                </p>
            </div>
        </div>
    </div>

</div>

<!-- Todo : Remake design of the calendar -->
    <div class="container-fluid event-soon">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Nos évenements à venir !</h1>
                <hr>
            </div>
        </div>
        @foreach($event as $evenement)
        <div class="row">

            <div class="col-md-2 text-right d-none d-lg-block d-xl-block">
                <h1 class="display-4"><span class="badge br text-light">{{ $evenement->EventDate->format('d') }}</span></h1>
                <h2>{{ $evenement->EventDate->format('M')}}</h2>
            </div>
            <div class="col-md-10">
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
