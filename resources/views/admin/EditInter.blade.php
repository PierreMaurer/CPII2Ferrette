@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Modification Intervention</h1>



            <form method="POST" action="/admin/intervention/{{$intervention->id}}" >
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="title">Type d'intervention</label>

                    <div class="control">
                        <input class="input" type="text" name="type_intervention" id="type_intervention" value="{{$intervention->type_intervention}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="city">Ville</label>

                    <div class="control">
                        <input class="input" type="text" name="city" id="city" value="{{ $intervention->city }}">

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Véhicule</label>

                    <div class="control">
                        <input class="input" type="text" name="vehicle" id="vehicle" value="{{$intervention->vehicle}}">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Modifier</button>


                    </div>
                </div>



            </form>
        </div>
    </div>
    </div>
@endsection
