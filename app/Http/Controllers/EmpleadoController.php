<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Job;
use App\Empresa;
use App\Departamento;
use App\Prestaciones;
use DB;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emple= DB::table('empleados')
        ->join('empresas','empresas.id','=','empleados.id_empresa')
        ->select('empleados.id','empleados.nombre_empleado','empleados.email','empresas.nombre_empresa')
        ->get();
        return view('empleados',compact('emple'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $depart= Departamento::all();
        $empresa= Empresa::all();
        $puesto= Job::all();
        $presta= Prestaciones::all();
        return view('createempleados',compact('depart','empresa','puesto','presta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado= new Empleado;
        $empleado->id_empresa=$request->id_empresa;
        $empleado->id_puesto=$request->id_puesto;
        $empleado->id_departamento=$request->id_departamento;
        $empleado->id_prestaciones=$request->id_prestaciones;
        $empleado->nombre_empleado=$request->nombre_empleado;
        $empleado->ap_paterno=$request->ap_paterno;
        $empleado->ap_materno=$request->ap_materno;
        $empleado->email=$request->email;
        $empleado->telefono=$request->telefono;
        $empleado->sexo=$request->sexo;
        $empleado->curp=$request->curp;
        $empleado->rfc=$request->rfc;
        $empleado->fecha_nacimiento=$request->fecha_nacimiento;
        $empleado->cp=$request->cp;
        $empleado->calle=$request->calle;
        $empleado->numero_interno=$request->numero_interno;
        $empleado->numero_externo=$request->numero_externo;
        $empleado->colonia=$request->colonia;
        $empleado->ciudad=$request->ciudad;
        $empleado->estado=$request->estado;
        $empleado->numero_cuenta=$request->numero_cuenta;
        $empleado->clave_interbancaria=$request->clave_interbancaria;
        $empleado->banco=$request->banco;
        $empleado->tipo_sueldo=$request->tipo_sueldo;
        $empleado->forma_pago=$request->forma_pago;
        $empleado->salario_diario=$request->salario_diario;
        $empleado->contrato=$request->contrato;
        $empleado->imss=$request->imss;
        $empleado->infonabit=$request->infonabit;
        $empleado->afore=$request->afore;
        $empleado->alergias=$request->alergias;
        $empleado->tipo_sangre=$request->tipo_sangre;
        $empleado->nombre_contacto=$request->nombre_contacto;
        $empleado->numero_contacto=$request->numero_contacto;
        $empleado->estado_civil=$request->estado_civil;
        $empleado->save();
        return redirect()->action('EmpleadoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $empleado= Empleado::find($id);
      $depart= Departamento::all();
      $empresa= Empresa::all();
      $puesto= Job::all();
      $presta= Prestaciones::all();
      return view('editempleados',compact('empleado','depart','empresa','puesto','presta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = empleado::find($id);
        $empleado->id_empresa=$request->id_empresa;
        $empleado->id_puesto=$request->id_puesto;
        $empleado->id_departamento=$request->id_departamento;
        $empleado->id_prestaciones=$request->id_prestaciones;
        $empleado->nombre_empleado=$request->nombre_empleado;
        $empleado->ap_paterno=$request->ap_paterno;
        $empleado->ap_materno=$request->ap_materno;
        $empleado->email=$request->email;
        $empleado->telefono=$request->telefono;
        $empleado->sexo=$request->sexo;
        $empleado->curp=$request->curp;
        $empleado->rfc=$request->rfc;
        $empleado->fecha_nacimiento=$request->fecha_nacimiento;
        $empleado->cp=$request->cp;
        $empleado->calle=$request->calle;
        $empleado->numero_interno=$request->numero_interno;
        $empleado->numero_externo=$request->numero_externo;
        $empleado->colonia=$request->colonia;
        $empleado->ciudad=$request->ciudad;
        $empleado->estado=$request->estado;
        $empleado->numero_cuenta=$request->numero_cuenta;
        $empleado->clave_interbancaria=$request->clave_interbancaria;
        $empleado->banco=$request->banco;
        $empleado->tipo_sueldo=$request->tipo_sueldo;
        $empleado->forma_pago=$request->forma_pago;
        $empleado->salario_diario=$request->salario_diario;
        $empleado->contrato=$request->contrato;
        $empleado->imss=$request->imss;
        $empleado->infonabit=$request->infonabit;
        $empleado->afore=$request->afore;
        $empleado->alergias=$request->alergias;
        $empleado->tipo_sangre=$request->tipo_sangre;
        $empleado->nombre_contacto=$request->nombre_contacto;
        $empleado->numero_contacto=$request->numero_contacto;
        $empleado->estado_civil=$request->estado_civil;
        $empleado->save();
        return redirect()->action('EmpleadoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->action('EmpleadoController@index')->with('notice', 'El usuario ha sido modificado correctamente.');
    }
}
