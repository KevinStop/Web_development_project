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

// Rutas para usuarios
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');
Route::get('/usuarios/create', [UsuariosController::class, 'create']) -> name ('usuarios.create');
Route::get('/usuarios/create/{id}', [UsuariosController::class, 'edit']) -> name ('usuarios.edit');
Route::post('/usuarios/store', [UsuariosController::class, 'store']) -> name ('usuarios.store');
Route::post('/usuarios/update/{id}', [UsuariosController::class, 'update']) -> name ('usuarios.update');
Route::get('/usuarios/destroy/{id}', [UsuariosController::class, 'destroy']) -> name ('usuarios.destroy');


// Rutas para libros
Route::get('/libros', [LibrosController::class, 'index'])->name('libros');
Route::get('/libros/create', [LibrosController::class, 'create'])->name('libros.create');
Route::get('/libros/edit/{id}', [LibrosController::class, 'edit'])->name('libros.edit');
Route::post('/libros/store', [LibrosController::class, 'store'])->name('libros.store');
Route::put('/libros/update/{id}', [LibrosController::class, 'update'])->name('libros.update');
Route::delete('/libros/destroy/{id}', [LibrosController::class, 'destroy'])->name('libros.destroy');


// Rutas para préstamos
Route::get('/prestamos', [PrestamosController::class, 'index'])->name('prestamos');
Route::get('/prestamos/create', [PrestamosController::class, 'create'])->name('prestamos.create');
Route::get('/prestamos/edit/{id}', [PrestamosController::class, 'edit'])->name('prestamos.edit');
Route::post('/prestamos/store', [PrestamosController::class, 'store'])->name('prestamos.store');
Route::post('/prestamos/update/{id}', [PrestamosController::class, 'update'])->name('prestamos.update');
Route::post('/prestamos/destroy/{id}', [PrestamosController::class, 'destroy'])->name('prestamos.destroy');
