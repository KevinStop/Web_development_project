@extends('layouts.index')

@section('Titulo Pagina', 'Prestamos')

@section('contenido')
    <div class="row mt-3">
        <table class="table">
            <br>
            <p>
                <a href="{{ route('prestamos.create') }}" class="btn btn-primary">Ingresar Prestamo</a>
            </p>
            <br>
            <thead>
                <th>ID Usuario</th>
                <th>ID Libro</th>
                <th>Fecha prestamo</th>
                <th>Fecha devolucion</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{ $dato->usuario_id}}  {{ $dato->usuario->nombre }}</td>
                        <td>{{ $dato->libro_id }}  {{ $dato->libro->titulo }}</td>
                        <td>{{ $dato->fecha_prestamo }}</td>
                        <td>{{ $dato->fecha_devolucion }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <form action="{{ route('prestamos.edit', $dato->id) }}" method="get">
                                    <button class="btn btn-warning btn-sm" style="margin-right: 10px">Actualizar</button>
                                </form>
                                <form action="{{ route('prestamos.destroy', $dato->id) }}" method="get">
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
