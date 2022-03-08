<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function quienesSomos(){
        return view('quienes-somos');
    }

    public function contacto(){
        return view('contacto');
    }

    public function storeMensaje(){

        $mensaje = Mensaje::create([
            'nombre' => request()->nombre,
            'asunto' => request()->asunto,
            'mensaje' => request()->mensaje
        ]);

         return redirect('/contacto')->with('status',"Se envió tu mensaje, te responderemos a la brevedad!");
    }
}
