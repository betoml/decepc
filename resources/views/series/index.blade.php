@extends('layouts.app')
@section('title')
    Series
@endsection
@section('content')

<div class="gridPeliculas mt-5 ">

    @if ($peliculas && $peliculas->getStatusCode() === 200)
        @php
            $data = json_decode($peliculas->getBody(), true);
      
        @endphp

        @foreach ($data as $pelicula)
            <div class="grid-item">
                <a href="/s/{{$pelicula['id_thmdb_series']}}">
                    <img src="https://www.themoviedb.org/t/p/original/{{ $pelicula['img_thumb_series'] }}"
                        class="w-100" alt="" srcset="">

                </a>
            </div>
        @endforeach
    @endif


</div>



@endsection