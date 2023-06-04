@extends('layouts.index')

@section('Titulo Pagina', 'Actualizar usuario')

    @section('contenido')
        <div class="row mt-3">
            <h3>Actualizar un usuario</h3>
            <form action="{{route("usuarios.update",$usuario -> id)}}" method="post" id="formulario">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required value="{{$usuario -> nombre}}">
                <small id="error-nombre" class="text-danger"></small>
                <br>
                <label for="">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required value="{{$usuario -> apellido}}">
                <small id="error-apellido" class="text-danger"></small>
                <br>
                <label for="">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" required value="{{$usuario -> correo}}">
                <small id="error-correo" class="text-danger"></small>
                <br>
                <label for="">Telefono</label>
                <input type="number" name="telefono" id="telefono" class="form-control" required value="{{$usuario -> telefono}}">
                <small id="error-telefono" class="text-danger"></small>
                <br>
                <label for="">Direccion</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required value="{{$usuario -> direccion}}">
                <small id="error-direccion" class="text-danger"></small>
                <br>
                <a href="{{route("usuarios")}}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-success" onclick="validarFormulario(event)">Actualizar</button>
            </form>
        </div>

        <script>
            function validarFormulario(event) {
                event.preventDefault(); // Evitar que se envíe el formulario automáticamente
        
                // Obtener los valores de los campos
                var nombre = document.getElementById('nombre').value;
                var apellido = document.getElementById('apellido').value;
                var telefono = document.getElementById('telefono').value;
        
                // Expresiones regulares para validar los campos
                var textoRegex = /^[a-zA-Z\s]+$/;
                var telefonoRegex = /^\d{10}$/;
        
                // Validar el campo Nombre
                if (!nombre.match(textoRegex)) {
                    mostrarError('nombre', 'El campo Nombre solo puede contener letras y espacios');
                    return;
                } else {
                    ocultarError('nombre');
                }
        
                // Validar el campo Apellido
                if (!apellido.match(textoRegex)) {
                    mostrarError('apellido', 'El campo Apellido solo puede contener letras y espacios');
                    return;
                } else {
                    ocultarError('apellido');
                }
        
                // Validar el campo Telefono
                if (!telefono.match(telefonoRegex)) {
                    mostrarError('telefono', 'El campo Telefono debe tener exactamente 10 números');
                    return;
                } else {
                    ocultarError('telefono');
                }
        
                // Si todos los campos son válidos, enviar el formulario
                document.getElementById('formulario').submit();
            }
        
            function mostrarError(campo, mensaje) {
                var elementoError = document.getElementById('error-' + campo);
                elementoError.innerHTML = mensaje;
                elementoError.style.display = 'block';
            }
        
            function ocultarError(campo) {
                var elementoError = document.getElementById('error-' + campo);
                elementoError.innerHTML = '';
                elementoError.style.display = 'none';
            }
        </script>

@endsection

