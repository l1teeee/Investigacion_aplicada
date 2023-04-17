<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personas = persona::all();
        return $personas;
        // return view('welcome', ['personas' => $personas]);

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
        //CREACION DEL REGISTRO
        $personas = new persona();
        $personas->nombres = $request->nombres;
        $personas->apellidos = $request->apellidos;
        $personas->edad = $request->edad;
        $personas->salario = $request->salario;

        $personas->save();
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
    public function update(Request $request)
    {
        //ACTUALIZAR DATOS
        $persona = persona::findOrFail($request->id);
        $personas->nombres = $request->nombres;
        $personas->apellidos = $request->apellidos;
        $personas->edad = $request->edad;
        $personas->salario = $request->salario;

        $personas->save();

        return $personas;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //ELIMINAR REGISTROS

        $personas = persona::destroy($request->id);
        return $personas;
    }
}
