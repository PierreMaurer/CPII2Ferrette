@extends('layout')


@section('content')
    <div class="container-fluid br info-container">
        <div class="row">
            <div class="col-4">


            </div>
            <div class="col-md-4 text-center">
                <h1 class="text-light">Contact</h1>
                <hr class="bg-light">
                <!-- TODO: Faire description Contact -->
                <p class="text-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi architecto autem beatae blanditiis dicta eos eum, excepturi hic ipsa minima molestiae, odit officiis omnis qui quidem quis repellat tenetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto asperiores est ipsa molestias nostrum odit praesentium ullam? Ab animi atque beatae culpa dolore ea illum, maxime nemo quod tempore? </p>
<!-- Todo: Make the form more beautyfull -->



                <form
                    class="text-light"
                    method="POST"
                    action="/contact"

                >
                    @csrf
                    <div class="form-group">
                        <label for="FirstName">Nom</label>
                        @error('name')
                        <article class="message is-danger">
                            <div class="message-header">
                                <div class="alert alert-danger" role="alert">
                                    {{$errors->first('name')}}
                                </div>
                            </div>
                        </article>
                        @enderror
                        <input type="text" class="form-control form-control-lg" name="name">
                    </div>

                    <div class="form-group">
                        <label for="LastName">Prénom</label>
                        @error('LastName')
                        <article class="message is-danger">
                            <div class="message-header">
                                <div class="alert alert-danger" role="alert">
                                    {{$errors->first('LastName')}}
                                </div>
                            </div>
                        </article>
                        @enderror
                        <input type="text" class="form-control" name="LastName">
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse mail</label>
                        @error('email')
                        <article class="message is-danger">
                            <div class="message-header">
                                <div class="alert alert-danger" role="alert">
                                    {{$errors->first('email')}}
                                </div>
                            </div>
                        </article>
                        @enderror
                        <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Votre message</label>
                        @error('message')
                        <article class="message is-danger">
                            <div class="message-header">
                                <div class="alert alert-danger" role="alert">
                                    {{$errors->first('message')}}
                                </div>
                            </div>
                        </article>
                        @enderror
                        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                    </div>

                        @if(session('message'))

                        <div class="alert alert-light mb-5 text-r" role="alert">
                            {{ session('message') }}
                        </div>
@endif
                    <button type="submit" class="mt-3 btn btn-outline-light">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container info-container">
        <div class="row text-r">
            <div class="col-md-12">
                <h2 class="text-center text-intervention">Evenement à venir</h2>
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
