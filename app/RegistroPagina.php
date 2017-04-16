<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mail;

class RegistroPagina extends Model
{
    protected $table = 'nuevos_clientes';
    protected $fillable = ['identificacion', 'nombres', 'correo', 'telefono', 'ciudad', 'direccion', 'negocio', 'created_at'];

    public function enviarEmail($datos){
        
        // dd($datos->nombre);

        Mail::send('emails.nuevo_registro', ['datos'=> $datos], function($msj) use ($datos) {
            $msj->subject('Registro recargas: '.$datos->identificacion);
            $msj->from($datos->correo, $datos->nombres);
            $msj->replyTo($datos->correo, $datos->nombres);
            $msj->to('info@servirecarga.com');
        });
    }
}
