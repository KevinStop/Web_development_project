@extends('layouts.index')

@section('Titulo Pagina', 'Ingresar Prestamos')

@section('contenido')
        <div class="row mt-3">
            <h3 style="">Ingresar Prestamos</h3>
            <form action="{{route("prestamos.store")}}" method="post">
                @csrf
                <label for="">ID Usuario</label>
                <input type="text" name="usuario_id" class="form-control" required>
                <br>
                <label for="">ID Libro</label>
                <input type="text" name="libro_id" class="form-control" required>
                <br>
                <label for="">Fecha Prestamo</label>
                <input type="text" name="fecha_prestamo" class="form-control" required>
                <br>
                <label for="">Fecha Devolucion</label>
                <input type="date" name="fecha_devolucion" class="form-control" required>
                <br>
                <a href="{{route("prestamos")}}" class="btn btn-secondary">Regresar</a>
                <button class="btn btn-primary">Agregar</button>
            </form>
        </div>
    @endsection