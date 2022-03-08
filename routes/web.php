<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;


Route::get('/', [PageController::class,'home']);
Route::get('/quienes-somos', [PageController::class,'quienesSomos']);
Route::get('/contacto', [PageController::class,'contacto']);
Route::post('/contacto', [PageController::class,'storeMensaje']);

/* CRUD PRODUCTOS */
// 7 rutas del recurso
// Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');
// Route::get('/productos/create', [ProductoController::class,'create'])->name('productos.create');
// Route::post('/productos', [ProductoController::class,'store'])->name('productos.store');
// Route::get('/productos/{producto}',[ProductoController::class,'show'])->name('productos.show');
// Route::get('/productos/{producto}/edit',[ProductoController::class,'edit'])->name('productos.edit');
// Route::patch('/productos/{producto}',[ProductoController::class,'update'])->name('productos.update');
// Route::delete('/productos/{producto}',[ProductoController::class,'destroy'])->name('productos.destroy');
// con el metodo resources creo las 7 rutas en una sola linea
Route::resource('productos', ProductoController::class);
