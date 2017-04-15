<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatosBanco;
use App\Pregunta;

class MainController extends Controller
{
    public function home(){
    	$bancos = DatosBanco::all();
    	$preguntas = Pregunta::all();
    	// dd($preguntas);

    	return view ('welcome', ['bancos' => $bancos, 'preguntas' => $preguntas]);
    }
}
