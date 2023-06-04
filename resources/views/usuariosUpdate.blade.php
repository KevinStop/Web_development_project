@extends('layouts.index')

@section('Titulo Pagina', 'Actualizar usuario')

    @section('contenido')
        <div class="row mt-3">
            <h3>Actualizar un usuario</h3>
            <form action="{{route("usuarios.update",$usuario -> id)}}" method="post">
                @csrf
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$usuario -> nombre}}">
                <br>
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required value="{{$usuario -> apellido}}">
                <br>
                <label for="">Correo</label>
                <input type="email" name="correo" class="form-control" required value="{{$usuario -> correo}}">
                <br>
                <label for="">Telefono</label>
                <input type="number" name="telefono" class="form-control" required value="{{$usuario -> telefono}}">
                <br>
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" required value="{{$usuario -> direccion}}">
                <br>
                <a href="{{route("usuarios")}}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-success">Actualizar</button>
            </form>
        </div>

@endsection

