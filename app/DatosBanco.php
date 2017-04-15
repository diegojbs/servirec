<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosBanco extends Model
{
    protected $table = 'datos_bancos';
    protected $fillable = ['nombre', 'datos'];
}
