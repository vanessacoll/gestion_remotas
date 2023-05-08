<?php

namespace App\Http\Controllers;

use App\Models\Remota;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Plan;
use App\Models\Contencion;
use App\Models\Satelite;
use App\Models\Justificacion;
use App\Models\Historico_Remota;
use App\Models\Status;
use App\Models\Tip_cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Process\Process;


class RemotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("remotas.remotas_index");
    }

    /**
     * Display a listing of the resource.
     * Busqueda
     * @return \Illuminate\Http\Response
     */

    public function search(){
         
    $remotas = Remota::all()->sortBy('id_remota');
    $clientes = Cliente::select()->get(); 
    return view('remotas.remotas_search',compact('remotas','clientes'));
        }

    public function monitoreo()
    {

     // $remotas = Remota::all()->sortBy('id_remota');
     // 
     $remotas = Remota::whereIn('id_remota' ,[1,2])->get();;

      foreach ($remotas as $remota) {

    if (!$remota->direccion) {

            $remota->respuesta_ping = 'No tiene direccion IP asignada';
            $remota->clase = 'status-offline';

    }else{
       
        $process = new Process(['/sbin/ping', '-c', '3', $remota->direccion]);
        $process->run();
        
        if ($process->isSuccessful()) {
            $output = $process->getOutput();
            $remota->respuesta_ping = $output;
            $remota->clase = 'status-online';
        } else {
            $error = $process->getErrorOutput();
            $remota->respuesta_ping = $error;
            $remota->clase = 'status-away';
        }
    }

    sleep(5);

}

       return view("remotas.remotas_monitoreo", compact('remotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $clientes = Cliente::select()->get(); 
    $planes = Plan::select()->get();
    $contenciones = Contencion::select()->get();
    $satelites = Satelite::select()->get();
    $statuss = Status::select()->get();
          return view('remotas.remotas_create',compact('clientes','planes','contenciones','satelites','statuss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        $remota = new Remota($request->input());
        $remota->id_cliente = $request->id_cliente;
        $remota->nombre = $request->nombre;
        $remota->serial = $request->serial;
        $remota->modmodem = $request->modmodem;
        $remota->localidad = $request->localidad;
        $remota->direccion = $request->direccion;
        $remota->coordenadas = $request->coordenadas;
        $remota->antena = $request->antena;
        $remota->tip_antena = $request->tip_antena;
        $remota->buc = $request->buc;
        $remota->lnb = $request->lnb;
        $remota->id_plan = $request->id_plan;
        $remota->id_contencion = $request->id_contencion;
        $remota->id_satelite = $request->id_satelite;
        $remota->id_status = $request->id_status;
        $remota->saveOrFail();
    return redirect()->route("remotas.search")->with(["message" => "Remota registrada exitosamente"]);
    }

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    { 
        $clientes = Cliente::select()->get(); 
        return view('remotas.remotas_index2',compact('clientes'));
    }

    /**
     * Display a listing of the resource.
     * Busqueda
     * @return \Illuminate\Http\Response
     */

    public function searchlis(Request $request){

  $clientes = Cliente::where('cedula',$request->cedula)->first();
  $remotas = Remota::where('id_cliente',$clientes->id_cliente)->get(); 
    
    if (count($remotas) > 0) {
        return view('remotas.remotas_searchlis',compact('remotas','clientes'));
    }else{
        return redirect()->route("remotas.index2")->with(["messagealert" => "Cliente no posee Remotas asociadas."]);
    }
 }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Remota $remota)
    {
    
$remotas = Remota::where('id_remota',$remota->id_remota)->first();
if ($remotas === null) {
  return redirect()->route("remotas.index2")->with(["messagealert" => "Remota no existe.. Por favor Verfique.",
    ]);
}else{
$clientes = Cliente::where('id_cliente',$remotas->id_cliente)->first(); 
$hisremotas = Historico_Remota::where('id_remota',$remotas->id_remota)->get();
    return view('remotas.remotas_show', compact('remotas','clientes','hisremotas'));
}

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function edit(Remota $remota)
    {
    $clientes = Cliente::select('id_cliente','cedula','nombres')->get(); 
    $planes = Plan::select('id_plan','des_plan')->get();
    $contenciones = Contencion::select('id_contencion','des_contencion')->get();
    $satelites = Satelite::select('id_satelite','des_satelite')->get();
    $justificaciones = Justificacion::select('id_just','des_just')->get();
    $statuss = Status::select()->get(); 
          return view('remotas.remotas_edit',['remota' => $remota],compact('clientes','planes','contenciones','satelites','justificaciones','statuss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remota $remota)
    {
        $this->validator($request->all())->validate();

        $data = Remota::find($remota->id_remota);

        $hisremota = new Historico_Remota($request->input());
        $hisremota->id_remota = $data->id_remota;
        $hisremota->id_cliente = $data->id_cliente;
        $hisremota->nombre = $data->nombre;
        $hisremota->serial = $data->serial;
        $hisremota->modmodem = $data->modmodem;
        $hisremota->localidad = $data->localidad;
        $hisremota->direccion = $data->direccion;
        $hisremota->coordenadas = $data->coordenadas;
        $hisremota->antena = $data->antena;
        $hisremota->tip_antena = $data->tip_antena;
        $hisremota->buc = $data->buc;
        $hisremota->lnb = $data->lnb;
        $hisremota->id_plan = $data->id_plan;
        $hisremota->id_contencion = $data->id_contencion;
        $hisremota->id_satelite = $data->id_satelite;
        $hisremota->id_just = $request->id_just;
        $hisremota->username = Auth::user()->username;
        $hisremota->id_status = $data->id_status;
        $hisremota->saveOrFail();

        // update a remotas

        $remota->id_cliente = $request->id_cliente;
        $remota->nombre = $request->nombre;
        $remota->serial = $request->serial;
        $remota->modmodem = $request->modmodem;
        $remota->localidad = $request->localidad;
        $remota->direccion = $request->direccion;
        $remota->coordenadas = $request->coordenadas;
        $remota->antena = $request->antena;
        $remota->tip_antena = $request->tip_antena;
        $remota->buc = $request->buc;
        $remota->lnb = $request->lnb;
        $remota->id_plan = $request->id_plan;
        $remota->id_contencion = $request->id_contencion;
        $remota->id_satelite = $request->id_satelite;
        $remota->id_status = $request->id_status;
        $remota->saveOrFail();
      
    return redirect()->route("remotas.search")->with(["message" => "Remota actualizada exitosamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Remota  $remota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remota $remota)
    {
        $remota->delete();
        return redirect()->route("remotas.search")->with(["message" => "Remota eliminada"]);
    }

       protected function validator(array $remota)
    {
        return Validator::make($remota, [

  'id_cliente'    => ['required'],
  'serial'        => ['required', 'string', 'max:20', ],
  'nombre'        => ['required', 'string', 'max:100', ],
  'modmodem'      => ['required', 'string', 'max:50', ],
  'localidad'     => ['required', 'string', 'max:100', ],
  'direccion'     => ['required', 'string', 'max:100', ],
  'coordenadas'   => ['required', 'string', 'max:50', ],
  'antena'        => ['required', 'string', 'max:50', ],
  'tip_antena'    => ['required', 'string', 'max:50', ],
  'buc'           => ['required', 'string', 'max:50', ],
  'lnb'           => ['required', 'string', 'max:50', ],
  'id_plan'       => ['required'],
  'id_contencion' => ['required'],
  'id_satelite'   => ['required'],
  'id_status'     => ['required'],
 
        ]);
    }
}
