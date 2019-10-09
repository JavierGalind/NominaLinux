<?php

namespace App\Http\Controllers;

use App\Incidencia;
use App\Conceptos_empresa;
use App\Empleado;
use DB;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $incid= DB::table('incidencias')
       ->join('empleados','empleados.id','=','incidencias.id_empleado')
       ->select('incidencias.id','incidencias.id_concepto','incidencias.cantidad','incidencias.importe','incidencias.monto','incidencias.observaciones','incidencias.soporte','incidencias.created_at','empleados.nombre_empleado')
       ->get();
       return view('incidencias' ,compact('incid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $empleado= Empleado::all();
      $concepto= Conceptos_empresa::all();
      return view('createincidencias',compact('empleado','concepto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidencia= new Incidencia;
        $incidencia->id_empleado=$request->id_empleado;
        $incidencia->id_concepto=$request->id_concepto;
        $incidencia->cantidad=$request->cantidad;
        $incidencia->importe=$request->importe;
        $incidencia->monto=$request->monto;
        $incidencia->observaciones=$request->observaciones;
        $incidencia->soporte=$request->soporte;
        $incidencia->save();
        return redirect()->action('IncidenciaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incidencia= Incidencia::find($id);
        $empleado= Empleado::all();
        $concepto= Conceptos_empresa::all();
        return view('editincidencias',compact('empleado','concepto','incidencia')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $incidencia= Incidencia::find($id);
        $incidencia->id_empleado=$request->id_empleado;
        $incidencia->id_concepto=$request->id_concepto;
        $incidencia->cantidad=$request->cantidad;
        $incidencia->importe=$request->importe;
        $incidencia->monto=$request->monto;
        $incidencia->observaciones=$request->observaciones;
        $incidencia->soporte=$request->soporte;
        $incidencia->save();
        return redirect()->action('IncidenciaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incidencia = Incidencia::find($id);
        $incidencia->delete();
        return redirect()->action('IncidenciaController@index')->with('notice', 'El usuario ha sido modificado correctamente.');
    }
}
