<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroPagina;
use Laracasts\Flash\Flash;

class RegistroPaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Hola registros";
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
        $registro = new RegistroPagina;
        $registro->identificacion = $request->identificacion;
        $registro->nombres = $request->nombres;
        $registro->correo = $request->correo;
        $registro->telefono = $request->telefono;
        $registro->ciudad = $request->ciudad;
        $registro->direccion = $request->direccion;
        $registro->negocio = $request->negocio;

        // if ($registro->save()){
        //     Flash::success('Gracias '.$request->nombres.' Se ha registrado como cliente correctamente, favor estar pendiente de su correo electrónico')->important();
        
        // }else{
        //     Flash::warning('¡Hubo un problema, intenta registrar de nuevo tus datos!')->important();
        // }

        if ($request->ajax()){
            if ($registro->save()){
                return response()->json([
                    'mensaje' => 'Registro guardado'
                ]);
            }
        }

        return redirect(url()->previous());


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
