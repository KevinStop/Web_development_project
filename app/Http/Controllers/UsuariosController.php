<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = usuarios::all();
        return view('usuarios', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostrar el formulario donde agregamos los datos
        return view('usuariosForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Guardar los datos en la base 
        $usuario = new usuarios();
        $usuario -> nombre = $request->post('nombre');
        $usuario -> apellido = $request->post('apellido');
        $usuario -> correo = $request->post('correo');
        $usuario -> telefono = $request->post('telefono');
        $usuario -> direccion = $request->post('direccion');
        $usuario -> save();
        return redirect()->route('usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //Traer los datos de la base y mostrarlos en el formulario
        $usuario = usuarios::find($id);
        return view('usuariosUpdate', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //Envia los datos para actualizarlos en la base de datos
        $usuario = usuarios::find($id);
        $usuario -> nombre = $request->post('nombre');
        $usuario -> apellido = $request->post('apellido');
        $usuario -> correo = $request->post('correo');
        $usuario -> telefono = $request->post('telefono');
        $usuario -> direccion = $request->post('direccion');
        $usuario -> save();
        return redirect()->route('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuarios $usuarios)
    {
        //
    }
}
