@extends('layouts.index')

@section('pageTittle', 'Actualizar Libro')

@section('contenido')
    <div class="row mt-3">
        <form action="{{ route('libros.update', $libro->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $libro->titulo }}">
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control" value="{{ $libro->autor }}">
            </div>
            <div class="form-group">
                <label for="anio_publicacion">Año de publicación:</label>
                <input type="text" name="anio_publicacion" id="anio_publicacion" class="form-control" value="{{ $libro->anio_publicacion }}">
            </div>
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $libro->categoria }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
