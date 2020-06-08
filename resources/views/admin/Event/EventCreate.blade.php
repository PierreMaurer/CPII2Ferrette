@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 br text-light text-center">
                <h1>Crée un Evenement</h1>
                <hr class="bg-light">
            </div>
        </div>
        <div class="row br text-light justify-content-center">
            <div class="col-0">
                <form method="POST" action="/admin/event" >
                    @csrf


                    <div class="field">
                        <label class="label" for="title">Titre de l'évenement</label>
                        @error('title')
                        <article class="message is-danger">
                            <div class="message-header">
                                <div class="alert alert-danger" role="alert">
                                    {{$errors->first('title')}}
                                </div>
                            </div>
                        </article>
                        @enderror
                        <div class="control">
                            <input class="input form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="description">Description</label>
                        @error('description')
                        <article class="message is-danger">
                            <div class="message-header">
                                <div class="alert alert-danger" role="alert">
                                    {{$errors->first('description')}}
                                </div>
                            </div>
                        </article>
                        @enderror
                        <div class="control">
                            <textarea class="form-control" name="description" id="description" value="{{old('description')}}"></textarea>

                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="Adresse">Adresse</label>
                        @error('Adresse')
                        <article class="message is-danger">
                            <div class="message-header">
                                <div class="alert alert-danger" role="alert">
                                    {{$errors->first('Adresse')}}
                                </div>
                            </div>
                        </article>
                        @enderror
                        <div class="control">
                            <input type="text" class="form-control" name="Adresse" id="Adresse" value="{{old('Adresse')}}">
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
                            <input class="input form-control" type="text" name="city" id="city" value="{{ old('city') }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="EventDate">Date</label>
                        @error('EventDate')
                        <article class="message is-danger">
                            <div class="message-header">
                                <div class="alert alert-danger" role="alert">
                                    {{$errors->first('EventDate')}}

                                </div>
                            </div>
                        </article>
                        @enderror
                        <div class="control">
                            <input type="datetime-local" name="EventDate" class="form-control" id="EventDate" value="{{old('EventDate')}}">
                        </div>
                    </div>
                    <button class="btn btn-outline-light InterventionButton"  type="submit">Submit</button>





                </form>
            </div>
        </div>
    </div>
@endsection
