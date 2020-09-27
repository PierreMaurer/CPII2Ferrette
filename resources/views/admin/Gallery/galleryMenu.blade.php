@extends('layout')


@section('content')

    <div class="container-fluid br info-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-light">Gestion Gallerie Photo</h1>
                <hr class="bg-light">
                <p class="text-light"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi architecto autem beatae blanditiis dicta eos eum, excepturi hic ipsa minima molestiae, odit officiis omnis qui quidem quis repellat tenetur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto asperiores est ipsa molestias nostrum odit praesentium ullam? Ab animi atque beatae culpa dolore ea illum, maxime nemo quod tempore? </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center">
                <form>
                    <div class="form-group text-center">
                        <label for="exampleFormControlFile1" class="text-light font-weight-bold">Ajouter une image à la gallerie</label>
                        <!--  TODO: Fix: Center Input -->
                        <input type="file" class="form-control-file text-light" style="margin: 0 auto;" id="exampleFormControlFile1">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
