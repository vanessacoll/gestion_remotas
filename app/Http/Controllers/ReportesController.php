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
use App\Pdf\ClientesPdf;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Support\Facades\DB;

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

 if ($request->cliente === null) {
        $clientes = Cliente::where('id_tipcli',$request->tipo_cliente)->get();

 }else{

        $clientes = Cliente::where('cedula',$request->cliente)->where('id_tipcli',$request->tipo_cliente)->first();

        if ($clientes === null) {
            return redirect()->route("estacionescli.index")->with(["messagealert" => "No existen datos para la información suministrada.. Por favor Verfique."]);
        }else{

        $clientes = Cliente::where('cedula',$request->cliente)->where('id_tipcli',$request->tipo_cliente)->get();


        }
 }

        $title = 'Listado Estaciones por clientes';
        $logo = public_path('/assets/images/logo.png');
        $report_code = 'RP-AD-002-V2';
        $print_date = 'Fecha de impresión: ' . date('d/m/Y H:i:s');
        
        $pdf = new ClientesPdf($title, $logo, $report_code, $print_date);
        $pdf->setData($clientes);
        return $pdf->Output($title . '.pdf', 'I');



}

public function generar()
    {

    $remotas = Remota::select()->get();
    return view('reportes.reportes_listado_estaciones_pdf', compact('remotas'));

}


public function getClientesByTipo(Request $request)
{
    $clientes = Cliente::where('id_tipcli', $request->id_tip)->get();
    return response()->json($clientes);
}


}
