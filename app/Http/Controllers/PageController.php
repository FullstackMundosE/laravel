<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use App\Mail\MensajeContacto;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('sargilla@gmail.com')->send(new MensajeContacto($mensaje));

        return redirect('/contacto')->with('status',"Se envió tu mensaje, te responderemos a la brevedad!");

    }
}
