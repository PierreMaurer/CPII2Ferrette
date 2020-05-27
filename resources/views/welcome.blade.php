@extends ('layout')
@section('content')
    <div class="container-fluid br info-container">
        <div class="row">
            <div class="col-md-4 col-info">
                <i class="fas fa-fire fa-3x"></i>
                <hr class="bg-light">
                <h2 class="text-light text-center">Interventions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto doloremque eius
                    eveniet explicabo facilis id illo ipsam molestiae, numquam odio officia optio quae quas, quisquam
                    quo recusandae repudiandae tempore.
                </p>
            </div>
            <div class="col-md-4 col-info">
                <i class="fas fa-phone-alt fa-3x"></i>
                <hr class="bg-light">
                <h2 class="text-light text-center">Les Numéros d'urgences</h2>
                <p>Les principaux numéros d'urgences sont le 18 pour les Sapeurs-Pompiers, le 15 pour le SAMU, le 17 pour la Police et le 112 le Numéro d'urgence Européen.
                </p>
            </div>
            <div class="col-md-4 col-info">
                <i class="fas fa-handshake fa-3x"></i>
                <hr class="bg-light">
                <h2 class="text-light text-center">L'Amicale</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto doloremque eius
                    eveniet explicabo facilis id illo ipsam molestiae, numquam odio officia optio quae quas, quisquam
                    quo recusandae repudiandae tempore.
                </p>
            </div>
        </div>
    </div>
</div>

    <div class="container event-soon">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Nos évenements à venir !</h1>
                <hr>
            </div>
        </div>
    </div>
<!-- Todo : Remake design of the calendar -->
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
