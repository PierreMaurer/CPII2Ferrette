@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container-fluid text-light  text-center br">
            <h1 class="heading has-text-weight-bold is-size-4">Modification Intervention</h1>



            <form method="POST" action="/admin/intervention/{{$intervention->id}}" >
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="title">Type d'intervention</label>

                    <div class="control">
                        <input class="input form-control" type="text" name="type_intervention" id="type_intervention" value="{{$intervention->type_intervention}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="inter_vehicle">Véhicule du Centre</label>

                    <div class="control">
                        <input class="input form-control" type="text" name="inter_vehicle" id="inter_vehicle" value="{{$intervention->inter_vehicle}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="extra_vehicle">Véhicule Hors Centre</label>

                    <div class="control">
                        <input class="input form-control" type="text" name="extra_vehicle" id="extra_vehicle" value="{{$intervention->extra_vehicle}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="date">Date</label>

                    <div class="control">
                        <input type="datetime-local" name="intervention_date" class="form-control" id="intervention_date" value="{{ \Carbon\Carbon::parse($intervention->intervention_date)->format('dd-MM-yyyyThh:mm')}}}}">
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
