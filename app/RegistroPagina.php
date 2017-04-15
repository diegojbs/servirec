<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroPagina extends Model
{
    protected $table = 'nuevos_clientes';
    protected $fillable = ['identificacion', 'nombres', 'correo', 'telefono', 'ciudad', 'direccion', 'negocio'];
}
