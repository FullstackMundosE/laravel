@extends('layout')
@section('title','Contacto')

@section('contenido')
<div class="col-12 col-md-8 mx-auto my-5">
    <h1>Contacto</h1>
    <p>esta es nuestra pagina de contacto</p>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <form action="/contacto" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="ingrese un nombre" name="nombre" />
        </div>
        <div class="mb-3">
            <label for="asunto" class="form-label">Asunto</label>
            <input type="text" class="form-control" id="asunto" placeholder="ingrese un asunto" name="asunto" />
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label"> Mensaje </label>
            <textarea class="form-control" id="mensaje" rows="3" name="mensaje"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
    </form>
</div>
@endsection
