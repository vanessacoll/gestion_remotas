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
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Traits\ReportFpdf;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    use ReportFpdf;
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

        //$clientes = Cliente::where('cedula',$request->cedula)->where('id_tipcli',$request->id_tip)->get();

        $clientes = DB::table('clientes')
        ->join('remotas','clientes.id_cliente','remotas.id_cliente')
        ->select('clientes.cedula','clientes.nombres')
        ->where('clientes.cedula', $request->cedula)
        ->where('clientes.id_tipcli', $request->id_tip)
        ->get();


        }
 }

        $data['tipo_hoja']                  = 'C'; // C carta
        $data['orientacion']                = 'H'; // V Vertical
        $data['cod_normalizacion']          = '';
        $data['gerencia']                   = '';
        $data['division']                   = '';
        $data['titulo']                     = 'PROVEEDORES DE BIENES Y SERVICIOS';
        $data['subtitulo']                  = '';
        $data['alineacion_columnas']		= array('C','L','C'); //C centrado R derecha L izquierda
        $data['ancho_columnas']		    	= array('20','90','40','100');//Ancho de Columnas
        $data['nombre_columnas']		   	= array(utf8_decode('Cedula'),utf8_decode('Nombres'));
        $data['funciones_columnas']         = '';
        $data['fuente']		   	            = 8;
        $data['registros_mostar']           = array('cedula', 'nombres');
        $data['nombre_documento']			= 'listado_modulo.pdf'; //Nombre de Archivo
        $data['con_imagen']			        = false;
        $data['vigencia']			        = '';
        $data['revision']			        = '';
        $data['usuario']			        = auth()->user()->name;
        $data['cod_reporte']			    = '';
        $data['registros']                  = $clientes;



        $pdf = new Fpdf;

        $pdf->setTitle(utf8_decode('Listado de Modulos'));

        $this->pintar_listado_pdf($pdf,$data);

        exit;

   // return view('reportes.reportes_estaciones_cliente_pdf' , compact('remotas','clientes','statuss','planes','contenciones','satelites','tip_clientes'));


}

public function generar()
    {

    $remotas = Remota::select()->get();
    return view('reportes.reportes_listado_estaciones_pdf', compact('remotas'));

}

public function bytipcliente(Request $request){

       $clientes = Cliente::where('id_tipcli',$request->id_tip)->get();
        return response()->json(
            [
                'clientes' => $clientes
            ]
        );
}

}
