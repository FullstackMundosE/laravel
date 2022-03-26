

@extends('layout')
@section('title','Contacto')

@section('contenido')
<div class="col-12 col-md-8 mx-auto my-5">
    <h1>Gifs Animados</h1>
    <div class="row">
        <div class="col">
            <form action="">
                <div class="input-group">
                    <input type="text" name="buscar" class="form-control border-primary" value="{{request()->buscar ?? ''}}">
                    <button class="btn btn-outline-primary" type="submit" >Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-around">
        @foreach($gifs as $gif)
        <img class="m-2" src="{{$gif['images']['original']['url']}}" width='220px' />
        @endforeach
    </div>
</div>
@endsection
