@extends('layouts.index')

@section('pageTittle', 'CRUD')

@section('contenido')
    <div class="row mt-3">
        <table class="table">
            <br>
            <p>
                <a href="{{ route('libros.create') }}" class="btn btn-primary">Agregar libro</a>
            </p>
            <br>
            <thead>
                <th>ISBN</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año de publicación</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                    <tr>
                        <td>{{ $libro->id }}</td>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                        <td>{{ $libro->categoria }}</td>
                        <td>
                            <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-warning btn-sm">Actualizar</a>
                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este libro?')">Eliminar</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
