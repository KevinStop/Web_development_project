@extends('layouts.index')

@section('Titulo Pagina', 'Ingresar Prestamos')

<style>
    .custom-input {
        max-width: 450px;
    }
</style>

@section('contenido')
    <div class="row mt-3">
        <h3 style="margin-bottom: 2%">Ingresar Prestamos</h3>
        <form action="{{ route('prestamos.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="usuario_id" style="margin-bottom: 1%">Usuario</label>
                <select id="usuario_id" name="usuario_id" class="form-control custom-input" required>
                    <option value="">Seleccionar Usuario</option>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{$usuario->id}}. {{ $usuario->nombre }}</option>
                    @endforeach
                </select>
                <div id="usuario_id_error" class="text-danger" style="display: none;">No puede ingresar números negativos.</div>
            </div><br>
        
            <div class="form-group">
                <label for="libro_id" style="margin-bottom: 1%">Libro</label>
                <select id="libro_id" name="libro_id" class="form-control custom-input" required>
                    <option value="">Seleccionar Libro</option>
                    @foreach($libros as $libro)
                        <option value="{{ $libro->id }}">{{ $libro->id }}. {{ $libro->titulo }}</option>
                    @endforeach
                </select>
                <div id="libro_id_error" class="text-danger" style="display: none;">No puede ingresar números negativos.</div>
            </div><br>
        
            <div class="form-group">
                <label for="fecha_prestamo" style="margin-bottom: 1%">Fecha Prestamo</label>
                <input type="date" id="fecha_prestamo" name="fecha_prestamo" class="form-control custom-input" required>
            </div><br>
        
            <div class="form-group">
                <label for="fecha_devolucion" style="margin-bottom: 1%">Fecha Devolucion</label>
                <input type="date" id="fecha_devolucion" name="fecha_devolucion" class="form-control custom-input" required>
            </div><br>
        
            <div class="form-group">
                <a href="{{ route('prestamos') }}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-primary">Agregar</button>
            </div><br>
        </form>
    </div>

    <script>
        document.getElementById('usuario_id').addEventListener('input', function() {
            var usuarioIdInput = document.getElementById('usuario_id');
            var usuarioIdError = document.getElementById('usuario_id_error');
            usuarioIdError.style.display = (usuarioIdInput.value < 0) ? 'block' : 'none';
        });

        document.getElementById('libro_id').addEventListener('input', function() {
            var libroIdInput = document.getElementById('libro_id');
            var libroIdError = document.getElementById('libro_id_error');
            libroIdError.style.display = (libroIdInput.value < 0) ? 'block' : 'none';
        });
    </script>

@endsection
