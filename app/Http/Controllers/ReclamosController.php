<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use App\Models\Queja;
use App\Models\QuejaXPropietario;
use Illuminate\Http\Request;

class ReclamosController extends Controller
{
    public function index(){

        $propietarios = Propietario::all();

        $quejas = Queja::all();

        $reclamos = QuejaXPropietario::all();
 
        return view('in4', compact('propietarios', 'quejas', 'reclamos'));
    }

    public function createa(Request $request){

        $quejas = new QuejaXPropietario();

        $quejas->fecha = $request->fecha;
        $quejas->queja_id = $request->queja_id;
        $quejas->propietario_id = $request->propietario_id;

        $quejas->save();

        return redirect()->route('quejas.index');

    }

    
    
}
