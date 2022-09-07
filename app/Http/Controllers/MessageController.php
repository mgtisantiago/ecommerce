<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){
       // return "Se ha enviado los datos";

      $message = request()->validate([
        'nombre' => 'required',
        'correo' => 'required|email',
        'asunto' => 'required',
        'mensaje' => 'required'
        ]);

        //Enviar el formulario
        Mail::to('invitadosunivelmas@gmail.com')->queue(new MessageReceived($message));
        return 'Mensaje Enviado';
    }
}
