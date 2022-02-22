@extends('layout')
@section('title','Todos los productos')
@section('contenido')
<div class="col-12 mx-auto my-5">
    <h1>Productos</h1>
    <p>{{ $titulo }}</p>
    <a class="btn btn-primary mb-4" href="{{ route('productos.create' )}}">Crear Producto</a>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="row">
        @foreach ($productos as $producto)
        <div class="col col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text">{{ $producto->descripcion }}</p>
                    <h3 class="card-text">$ {{ $producto->precio }}</h3>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="#" class="btn btn-secondary">Editar</a>
                    <form action="">
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
