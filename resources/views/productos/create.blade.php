@extends('layout')
@section('title','Todos los productos')
@section('contenido')
<div class="col-12 mx-auto my-5">
    <h1>Crear un Producto</h1>

    <form action="{{ route('productos.store' )}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="ingrese un nombre" name="nombre" />
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label"> Descripción </label>
            <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" min="0" step="0.1" class="form-control" id="precio" name="precio" value="0" />
        </div>
        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
</div>
@endsection
