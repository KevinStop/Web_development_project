@extends('layouts.index')

@section('Titulo Pagina', 'Actualizar Prestamo')

<style>
    .custom-input {
        max-width: 450px;
    }
</style>

@section('contenido')
    <div class="row mt-3">
        <h3 style="margin-bottom: 2%">Actualizar Prestamos</h3>
        <form action="{{ route('prestamos.update', $prestamo->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="usuario_id" style="margin-bottom: 1%">ID Usuario</label>
                <input type="number" id="usuario_id" name="usuario_id" class="form-control custom-input" required value="{{$prestamo -> usuario_id}}">
                <div id="usuario_id_error" class="text-danger" style="display: none;">No puede ingresar números negativos.</div>
            </div><br>
            <div class="form-group">
                <label for="libro_id" style="margin-bottom: 1%">Título del Libro</label>
                <label for="libro_id" style="margin-bottom: 1%">ID Libro</label>
                <input type="number" id="libro_id" name="libro_id" class="form-control custom-input" required value="{{$prestamo -> libro_id}}">
                <div id="libro_id_error" class="text-danger" style="display: none;">No puede ingresar números negativos.</div>
            </div><br>

            <div class="form-group">
                <label for="fecha_prestamo" style="margin-bottom: 1%">Fecha Prestamo</label>
                <input type="date" id="fecha_prestamo" name="fecha_prestamo" class="form-control custom-input" required value="{{$prestamo -> fecha_prestamo}}">
            </div><br>

            <div class="form-group">
                <label for="fecha_devolucion" style="margin-bottom: 1%">Fecha Devolucion</label>
                <input type="date" id="fecha_devolucion" name="fecha_devolucion" class="form-control custom-input" required value="{{$prestamo -> fecha_devolucion}}">
            </div><br>

            <div class="form-group">
                <a href="{{ route('prestamos') }}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-primary">Actualizar</button>
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
