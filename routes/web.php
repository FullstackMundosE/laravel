<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;


Route::get('/', [PageController::class,'home']);
Route::get('/quienes-somos', [PageController::class,'quienesSomos']);
Route::get('/contacto', [PageController::class,'contacto']);
Route::post('/contacto', [PageController::class,'storeMensaje']);

/* CRUD PRODUCTOS */
// 7 rutas del recurso
Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class,'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class,'store'])->name('productos.store');
Route::get('/productos/{producto}',[ProductoController::class,'show'])->name('productos.show');
Route::get('/productos/{producto}/edit',[ProductoController::class,'edit'])->name('productos.edit');
Route::patch('/productos/{producto}',[ProductoController::class,'update'])->name('productos.update');
Route::delete('/productos/{producto}',[ProductoController::class,'destroy'])->name('productos.destroy');
// con el metodo resources creo las 7 rutas en una sola linea
// Route::resource('productos', ProductoController::class);


Route::get('/gifs', function(){

    $busqueda = request()->buscar;
    $api_key='9K4V6AG8YQR5lJCnKwPzL6cxzxcPlim4';
    $response = Http::get("https://api.giphy.com/v1/gifs/search?api_key={$api_key}&q={$busqueda}&limit=25&offset=0&rating=g&lang=en");

    $gifs = $response['data'];

    return view('gifs',compact('gifs'));
});
