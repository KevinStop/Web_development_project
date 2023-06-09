@extends('layouts.index')

@section('pageTitle', 'Actualizar Libro')

<style>
    .custom-input {
        width: 300px;
    }
</style>

@section('contenido')
    <div class="row mt-3">
        <form action="{{ route('libros.update', $libro->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control custom-input" value="{{ $libro->titulo }}">
            </div>
            <div class="form-group mb-3">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control custom-input" value="{{ $libro->autor }}">
            </div>
            <div class="form-group mb-3">
                <label for="anio_publicacion">Año de publicación:</label>
                <input type="text" name="anio_publicacion" id="anio_publicacion" class="form-control custom-input" value="{{ $libro->anio_publicacion }}">
                @error('anio_publicacion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="categoria">Categoría:</label>
                <input type="text" name="categoria" id="categoria" class="form-control custom-input" value="{{ $libro->categoria }}">
            </div>
            <div class="d-flex">
                <a href="{{ route('libros') }}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-primary me-2">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
