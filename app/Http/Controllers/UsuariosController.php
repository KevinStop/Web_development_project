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
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Guardar los datos en la base 
        $producto = new usuarios();
        $producto -> nombre = $request->post('nombre');
        $producto -> descripcion = $request->post('descripcion');
        $producto -> proveedor = $request->post('proveedor');
        $producto -> fecha_elaboracion = $request->post('fecha_elaboracion');
        $producto -> save();
        return redirect()->route('usuarios.index');
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
        $producto = usuarios::find($id);
        return view('actualizar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //Envia los datos para actualizarlos en la base de datos
        $producto = usuarios::find($id);
        $producto -> nombre = $request->post('nombre');
        $producto -> descripcion = $request->post('descripcion');
        $producto -> proveedor = $request->post('proveedor');
        $producto -> fecha_elaboracion = $request->post('fecha_elaboracion');
        $producto -> save();
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuarios $usuarios)
    {
        //
    }
}
