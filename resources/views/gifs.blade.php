

@extends('layout')
@section('title','Contacto')

@section('contenido')
<div class="col-12 col-md-8 mx-auto my-5">
    <h1>Gifs Animados</h1>
    <div class="d-flex flex-wrap">
        @foreach($gifs as $gif)
        <img class="m-2" src="{{$gif['images']['original']['url']}}" width='250px' />
        @endforeach
    </div>
</div>
@endsection
