<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remota;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Plan;
use App\Models\Contencion;
use App\Models\Satelite;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    $clientes = Cliente::select()->get(); 
    $planes = Plan::select()->get();
    $contenciones = Contencion::select()->get();
    $satelites = Satelite::select()->get();
    $remotasactivas = Remota::where('id_status' , '5')->get();
    $remotasinactivas = Remota::where('id_status' , '2')->get();
    $remotaspreactivas = Remota::where('id_status' , '4')->get();
    $remotassuspendidas = Remota::whereIn('id_status' , [3,6])->get();

        return view('home',compact('clientes','planes','contenciones','satelites','remotasactivas','remotasinactivas','remotaspreactivas','remotassuspendidas'));
    }
}
