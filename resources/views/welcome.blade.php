<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
</head>

<body class="bgdarkgradient vh-100 d-flex align-items-center justify-content-center">

    <div class="col-md-6 tarjeta bgdarkgradient shadow-lg text-center ">
        <h1 class="text-white">LOGIN</h1>
        <div class="container">
            @if (session()->has('mensaje'))
                <div class="colorTxt">{{ session('mensaje') }}</div>
            @endif
            @if (session()->has('eliminarSesiones'))
                <button wire:click="eliminarSesiones({{ session('id') }})" class="btn colorPrincipal text-white w-100">
                    Click aquí para eliminar sesiones
                </button>
            @endif
            <form >
                <div class="row">
                    <div class="col-md-12 mt-3 ">

                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-12 mt-3">

                        <input  type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="col-md-12 mt-3 mb-3">

                        <button type="submit" class="btn colorPrincipal text-white w-100">INICIAR SESIÓN</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>