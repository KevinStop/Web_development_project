@extends('layouts.index')

@section('Titulo Pagina', 'Usuarios')

@section('contenido')
<div class="row mt-3">
    <table class="table table-striped">
        <br>
            <p>
                <a href="{{route("usuarios.create")}}">Ingresar nuevo usuario</a>
            </p>
        <br>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th >Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dato)
            <tr>
                <td>{{ $dato->nombre }}</td>
                <td>{{ $dato->apellido }}</td>
                <td>{{ $dato->correo }}</td>
                <td>{{ $dato->telefono }}</td>
                <td>{{ $dato->direccion }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <form action="{{route("usuarios.edit", $dato -> id)}}" method="get" class="px-3">
                            <button class="btn btn-outline-primary btn-sm">Actualizar</button>
                        </form>
                        <form action="{{route("usuarios.destroy", $dato -> id)}}" method="get">
                            <button class="btn btn-outline-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>        
</div>

@endsection
