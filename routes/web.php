<?php

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('inicio');});

<<<<<<< HEAD
//Usuarios
=======
//rutas para usuarios
>>>>>>> 70c0c3efa5b32d83055401feaf4a805997c0b958
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');
Route::get('/create', [UsuariosController::class, 'create']) -> name ('usuarios.create');
Route::get('/edit/{id}', [UsuariosController::class, 'edit']) -> name ('usuarios.edit');
Route::post('/store', [UsuariosController::class, 'store']) -> name ('usuarios.store');
Route::post('/update/{id}', [UsuariosController::class, 'update']) -> name ('usuarios.update');
Route::post('/destroy/{id}', [UsuariosController::class, 'destroy']) -> name ('usuarios.destroy');

<<<<<<< HEAD
//Libros
=======
//rutas para libros
>>>>>>> 70c0c3efa5b32d83055401feaf4a805997c0b958
Route::get('/libros', [LibrosController::class, 'index'])->name('libros');
Route::get('/create_libros', [LibrosController::class, 'create']) -> name ('libros.create_libros');
Route::get('/edit_libros/{id}', [LibrosController::class, 'edit']) -> name ('libros.edit_libros');
Route::post('/store_libros', [LibrosController::class, 'store']) -> name ('libros.store_libros');
Route::post('/update_libros/{id}', [LibrosController::class, 'update']) -> name ('libros.update_libros');
Route::post('/destroy_libros/{id}', [LibrosController::class, 'destroy']) -> name ('libros.destroy_libros');

<<<<<<< HEAD
//Prestamos
=======
//rutas para prestamos
>>>>>>> 70c0c3efa5b32d83055401feaf4a805997c0b958
Route::get('/prestamos', [PrestamosController::class, 'index'])->name('prestamos');
Route::get('/create', [PrestamosController::class, 'create']) -> name ('prestamos.create');
Route::get('/edit/{id}', [PrestamosController::class, 'edit']) -> name ('prestamos.edit');
Route::post('/store', [PrestamosController::class, 'store']) -> name ('prestamos.store');
Route::post('/update/{id}', [PrestamosController::class, 'update']) -> name ('prestamos.update');
Route::post('/destroy/{id}', [PrestamosController::class, 'destroy']) -> name ('prestamos.destroy');
