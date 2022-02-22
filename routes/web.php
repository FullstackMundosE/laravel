<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;


Route::get('/', [PageController::class,'home']);
Route::get('/quienes-somos', [PageController::class,'quienesSomos']);
Route::get('/contacto', [PageController::class,'contacto']);

/* CRUD PRODUCTOS */

// 7 rutas
Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class,'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class,'store'])->name('productos.store');
