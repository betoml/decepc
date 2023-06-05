<!DOCTYPE html>
<html lang="en">
@unless (session()->has('token'))
    @php
        header('Location: ' . url('/'));
        exit();
    @endphp
@endunless

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
</head>

<body class="bgdarkgradient ">



    <nav class="navbar navbar-expand-lg navbar-light colorPrincipal text-white fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#"><img class="img-fluid" src="{{ asset('img/logo_blaco.png') }}"
                        style="max-width: 150px"></a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active d-flex align-items-center text-white" aria-current="page"
                            href="#">
                            <span class="material-symbols-outlined" style="font-size: 18px; color: white;">home</span>
                            Home
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link  d-flex align-items-center text-white" aria-current="page" href="/peliculas">
                            <span class="material-symbols-outlined" style="font-size: 18px; color: white;">
                                movie
                            </span>
                            Películas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  d-flex align-items-center text-white" aria-current="page" href="/series">
                            <span class="material-symbols-outlined" style="font-size: 18px; color: white;">
                                movie
                            </span>
                            Series
                        </a>
                    </li>


                </ul>
                <form  action="#" class="d-flex" method="GET">
                    @csrf
                    <input name="termino" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn colorPrincipal" type="submit">
                        <span class="material-symbols-outlined text-white">
                            search
                        </span>
                    </button>
                </form>
                <div class="dropdown mr-5">
                    <button class="btn colorPrincipal text-white dropdown-toggle d-flex align-items-center w-100"
                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-symbols-outlined">
                            account_circle
                        </span>
                        {{ session('nombre') }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end bgdarkgradient " aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item colorTxt" href="#" style="color: #ff0000">Perfil</a></li>
                        <li><a class="dropdown-item colorTxt" href="#" style="color: #ff0000">Salir</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </nav>


    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

<script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>



    @stack('scripts')
</body>

</html>
