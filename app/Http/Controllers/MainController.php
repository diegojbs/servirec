<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatosBanco;
use App\Pregunta;

class MainController extends Controller
{
    public function home(){
    	$bancos = DatosBanco::orderBy('id', 'desc')->get();
    	$preguntas = Pregunta::all();
    	// dd($preguntas);

    	return view ('welcome', ['bancos' => $bancos, 'preguntas' => $preguntas, 'show_message' => '0']);
	}
	
	public function nuevoCliente(){
    	// $bancos = DatosBanco::orderBy('id', 'desc')->get();
    	// $preguntas = Pregunta::all();
    	// dd('Hola');

    	return view ('nuevo_cliente.index', ['show_message' => '0']);
    }

    public function getPuntosPago(){
    	$bancos = DatosBanco::orderBy('id', 'desc')->get();
    	// $preguntas = Pregunta::all();
    	// dd($preguntas);

    	return view ('puntos_de_pago.index', ['bancos' => $bancos]);
    }

    public function getPlataforma(){

    	return view ('plataforma.index');
    }
}
