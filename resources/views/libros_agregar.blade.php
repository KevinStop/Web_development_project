@extends('layouts.index')

@section('pageTittle', 'Agregar Libro')

@section('contenido')
    <div class="row mt-3">
        <form action="{{ route('libros.store') }}" method="post">
            @csrf
            <!-- Mostrar mensajes de error -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="form-group mb-3">
                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}">
                @error('titulo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control" value="{{ old('autor') }}">
                @error('autor')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="anio_publicacion">Año de publicación:</label>
                <input type="text" name="anio_publicacion" id="anio_publicacion" class="form-control" value="{{ old('anio_publicacion') }}">
                @error('anio_publicacion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="categoria">Categoría:</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="{{ old('categoria') }}">
                @error('categoria')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-4">Agregar</button>
        </form>
    </div>
@endsection
