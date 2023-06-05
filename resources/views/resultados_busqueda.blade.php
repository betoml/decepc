@extends('layouts.app')

@section('title')

Buscar
@endsection


@section('content')

<br><br>

{{-- @foreach ($series as $serie) --}}
  {{--   <p class="text-white">{{$serie['id_thmdb_series']}}</p> --}}
    <div class="container tarjeta bgdarkgradient mt-5  p-3 ">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="text-white btn colorPrincipal m-2 active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Series</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="text-white btn colorPrincipal m-2" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Películas</button>
            </li>

          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
           
                <div class="gridPeliculas">
                    @foreach ($series as $serie) 
                    <a href="/s/{{$serie['id_thmdb_series']}}">
                        <img src="https://www.themoviedb.org/t/p/original/{{ $serie['img_thumb_series'] }}"
                        class="w-100" alt="" srcset="">
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                
                <div class="gridPeliculas">
                    @foreach ($peliculas as $pelicula) 
                    <a href="/p/{{$pelicula['id_thmdb']}}">
                        <img src="https://www.themoviedb.org/t/p/original/{{ $pelicula['img_thumb'] }}"
                        class="w-100" alt="" srcset="">
                    </a>
                    @endforeach
                </div>

            </div>
     
          </div>
    </div>
<br><br>
{{-- @endforeach --}}

@endsection