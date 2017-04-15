<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactoPagina extends Model
{
    protected $table = 'contactos_pagina';
    protected $fillable = ['nombres', 'apellidos', 'correo', 'telefono', 'fecha'];
}
