@extends('layouts.index')

@section('pageTittle', 'Agregar Libro')

@section('contenido')
    <div class="row mt-3">
        <form action="{{ route('libros.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control">
            </div>
            <div class="form-group">
                <label for="anio_publicacion">Año de publicación:</label>
                <input type="text" name="anio_publicacion" id="anio_publicacion" class="form-control">
            </div>
            <div class="form-group">
                <label for="categoria">Categoría:</label>
                <input type="text" name="categoria" id="categoria" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection
