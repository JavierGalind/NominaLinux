<?php

namespace App\Http\Controllers;

use App\Prestaciones;
use App\Empresa;
use Illuminate\Http\Request;

class PrestacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $prestaciones= Prestaciones::all();
      return view('Catalogos.prestaciones',compact('prestaciones'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa= Empresa::all();
        return view('Catalogos.createprestaciones',compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $prestaciones= new Prestaciones;
            $prestaciones->anio=$request->anio;
            $prestaciones->aguinaldo=$request->aguinaldo;
            $prestaciones->vacaciones=$request->vacaciones;
            $prestaciones->prima_vacacional=$request->prima_vacacional;
            $prestaciones->bono = $request->bono;
            $prestaciones->vales = $request->vales;
            $prestaciones->fondo = $request->fondo;
            $prestaciones->id_empresa=$request->id_empresa;
            $prestaciones->save();
            return redirect()->action('PrestacionesController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Prestaciones $prestaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestaciones= Prestaciones::find($id);
        return view('Catalogos.editprestaciones',compact('prestaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prestaciones = Prestaciones::find($id);
        $prestaciones->anio = $request->anio;
        $prestaciones->aguinaldo = $request->aguinaldo;
        $prestaciones->vacaciones = $request->vacaciones;
        $prestaciones->prima_vacacional = $request->prima_vacacional;
        $prestaciones->bono = $request->bono;
        $prestaciones->vales = $request->vales;
        $prestaciones->fondo = $request->fondo;
        $prestaciones->id_empresa=$request->id_empresa;
        $prestaciones->save();
        return redirect()->action('PrestacionesController@index')->with('notice', 'El usuario ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestaciones $prestaciones, $id)
    {
        $prestaciones = Prestaciones::find($id);
        $prestaciones->delete();
        return redirect()->action('PrestacionesController@index')->with('notice', 'El usuario ha sido modificado correctamente.');
    }
}
