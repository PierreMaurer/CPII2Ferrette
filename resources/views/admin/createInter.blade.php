 @extends('layout')

 @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 br text-light text-center">
            <h1>Crée une intervention</h1>
            <hr class="bg-light">
        </div>
    </div>
    <div class="row br text-light justify-content-center">
        <div class="col-0">
            <form method="POST" action="/admin/intervention" >
                @csrf


                <div class="field">
                    <label class="label" for="type_intervention">Type d'intervention</label>
                    @error('type_intervention')
                    <article class="message is-danger">
                        <div class="message-header">
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('type_intervention')}}
                            </div>
                        </div>
                    </article>
                    @enderror
                    <div class="control">
                        <input class="input form-control" type="text" name="type_intervention" id="type_intervention" value="{{ old('type_intervention') }}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="city">Ville</label>
                    @error('city')
                    <article class="message is-danger">
                        <div class="message-header">
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('city')}}
                            </div>
                        </div>
                    </article>
                    @enderror
                    <div class="control">
                        <input type="text" class="form-control" name="city" id="city" value="{{old('city')}}">

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="vehicle">Véhicule</label>
                    @error('vehicle')
                    <article class="message is-danger">
                        <div class="message-header">
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('vehicle')}}
                            </div>
                        </div>
                    </article>
                    @enderror
                    <div class="control">
                        <input type="text" class="form-control" name="vehicle" id="vehicle" value="{{old('vehicle')}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="intervention_date">Date</label>
                    @error('vehicle')
                    <article class="message is-danger">
                        <div class="message-header">
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first('intervention_date')}}

                            </div>
                        </div>
                    </article>
                    @enderror
                    <div class="control">
                        <input type="datetime-local" name="intervention_date" class="form-control" id="intervention_date" value="{{old('intervention_date')}}">
                    </div>
                </div>
                        <button class="btn btn-outline-light" id="CreateIntervention" type="submit">Submit</button>





            </form>
        </div>
    </div>
</div>

 @endsection
