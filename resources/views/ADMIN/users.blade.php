@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
    <div class="container tarjeta" style="margin-top: 100px">
        <div id="mensaje" class="alert colorPrincipal text-white text-white">
{{session('token')}}
        </div>
        <form id="add">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="nombres" placeholder="Nombre(s)">
                </div>
                <div class="col-md-6">
                    <input type="text" name="apellidos" placeholder="Apellido(s)">
                </div>
                <div class="col-md-6">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="col-md-6">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="col-md-6">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="col-md-6">
                    <input type="text" name="admin" placeholder="Admin">
                </div>
                <div class="col-md-6">
                    <input type="text" name="telefonos" placeholder="Telefono">
                </div>
                <div class="col-md-6">
                    <input type="text" name="planes_id" placeholder="Plan">
                </div>
                <div class="col-md-6">
                    <input id="fecha" type="date" name="vencimiento_plan" placeholder="Vencimiento">

                </div>
                <div class="col-md-12">
                    <button type="submit" class="w-100"> Registrar</button>
                </div>
            </div>

        </form>
    </div>
    <div class="container tarjeta text-white" style="margin-top: 50px">



        <div class="col-md-12">
            <button>Add</button>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr class=" text-white">
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Username</th>
                        <th>Admin</th>
                        <th>Email</th>
                        <th>Telefonos</th>
                        <th>Plan</th>
                        <th>Vencimiento Plan</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                    <tr class=" text-white">
                        <td>{{ $user['nombres_users'] }}</td>
                        <td>{{ $user['apellidos'] }}</td>
                        <td>{{ $user['username'] }}</td>
                        <td>{{ $user['admin'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['telefonos'] }}</td>
                        <td>{{ $user['planes_id'] }}</td>
                        <td>{{ $user['vencimiento_plan'] }}</td>
                        <td>
                            <button>Editar</button>
                            <button>Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        var myForm = document.getElementById('add');

        myForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar el envío tradicional del formulario

            var formData = new FormData(myForm);
  
            fetch('https://euforia-films.up.railway.app/api/register', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Obtener el mensaje del JSON de respuesta
                    const message = data.message;

                    // Mostrar el mensaje en la consola
                    console.log(message);

                    // Manipular el mensaje de acuerdo a tus necesidades
                    // Por ejemplo, puedes mostrarlo en un elemento HTML
                    const mensajeElement = document.getElementById('mensaje');
                    mensajeElement.textContent = message;
                })
                .catch(error => {
                    // Manejar errores
                    console.error(error);
                });
        });

        // Obtener la fecha actual
        var currentDate = new Date();

        // Calcular la fecha dentro de 90 días
        var futureDate = new Date();
        futureDate.setDate(currentDate.getDate() + 90);

        // Formatear la fecha en el formato 'yyyy-mm-dd'
        var formattedDate = futureDate.toISOString().split('T')[0];

        // Establecer el valor por defecto en el campo de fecha
        document.getElementById('fecha').value = formattedDate;
    </script>
@endsection
