<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Mail;

class ContactoPagina extends Model
{
    protected $table = 'contactos_pagina';
    protected $fillable = ['nombres', 'apellidos', 'correo', 'telefono', 'fecha'];

    public function enviarEmail($datos){
        
        // dd($datos->nombre);

        Mail::send('emails.nuevo_contacto', ['datos'=> $datos], function($msj) use ($datos) {
            $msj->subject('Solicitud de informacion recargas: '.$datos->nombres);
            $msj->from($datos->correo, $datos->nombres.' '.$datos->apellidos);
            $msj->replyTo($datos->correo, $datos->nombres.' '.$datos->apellidos);
            $msj->to('info@servirecarga.com');
        });
    }
}