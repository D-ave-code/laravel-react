<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\TipoPersona;
use Illuminate\Http\Request;

class TipoPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $productos = Producto::where('id_tipo_personas', 1 )->get();
       return $productos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoPersona  $tipoPersona
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPersona $tipoPersona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoPersona  $tipoPersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPersona $tipoPersona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoPersona  $tipoPersona
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPersona $tipoPersona)
    {
        //
    }
}
