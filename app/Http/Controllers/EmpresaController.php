<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $empresa= Empresa::all();
       return view('Catalogos.empresa',compact('empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Catalogos.createempresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa= new Empresa;
        $empresa->nombre_empresa=$request->nombre_empresa;
        $empresa->rfc=$request->rfc;
        $empresa->registro_estado=$request->registro_estado;
        $empresa->telefono=$request->telefono;
        $empresa->status=$request->status;
        $empresa->registro_patronal=$request->registro_patronal;
        $empresa->razon_social=$request->razon_social;
        $empresa->representante_laboral=$request->representante_laboral;
        $empresa->rfc_representante=$request->rfc_representante;
        $empresa->direccion=$request->direccion;
        $empresa->numero_interno=$request->numero_interno;
        $empresa->numero_externo=$request->numero_externo;
        $empresa->colonia=$request->colonia;
        $empresa->estado=$request->estado;
        $empresa->cp=$request->cp;
        $empresa->save();
        return redirect()->action('EmpresaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa= Empresa::find($id);
        return view('Catalogos.editempresa',compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $empresa->fill($request->all());
        $empresa->save();
        return redirect()->action('EmpresaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->action('EmpresaController@index');
    }
}
