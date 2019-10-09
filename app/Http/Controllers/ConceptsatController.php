<?php

namespace App\Http\Controllers;

use App\Conceptsat;
use Illuminate\Http\Request;

class ConceptsatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conceptsat= Conceptsat::all();
        return view('Catalogos.conceptsat', compact('conceptsat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Catalogos.createconceptsat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $concepto= new Conceptsat;
        $concepto->clave_sat=$request->clave_sat;
        $concepto->concepto=$request->concepto;
        $concepto->fecha_vigencia=$request->fecha_vigencia;
        $concepto->tipo=$request->tipo;
        $concepto->save();
        return redirect()->action('ConceptsatController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conceptsat  $conceptsat
     * @return \Illuminate\Http\Response
     */
    public function show(Conceptsat $conceptsat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conceptsat  $conceptsat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concepto= Conceptsat::find($id);
        return view('Catalogos.editconceptsat',compact('concepto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conceptsat  $conceptsat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conceptsat $conceptsat)
    {
        $conceptsat->fill($request->all());
        $conceptsat->save();
        return redirect()->action('ConceptsatController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conceptsat  $conceptsat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conceptsat $conceptsat)
    {
        $conceptsat->delete();
        return redirect()->action('ConceptsatController@index');
    }
}
