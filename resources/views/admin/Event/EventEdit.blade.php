@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container-fluid text-light  text-center br">

            <h1 class="heading has-text-weight-bold is-size-4">Modification Evenement</h1>



            <form method="POST" action="/admin/event/{{$eventSP->id}}" >
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="title">Titre de l'évenement</label>

                    <div class="control">
                        <input class="input form-control" type="text" name="title" id="title" value="{{$eventSP->title}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="description">Description</label>

                    <div class="control">
                        <input class="input form-control" type="text" name="description" id="description" value="{{ $eventSP->description }}">

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="Adresse">Adresse</label>

                    <div class="control">
                        <input class="input form-control" type="text" name="Adresse" id="Adresse" value="{{$eventSP->Adresse}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="city">Ville</label>

                    <div class="control">
                        <input class="input form-control" type="text" name="city" id="city" value="{{$eventSP->city}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="EventDate">Date</label>

                    <div class="control">
                        <input type="datetime-local" name="EventDate " class="form-control" id="EventDate" value="{{ \Carbon\Carbon::parse($eventSP->EventDate)->format('dd-MM-yyyyThh:mm')}}}}">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="btn btn-outline-light InterventionButton" type="submit">Modifier</button>


                    </div>
                </div>



            </form>
        </div>
    </div>
    </div>
@endsection
