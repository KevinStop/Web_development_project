<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros', compact('libros'));
    }

    public function create()
    {
        return view('libros_agregar');
    }

    public function store(Request $request)
    {
        $libro = new Libro;
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->anio_publicacion = $request->anio_publicacion;
        $libro->categoria = $request->categoria;
        $libro->save();

        return redirect()->route('libros.index')->with('success', 'Libro agregado correctamente');
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros_actualizar', compact('libro'));
    }

    public function update(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->anio_publicacion = $request->anio_publicacion;
        $libro->categoria = $request->categoria;
        $libro->save();

        return redirect()->route('libros.index')->with('success', 'Libro actualizado correctamente');
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('libros.index')->with('success', 'Libro eliminado correctamente');
    }
}
