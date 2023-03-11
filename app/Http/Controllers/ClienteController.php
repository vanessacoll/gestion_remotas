<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Status;
use App\Models\Tip_cliente;
use App\Models\Remota;
use App\Models\Historico_Remota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view("clientes.clientes_index");
    }

    /**
     * Display a listing of the resource.
     * Busqueda
     * @return \Illuminate\Http\Response
     */

    public function search(){
         
        $clientes = Cliente::all() ->sortBy('id_cliente');
        $statuss = Status::select()->get(); 
        $tip_clientes = Tip_cliente::select()->get(); 
        return view('clientes.clientes_search',compact('clientes','statuss','tip_clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuss = Status::where('id_status', '<', '4')->get(); 
        $tip_clientes = Tip_cliente::select()->get(); 
        return view("clientes.clientes_create",compact('statuss','tip_clientes'));
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

        $cliente = new Cliente($request->input());
        $cliente->cedula    = $request->cedula;
        $cliente->nombres   = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->telefono  = $request->telefono;
        $cliente->email     = $request->email;
        $cliente->id_status = $request->id_status;
        $cliente->id_tipcli = $request->id_tipcli;
        $cliente->saveOrFail();

    return redirect()->route("clientes.index")->with(["message" => "Cliente registrado exitosamente"]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        $statuss = Status::where('id_status', '<', '4')->get();
        $tip_clientes = Tip_cliente::select()->get(); 
        return view("clientes.clientes_edit", ['cliente' => $cliente],compact('statuss','tip_clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $this->validator($request->all())->validate();

        $cliente->nombres   = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->telefono  = $request->telefono;
        $cliente->email     = $request->email;
        $cliente->id_status = $request->id_status;
        $cliente->id_tipcli = $request->id_tipcli;
        $cliente->saveOrFail();
    return redirect()->route("clientes.search")->with(["message" => "Cliente actualizado exitosamente",
    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        
       $remotas = Remota::where('id_cliente',$cliente->id_cliente)->first();
       $hisremotas = Historico_Remota::where('id_cliente',$cliente->id_cliente)->first();
        
        if ($remotas === null && $hisremotas === null) {
  
        $cliente->delete();
        return redirect()->route("clientes.search")->with(["message" => "cliente eliminado"]);
    
        }else{

         return redirect()->route("clientes.search")->with(["messageerror" => "El cliente seleccionado esta asociado a una remota.. Por favor Verfique."]);

        }
     }


       protected function validator(array $cliente)
    {
        return Validator::make($cliente, [
  'cedula'     => ['string', 'max:12', 'unique:clientes'],
  'nombre'     => ['required', 'string', 'max:100', ],
  'direccion'  => ['required', 'string', 'max:200', ],
  'telefono'   => ['required' ],
  'email'      => ['required', 'string', 'email', 'max:200', ],
  'id_status'  => ['required'],
  'id_tipcli'  => ['required'],
        ]);
    }
}
