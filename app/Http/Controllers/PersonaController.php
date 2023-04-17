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

    }

    public function persona(){
        $personas = persona::all();
        return view('welcome', ['personas' => $personas]);

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
        $persona = new Persona;
        $persona->nombres = $request->input('nombres');
        $persona->apellidos = $request->input('apellidos');
        $persona->edad = $request->input('edad');
        $persona->salario = $request->input('salario');
        $persona->save();

        return redirect('/')->with('success', 'Persona creada exitosamente');

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
        $personas = persona::findOrFail($request->id);
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
