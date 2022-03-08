@extends('layout')
@section('title','Crear un producto')
@section('contenido')
<div class="col-12 mx-auto my-5">
    <h1>Editar el producto "{{ $producto->nombre}}"</h1>

    <form action="{{ route('productos.update',$producto )}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="ingrese un nombre" name="nombre" value="{{$producto->nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label"> Descripción </label>
            <textarea class="form-control" id="descripcion" rows="3" name="descripcion">{{$producto->descripcion}}</textarea>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" min="0" step="0.1" class="form-control" id="precio" name="precio" value="{{$producto->precio}}" disabled/>
        </div>
        <button type="submit" class="btn btn-primary">Editar Producto</button>
    </form>
</div>
@endsection
