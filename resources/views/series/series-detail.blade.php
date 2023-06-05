@extends('layout.app')
@section('title')
    Peliculas
@endsection
@section('content')
    @livewireStyles


    <style>
        .coverPrincipal {
            position: fixed;
            width: 100%;
            height: 100vh;
            background-color: rgb(0, 0, 0, 0.7);
            overflow: auto;


        }

        /*         .coverPrincipal::before {
                            content: "";
                            position: relative;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100vh;
                  
                            opacity: 0.4;
                            filter: blur(10px);
                            -ms-filter: blur(10px);
                        } */
        body {
            background-image: url('https://www.themoviedb.org/t/p/original/{{ $peliculas['img_portada_series'] }}') !important;
            background-size: cover;
            background-repeat: no-repeat;



        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://www.themoviedb.org/t/p/original/{{ $peliculas['img_portada_series'] }}') !important;
            background-size: cover;

            background-repeat: no-repeat;
            filter: blur(10px);
            -ms-filter: blur(10px);
            z-index: -1;
        }

        .contentContainer {
            position: relative;
            z-index: 1;

            display: flex;
            align-items: center;
            justify-content: center;

        }
    </style>

    <div class="coverPrincipal mt-5 pt-5 mb-5">
        <div class="contentContainer">
            <!-- Contenido adicional aquí -->

            <div class="container mb-5">
                <div class="row mb-5">
                    <div class="col-md-3">
                        <img class="img-fluid shadows-lg"
                            src="https://www.themoviedb.org/t/p/original/{{ $peliculas['img_portada_series'] }}"
                            alt="" srcset="">
                    </div>
                    <div class="col-md-9 text-white d-flex align-items-between">
                        <div class="row">
                            <div class="col-md-12">


                                <h1>{{ $peliculas['titulo_series'] }}</h1>

                                <p>{{ $peliculas['genero1'] }} {{ $peliculas['genero2'] }} {{ $peliculas['genero3'] }} ||
                                    Temporadas: {{ $peliculas['temporadas'] }}</p>
                                <p>{{ $peliculas['descripcion_series'] }}</p>
                                @php
                                    $url = $_SERVER['REQUEST_URI'];
                                    
                                    $lastSlashPos = strrpos($url, '/');
                                    $lastNumbers = substr($url, $lastSlashPos + 1);
                                    
                                @endphp
                            </div>
                            <pre>
                      
 
                        </pre>
                        </div>
                    </div>
                    <div class="accordion accordion-flush  " id="accordionFlushExample">
                        @foreach ($tempDatas as $tempData)
                            @php
                                $tempDataObject = json_decode(json_encode($tempData));
                                $cadena = key((array) $tempDataObject);
                                $numero = preg_replace('/[^0-9]/', '', $cadena);
                                $capitulos = $tempDataObject->$cadena;
                                $conteo = count($capitulos);
                            @endphp

                            <div class="accordion-item  ">
                                <h2 class="accordion-header " id="flush-heading{{ $numero }}">
                                    <button class="accordion-button collapsed tarjeta bgdarkgradient  colorTxt "
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-{{ $numero }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $numero }}">
                                        {{ $cadena }}
                                    </button>
                                </h2>
                                <div id="flush-{{ $numero }}" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading{{ $numero }}"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body bgdarkgradient gridCapitulos">
                                        @foreach ($capitulos as $episodio)
                                            <div class="text-white tarjeta">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img src="{{ $episodio->miniatura }}" class="w-100 rounded p-2"
                                                            alt="" srcset="">
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <p class="colorTxt"> {{ $episodio->titulo }}</p>
                                                        <p class=""> {{ $episodio->descripcion }}</p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="button" onclick="verVideo('{{$episodio->url_1080_s}}')"
                                                            class="btn w-100 colorPrincipal text-white">REPRODUCIR</button>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach


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



        @livewireScripts
    @endsection
