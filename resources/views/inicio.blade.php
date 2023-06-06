@extends('layouts.index')

@section('Titulo Pagina', 'Biblioteca')

@section('contenido')
    <div class="container m-3">
        <div class="row m-3">
            <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center p-3">
                <img src="https://i.pinimg.com/564x/ac/e9/57/ace9572e87303799a938fbc5ca369f09.jpg" class="rounded-circle" width="80%" alt="">
            </div>
            <div class="col-md-6 col-sm-6 col-sm-6 d-flex flex-column justify-content-center align-items-center text-center">
                <h2 class="p-3 font-family-monospace text-secondary">ACERCA DE NUESTRA BIBLIOTECA</h2>
                <h1 class="p-3">Biblioteca en Línea</h1>
                <p class="p-1">Únase a nosotros en la Facultad de Educación en el campus de Illinois para un campamento de 5 días y 4 noches para explorar métodos de enseñanza innovadores, tecnología de educación avanzada y aprendizaje global.</p>
                <p class="p-1">Este campamento está diseñado para estudiantes de secundaria que están considerando una carrera en educación. ¡Ven a explorar tus intereses con nosotros!</p>
                <button class="btn btn-outline-dark">Leer más</button>
            </div>
        </div>
    </div>
@endsection
