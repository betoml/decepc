@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')

<div>
    <video id="my-video" class="video-js vjs-default-skin" controls preload="auto" data-setup="{}">
        <source src="" type="video/mp4" />
    </video>
</div>

@push('scripts')
    <script>
      var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        
        // Obtener la URL del sessionStorage
        var videoURL = sessionStorage.getItem('video_url');
        
        // Establecer la URL como atributo src de la etiqueta source
        var videoSource = document.querySelector('#my-video source');
        videoSource.setAttribute('src', videoURL);
        
        // Obtener la referencia al elemento de video
        var videoElement = document.getElementById('my-video');
        
        // Recargar el reproductor de video
        videoElement.load();
        
        var player = videojs('my-video', {
            width: screenWidth,
            controlBar: {
                skipButtons: {
                    backward: 10,
                    forward: 10
                }
            }
        });
    </script>
@endpush
@endsection