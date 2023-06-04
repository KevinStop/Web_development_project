@extends('layouts.index')

@section('pageTittle', 'Agregar Libro')

<style>
    .custom-input {
        max-width: 450px;
    }
</style>

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
                <input type="text" name="titulo" id="titulo" class="form-control custom-input" value="{{ old('titulo') }}" required>
                @error('titulo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="autor">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control custom-input" value="{{ old('autor') }}" required>
                @error('autor')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="anio_publicacion">Año de publicación:</label>
                <input type="text" name="anio_publicacion" id="anio_publicacion" class="form-control custom-input" pattern="[0-9]+" value="{{ old('anio_publicacion') }}" required>
                <div id="anio_publicacion_error" class="text-danger" style="display: none;">Ingrese un número entero válido.</div>
                @error('anio_publicacion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="categoria">Categoría:</label>
                <input type="text" name="categoria" id="categoria" class="form-control custom-input" value="{{ old('categoria') }}" required>
                @error('categoria')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-3">Agregar</button>
            <a href="{{ route('libros') }}" class="btn btn-secondary mb-3">Regresar</a>
        </form>
    </div>

    <script>
        document.getElementById('titulo').addEventListener('input', function() {
            var tituloInput = document.getElementById('titulo');
            var tituloError = document.getElementById('titulo_error');
            tituloError.style.display = (tituloInput.value.trim() === '') ? 'block' : 'none';
        });

        document.getElementById('autor').addEventListener('input', function() {
            var autorInput = document.getElementById('autor');
            var autorError = document.getElementById('autor_error');
            autorError.style.display = (autorInput.value.trim() === '') ? 'block' : 'none';
        });

        document.getElementById('anio_publicacion').addEventListener('input', function() {
            var anioPublicacionInput = document.getElementById('anio_publicacion');
            var anioPublicacionError = document.getElementById('anio_publicacion_error');
            anioPublicacionError.style.display = (anioPublicacionInput.value.trim() === '' || !Number.isInteger(Number(anioPublicacionInput.value))) ? 'block' : 'none';
        });

        document.getElementById('categoria').addEventListener('input', function() {
            var categoriaInput = document.getElementById('categoria');
            var categoriaError = document.getElementById('categoria_error');
            categoriaError.style.display = (categoriaInput.value.trim() === '') ? 'block' : 'none';
        });
    </script>
@endsection
