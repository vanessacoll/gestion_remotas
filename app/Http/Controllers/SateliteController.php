<?php

namespace App\Http\Controllers;

use App\Models\Satelite;
use App\Models\Remota;
use App\Models\Historico_Remota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SateliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $satelites = Satelite::all()->sortBy('id_satelite');
       return view('satelites.satelites_index',compact('satelites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("satelites.satelites_create");
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

        $satelite = new Satelite($request->input());
        $satelite->des_satelite  = $request->nombre;
        $satelite->ubicacion_azi = $request->ubicacion_azi;
        $satelite->ubicacion_ele = $request->ubicacion_ele;
        $satelite->ubicacion_pol = $request->ubicacion_pol;
        $satelite->saveOrFail();
    return redirect()->route("satelites.index")->with(["message" => "Satelite registrado exitosamente"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\satelite  $satelite
     * @return \Illuminate\Http\Response
     */
    public function show(Satelite $satelite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\satelite  $satelite
     * @return \Illuminate\Http\Response
     */
    public function edit(Satelite $satelite)
    {
         return view("satelites.satelites_edit", ['satelite' => $satelite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\satelite  $satelite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Satelite $satelite)
    {
        $this->validator($request->all())->validate();

        $satelites = Satelite::find($satelite->id_satelite);
        $satelite->des_satelite  = $request->nombre;
        $satelite->ubicacion_azi = $request->ubicacion_azi;
        $satelite->ubicacion_ele = $request->ubicacion_ele;
        $satelite->ubicacion_pol = $request->ubicacion_pol;
        $satelite->saveOrFail();
        return redirect()->route("satelites.index")->with(["message" => "Satelite actualizado exitosamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\satelite  $satelite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Satelite $satelite)
    {
         
    $remotas = Remota::where('id_satelite',$satelite->id_satelite)->first();
    $hisremotas = Historico_Remota::where('id_satelite',$satelite->id_satelite)->first();
        
        if ($remotas === null && $hisremotas === null) {
  
        $satelite->delete();
         return redirect()->route("satelites.index")->with(["message" => "Satelite eliminado"]);
    
        }else{

         return redirect()->route("satelites.index")->with(["messageerror" => "El satelite seleccionado esta asociado a una remota.. Por favor Verfique."]);

        }
    }

protected function validator(array $satelite)
    {
        return Validator::make($satelite, [
  'nombre'         => ['required', 'string', 'max:100', ],
  'ubicacion_azi'  => ['required', 'string', 'max:30', ],
  'ubicacion_ele'  => ['required', 'string', 'max:30', ],
  'ubicacion_pol'  => ['required', 'string', 'max:30', ],
  
        ]);
    }

}
