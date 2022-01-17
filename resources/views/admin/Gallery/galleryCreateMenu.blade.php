@extends('layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 br text-light text-center pt-5 pb-5">
                <h1>Importer une image</h1>
                <hr class="bg-light">
            </div>
        </div>
    </div>

        <div class="container-fluid mt-5 mb-5">
            <div class="row">
                <div class="col-12 text-center">
                    <form action="/admin/gallery" method="post" enctype="multipart/form-data">
                        <input type="file" name="img">
                        @csrf
                        <br>
                        <button type="submit" class=" mt-5 btn btn-outline-danger">Envoyer</button>
                    </form>


                </div>


            </div>


        </div>


@endsection
