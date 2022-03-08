@extends('layout');
@section('contenido')
<div class="col-12 mx-auto my-5">
    <h1>Producto {{ $producto->nombre}}</h1>
    <p>
        {{$producto->descripcion}}
    </p>
</div>
@endsection
