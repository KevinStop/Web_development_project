<?php

namespace App\Http\Controllers;

use App\Models\prestamos;
use App\Models\Libro;
use App\Models\usuarios;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = prestamos::all();
        return view('prestamos', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $libros = Libro::all();
        $usuarios = usuarios::all();
        return view('prestamo_create', compact('usuarios', 'libros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $prestamo = new Prestamos;
        $prestamo->usuario_id = $request->post('usuario_id');
        $prestamo->libro_id = $request->post('libro_id');
        $prestamo->fecha_prestamo = $request->post('fecha_prestamo');
        $prestamo->fecha_devolucion = $request->post('fecha_devolucion');

        $prestamo->save();

        return redirect()->route('prestamos')->with('success', 'El préstamo se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(prestamos $prestamos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $prestamo = prestamos::find($id);
        $libros = Libro::all();
        $usuarios = usuarios::all();
        return view('prestamo_update', compact('prestamo', 'usuarios', 'libros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $prestamo = prestamos::find($id);
        $usuario = usuarios::where('nombre', $request->input('usuario_id'))->first();
        if ($usuario) {
            $prestamo->usuario_id = $usuario->id;
        }
        $prestamo->libro_id = $request->input('libro_id');
        $prestamo->fecha_prestamo = $request->input('fecha_prestamo');
        $prestamo->fecha_devolucion = $request->input('fecha_devolucion');
        $prestamo->save();

        return redirect()->route('prestamos');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $prestamos = prestamos::find($id);
        if ($prestamos) {

            $prestamos->delete();
            return redirect()->route('prestamos')->with('success', 'Usuario eliminado correctamente.');
        } else {

            return redirect()->route('prestamos')->with('error', 'No se encontró el usuario.');
        }
    }
}
