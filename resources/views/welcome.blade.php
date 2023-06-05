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

    <div class="col-md-6 tarjeta bgdarkgradient shadow-lg text-center">
        <h1 class="text-white">LOGIN</h1>
        <div class="container">
            <div id="mensaje" class="colorPrincipal text-white"></div>
            @if (session()->has('mensaje'))
                <div class="colorTxt">{{ session('mensaje') }}</div>
            @endif
            @if (session()->has('eliminarSesiones'))
                <button class="btn colorPrincipal text-white w-100">
                    Click aquí para eliminar sesiones
                </button>
            @endif

            <form id="login">
                @csrf
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-12 mt-3">
                        <input name="password" type="password" class="form-control" placeholder="Password">
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
    <script>
        document.getElementById('login').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío del formulario por defecto

            var form = event.target;
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/auth'); // Reemplaza '/ruta-de-tu-api' por la URL de tu API

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        console.log(response.message);
                        if (response.code === 3) {
                            window.location.replace('/panel');
                        } else {
                            if (response.code === 1) {
                                document.getElementById('mensaje').innerHTML = response.message;
                            } else {
                                document.getElementById('mensaje').innerHTML = response.message;

                                const button = document.createElement('button');
                                button.textContent = 'Click para borrar las sesiones';
                                button.classList.add('colorPrincipal', 'btn', 'text-white', 'tarjeta', 'm-3');
                                button.onclick = function() {
                                    const userId = response.user.id;

                                    // Configurar los datos a enviar en la solicitud POST
                                    const data = {
                                        id: userId
                                    };

                                    // Realizar la solicitud AJAX con fetch() utilizando el método POST
                                    fetch('https://euforia-films.up.railway.app/api/logouts', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify(data)
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            // Mostrar el mensaje de la respuesta en el div con ID "mensaje"
                                            document.getElementById('mensaje').innerHTML = data.message;
                                        })
                                        .catch(error => {
                                            console.error('Error en la solicitud AJAX:', error);
                                        });
                                };

                                // Agregar el botón al documento
                                document.getElementById('mensaje').appendChild(button);
                            }
                        }

                    } else {
                        console.error('Error en la petición: ' + xhr.status);
                    }
                }
            };

            xhr.send(formData);
        });
    </script>
</body>

</html>
