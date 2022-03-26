<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoApiController extends Controller
{
    public function index()
    {
        $productos = Producto::all();

        $data = $productos->map(function($producto){
            return [
                'id' => $producto->id,
                'nombre' => $producto->nombre,
                'descripcion' => $producto->descripcion,
                'precio' => $producto->precio,
                'url' => route('api.productos.show', $producto)
             ];
        });

        return response([
            'meta' => [
                'count' => $data->count(),
                'path' => route('api.productos.index')
            ],
            'data' => $data,
        ],201);

    }

    public function show(Producto $producto)
    {
        return [
            'meta' => [
                'path' => route('api.productos.show',$producto),
                'resource' => route('api.productos.index')

            ],
            'data' => [
                'id' => $producto->id,
                'nombre' => $producto->nombre,
                'descripcion' => $producto->descripcion,
                'precio' => $producto->precio
            ]
        ];
    }
    public function store()
    {
        /* PASO 1 VALIDO LOS DATOS */
        $validator = Validator::make(request()->all(), [
            'nombre' => 'required|min:3',
            'descripcion' => 'required',
            'precio' => 'required|min:1'
        ]);

        /* PASO 2 RESPONDO SI HAY ERRORES */
        if($validator->fails()){
            return response([
                'error' => true,
                'data' => $validator->errors()
            ],422);
        };

        /* PASO 3 CREO EL PRODUCTO */
        $producto = Producto::create([
            'nombre' => request()->nombre,
            'descripcion' => request()->descripcion,
            'precio' => request()->precio
        ]);


        /* PASO 4 Respondo con el producto creado */
        return response([
            "meta" => [
                "mensaje" => "Se creó el producto $producto->nombre",
                "codigo" => 201
            ],
            'data' => $producto
        ],201);
    }

    public function update(Producto $producto)
    {
        $producto->update(request()->all());

        return response([
            "meta" => [
                "mensaje" => "Se actualizó el producto $producto->nombre",
                "codigo" => 201
            ],
            'data' => $producto
        ],201);
    }

    public function destroy(Producto $producto)
    {

        $producto->delete();

        return response([
            "meta" => [
                "mensaje" => "Se borró el producto $producto->nombre",
                "codigo" => 201
            ],
            'data' => $producto
        ],201);

    }
}
