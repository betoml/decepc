@extends('layouts.app')
@section('title')
    Peliculas
@endsection
@section('content')
    <style>
        .coverPrincipal {
            position: relative;
            width: 100%;
            height: 100vh;
            background-color: black;
            overflow: auto;
        }

        .coverPrincipal::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://www.themoviedb.org/t/p/original/{{ $peliculas['img_portada'] }}');
            background-size: cover;
            background-repeat: no-repeat;
            opacity: 0.4;
            filter: blur(10px);
            -ms-filter: blur(10px);
        }

        .contentContainer {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 50px;
            padding-bottom: 50px
        }
    </style>

    <div class="coverPrincipal mt-5">
        <div class="contentContainer">
            <!-- Contenido adicional aquí -->

            <div class="container mb-5">
                <div class="row mb-5">
                    <div class="col-md-3">
                        <img class="img-fluid shadows-lg"
                            src="https://www.themoviedb.org/t/p/original/{{ $peliculas['img_portada'] }}" alt=""
                            srcset="">
                    </div>
                    <div class="col-md-9 text-white d-flex align-items-between">
                        <div class="row">
                            <div class="col-md-12">


                                <h1>{{ $peliculas['titulo'] }}</h1>

                                <p>{{ $peliculas['genero1'] }} {{ $peliculas['genero2'] }} {{ $peliculas['genero3'] }} ||
                                    {{ $peliculas['duracion'] }} minutos</p>
                                <p>{{ $peliculas['descripcion'] }}</p>
                            </div>
                            <div class="col-md-12 ">
                                <button onclick="verVideo('{{ $peliculas['url_1080'] }}')"
                                    class="btn w-100 colorPrincipal text-white">REPRODUCIR</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        function verVideo(url) {

            sessionStorage.setItem('video_url', url);


            window.location.href = '/player';
        }
    </script>
@endsection
