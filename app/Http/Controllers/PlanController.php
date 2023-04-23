<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Remota;
use App\Models\Historico_Remota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = Plan::all()->sortBy('id_plan');
        return view('planes.planes_index',compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("planes.planes_create");
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

        $plan = new Plan($request->input());
        $plan->des_plan = $request->nombre;
        $plan->saveOrFail();
    return redirect()->route("planes.index")->with(["message" => "Plan registrado exitosamente",
    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
         return view("planes.planes_edit", ['plan' => $plan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $this->validator($request->all())->validate();

        $planes = Plan::find($plan->id_plan);
        $plan->des_plan = $request->nombre;
        $plan->saveOrFail();
        return redirect()->route("planes.index")->with(["message" => "Plan actualizado exitosamente",
    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {

    $remotas = Remota::where('id_plan',$plan->id_plan)->first();
    $hisremotas = Historico_Remota::where('id_plan',$plan->id_plan)->first();
        
        if ($remotas === null && $hisremotas === null) {
  
        $plan->delete();

        return redirect()->route("planes.index")->with(["message" => "Plan eliminado exitosamente"]);
    
        }else{

         return redirect()->route("planes.index")->with(["messageerror" => "El plan seleccionado esta asociado a una remota.. Por favor Verfique."]);

        }
}



   

    protected function validator(array $plan)
    {
        return Validator::make($plan, [
  'nombre'     => ['required', 'string', 'max:100', ],
          ]);
    }
}
