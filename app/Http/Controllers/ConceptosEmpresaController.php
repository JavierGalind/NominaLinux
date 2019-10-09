<?php

namespace App\Http\Controllers;
use App\Conceptsat;
use App\Conceptos_empresa;
use Illuminate\Http\Request;
use DB;
class ConceptosEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conceptos= DB::table('conceptos_empresas')
        ->join('conceptsats','conceptsats.id','=','conceptos_empresas.id_conceptosat')
        ->select('conceptos_empresas.id','conceptos_empresas.nombre','conceptos_empresas.cantidad','conceptos_empresas.importe','conceptos_empresas.codificacion_contable',
        'conceptos_empresas.tipo','conceptsats.clave_sat','conceptsats.concepto')
        ->get();
        return view('conceptos', compact('conceptos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conceptosat= Conceptsat::all();
        return view('createconceptos', compact('conceptosat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conceptos = new Conceptos_empresa;
        $conceptos->nombre=$request->nombre;
        $conceptos->cantidad=$request->cantidad;
        $conceptos->importe=$request->importe;
        $conceptos->formula=$request->formula;
        $conceptos->isr=$request->isr;
        $conceptos->imss=$request->imss;
        $conceptos->erogacion_estado=$request->erogacion_estado;
        $conceptos->codificacion_contable=$request->codificacion_contable;
        $conceptos->tipo=$request->tipo;
        $conceptos->id_conceptosat=$request->id_conceptosat;
        $conceptos->save();
        return redirect()->action('ConceptosEmpresaController@index')->with('notice', 'El usuario ha sido modificado correctamente.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conceptos_empresa  $conceptos_empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Conceptos_empresa $conceptos_empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conceptos_empresa  $conceptos_empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conceptosat= Conseptsat::all();
        $conceptos= Conceptos_empresa::find($id);
        return view('editconceptos',compact('conceptos','conceptosat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conceptos_empresa  $conceptos_empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $conceptos = Conceptos_empresa::find($id);
        $conceptos->nombre=$request->nombre;
        $conceptos->cantidad=$request->cantidad;
        $conceptos->importe=$request->importe;
        $conceptos->formula=$request->formula;
        $conceptos->isr=$request->isr;
        $conceptos->imss=$request->imss;
        $conceptos->erogacion_estado=$request->erogacion_estado;
        $conceptos->codificacion_contable=$request->codificacion_contable;
        $conceptos->tipo=$request->tipo;
        $conceptos->id_conceptosat=$request->id_conceptosat;
        $conceptos->save();
        return redirect()->action('ConceptosEmpresaController@index')->with('notice', 'El usuario ha sido modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conceptos_empresa  $conceptos_empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conceptos = Conceptos_empresa::find($id);
        $conceptos->delete();
        return redirect()->action('ConceptosEmpresaController@index')->with('notice', 'El usuario ha sido modificado correctamente.');
    }
}
