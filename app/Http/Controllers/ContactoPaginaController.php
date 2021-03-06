<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactoPagina;
use Laracasts\Flash\Flash;

use App\DatosBanco;
use App\Pregunta;

class ContactoPaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Hola contacto";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $contacto = new ContactoPagina;
        $contacto->nombres = $request->nombres;
        $contacto->apellidos = $request->apellidos;
        $contacto->correo = $request->email;
        $contacto->telefono = $request->telefono;
        $contacto->fecha = date('Y-m-d H:i:s');

        // if ($contacto->save()){
        //     Flash::success('Gracias '.$request->nombres.' Se ha registrado correctamente')->important();
        
        // }else{
        //     Flash::warning('¡Hubo un problema, intenta registrar de nuevo tus datos!')->important();
        // }


        if ($request->ajax()){
            if ($contacto->save()){

                $contacto->enviarEmail($contacto);

                return response()->json([
                    'mensaje' => 'Registro guardado'
                ]);
            }
        }else{
            if ($contacto->save()){

                $contacto->enviarEmail($contacto);

                $bancos = DatosBanco::orderBy('id', 'desc')->get();
                $preguntas = Pregunta::all();
        
                return view('welcome', ['show_message' => '1', 'bancos' => $bancos, 'preguntas' => $preguntas]);
            }
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
