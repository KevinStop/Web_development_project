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
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{ $dato->usuario_id }}</td>
                        <td>{{ $dato->libro_id }}</td>
                        <td>{{ $dato->fecha_prestamo }}</td>
                        <td>{{ $dato->fecha_devolucion }}</td>
                        <td>
                            <form action="{{ route('prestamos.edit', $dato->id) }}" method="get">
                                <button class="btn btn-warning btn-sm">Actualizar</button>
                            </form>
                        </td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
