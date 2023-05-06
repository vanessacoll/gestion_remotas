<?php

namespace App\Http\Controllers;

use App\Models\Contencion;
use App\Models\Remota;
use App\Models\Historico_Remota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenciones = Contencion::all()->sortBy('id_contencion');
        return view('contenciones.contenciones_index',compact('contenciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contenciones.contenciones_create");
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

        $contencion = new Contencion($request->input());
        $contencion->des_contencion = $request->nombre;
        $contencion->saveOrFail();
    return redirect()->route("contenciones.index")->with(["message" => "Contencion registrada exitosamente",
    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contencion  $contencion
     * @return \Illuminate\Http\Response
     */
    public function show(Contencion $contencion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contencion  $contencion
     * @return \Illuminate\Http\Response
     */
    public function edit(Contencion $contencion)
    {
         
         return view("contenciones.contenciones_edit", ['contencion' => $contencion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contencion  $contencion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contencion $contencion)
    {
        $this->validator($request->all())->validate();

        $contenciones = Contencion::find($contencion->id_contencion);
        $contencion->des_contencion = $request->nombre;
        $contencion->saveOrFail();
        return redirect()->route("contenciones.index")->with(["message" => "Contencion actualizada exitosamente",
    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contencion  $contencion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contencion $contencion)
    {

    $remotas = Remota::where('id_contencion',$contencion->id_contencion)->first();
    $hisremotas = Historico_Remota::where('id_contencion',$contencion->id_contencion)->first();

        if ($remotas === null && $hisremotas === null) {
  
        $contencion->delete();
         return redirect()->route("contenciones.index")->with(["message" => "Contencion eliminada"]);
    
        }else{

         return redirect()->route("contenciones.index")->with(["messageerror" => "La contención seleccionda esta asociada a una remota.. Por favor Verfique."]);

        }
    }

    protected function validator(array $contencion)
    {
        return Validator::make($contencion, [
  'nombre'     => ['required', 'string', 'max:100', ],
      ]);
    }
}
