@extends('layouts.index')

@section('Titulo Pagina', 'Agregar usuario')

    @section('contenido')
        <div class="row mt-3">
            <h3>Agregar un usuario</h3>
            <form action="{{route('usuarios.store_usuario')}}" method="post">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <br>
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required>
                <br>
                <label for="">Correo</label>
                <input type="email" name="correo" class="form-control" required>
                <br>
                <label for="">Telefono</label>
                <input type="number" name="telefono" class="form-control" required>
                <br>
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" required>
                <br>
                <a href="{{ route('usuarios') }}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-primary">Agregar</button>
            </form>
        </div>

@endsection

