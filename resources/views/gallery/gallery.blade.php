@extends('layout')

@section('content')
    <div class="container-fluid br text-center text-light">
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <h1 class="InterventionButton">Galerie Photo</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, consequatur eos, esse et expedita, harum ipsum labore libero modi nam natus nostrum nulla pariatur quae quo quos repellat similique sit!</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
<br>

        <div class="row">
            @foreach($gallerys as $gallery)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mt-4">
                    <a href="{{"/uploads/" . $gallery->file }}" data-lity ><img class="card-img-top" src="{{asset("/uploads/" . $gallery->file) }}"></a>
            </div>
            @endforeach

        </div>
        <br>
        <div class="col-12 text-center justify-content-center">
            {{ $gallerys->links() }}
        </div>
    </div>



@endsection
