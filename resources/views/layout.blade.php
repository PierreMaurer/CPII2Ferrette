<!DOCTYPE html>
<html lang="fr">

<head>

    <title></title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3cf9cc4b32.js" crossorigin="anonymous"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    @yield('header')
</head>
<body>
<header>
    <div id="topheader">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
            <a class="font-weight-bold navbar-brand " id="navbarTitle" href="/">CPII Deux Ferrette</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto font-weight-bold">
                    <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}">
                        <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'corps' ? 'active' : '' }}">
                        <a class="nav-link" href="/corps">Le Corps</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'amicale' ? 'active' : '' }}">
                        <a class="nav-link" href="/amicale">L'Amicale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Photo</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'devenirSp' ? 'active' : '' }}">
                        <a class="nav-link" href="/devenirSp">Devenir Sapeur-Pompier</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'contact' ? 'active' : '' }}">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
@if(Auth::check())
                    <li class="nav-item {{ Request::path() === 'admin' ? 'active' : '' }}">
                        <a class="nav-link" href="/admin">Administration</a>
                        @endif
                    </li>


                </ul>
            </div>
        </nav>
    </div>
    </div>
    <div class="jumbotron text-light text-center">
        <h1>CPII Deux Ferrette</h1>
        <h3>Bienvenue sur le site du Corps des Deux Ferrette</h3>
    </div>
</header>
    @yield('content')
<footer>
    <div class="footer br">
        <p class="text-light text-center copyright-text">© 2020 CPII Deux Ferrette. Tout droit réservé. By Pierre Maurer</p>

    </div>
</footer>
</body>


</html>
