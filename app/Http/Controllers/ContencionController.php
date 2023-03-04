<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contencion;

class ContencionController extends Controller
{
    //
    public function index (){

        $contenciones = Contencion::all();
        //dd($contenciones);
        return view('contenciones.listar',compact('contenciones'));
    }

    public function nuevo (){
        return view('contenciones.nuevo');
    }

    public function crear(){

        $data = request()->all();

        Contencion::create([
            'des_contencion' => $data['descripcion']
        ]);

        return redirect()->route('contenciones.index');
    }

    public function detalle(Contencion $contencion){

        $contenciones = Contencion::find($contencion->id_contencion);
        //dd($contenciones);

        return view('contenciones.detalle',compact('contenciones'));
    }

    public function editar(Contencion $contencion){
        //dd($satelite);
        return view('contenciones.editar',['contencion'=>$contencion]);
    }

    public function actualizar(Contencion $contencion){

        //dd('actualizando');
        $data = request()->all();

        //dd($data);contencione

        $contencion->update($data);

        return redirect()->route('contenciones.detalle', ['contenciones' => $contencion]);
    }

    public function borrar(Contencion $contencion){

        $contencion->delete();

        return redirect()->route('contenciones.index');

    }

}
