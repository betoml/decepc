@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.themoviedb.org/t/p/original/7I6VUdPj6tQECNHdviJkUHD2u89.jpg" class="d-block w-100"
                    alt="John Wick 4">
                <div class="carousel-caption d-none d-md-block">
                    <h5>John Wick 4</h5>
                    <p>John Wick descubre un camino para derrotar a La Mesa. Pero antes de poder ganar su libertad, Wick
                        deberá enfrentarse a un nuevo enemigo con poderosas alianzas en todo el mundo; y contra las fuerzas
                        que convierten a viejos amigos en enemigos.</p>
                </div>
            </div>
            <!-- Agrega más slides aquí -->
        </div>

        <!-- Controles -->
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>


  

@endsection