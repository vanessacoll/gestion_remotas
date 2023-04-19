<?php

namespace App\Http\Controllers;

use App\Models\Remota;
use App\Models\Cliente;
use App\Models\Plan;
use App\Models\Contencion;
use App\Models\Satelite;
use App\Models\Justificacion;
use App\Models\Historico_Remota;
use App\Models\Status;
use App\Models\Tip_cliente;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remotas = Remota::select()->get();
         return view('reportes.reportes_listado_estaciones', compact('remotas'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
       $clientes = Cliente::select()->get();
       $tip_clientes = Tip_cliente::select()->get(); 
        return view("reportes.reportes_estaciones_cliente", compact('tip_clientes','clientes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

 if ($request->cedula === null) {
        $clientes = Cliente::where('id_tipcli',$request->id_tip)->get();

 }else{

     $clientes = Cliente::where('cedula',$request->cedula)->where('id_tipcli',$request->id_tip)->first();

        if ($clientes === null) {
            return redirect()->route("estacionescli.index")->with(["messagealert" => "No existen datos para la información suministrada.. Por favor Verfique."]);
        }else{

        $clientes = Cliente::where('cedula',$request->cedula)->where('id_tipcli',$request->id_tip)->get();
        }
 }

    $remotas      = Remota::select()->get(); 
    $statuss      = Status::select()->get(); 
    $planes       = Plan::select()->get();
    $contenciones = Contencion::select()->get();
    $satelites    = Satelite::select()->get();
    $tip_clientes = Tip_cliente::where('id_tip',$request->id_tip)->first();
    return view('reportes.reportes_estaciones_cliente_pdf' , compact('remotas','clientes','statuss','planes','contenciones','satelites','tip_clientes')); 
   
    
}

public function generar()
    {
    
    $remotas = Remota::select()->get();
    return view('reportes.reportes_listado_estaciones_pdf', compact('remotas'));
   
}

public function bytipcliente($id_tip)
    {
    
   return Cliente::where('id_tipcli',$id_tip)->get();

}

 }