<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use App\Models\Propietario;
use App\Models\PropietariosXApartamento;

use Illuminate\Http\Request;

class ApXProController extends Controller
{
    public function create($id){

        $propietarios = Propietario::all();
         
        $aptos = Apartamento::find($id);

        return view('show', compact('aptos', 'propietarios'));
    }

    public function store(Request $request){

        $propietarios = new PropietariosXApartamento();

        $propietarios->fecha = $request->fecha;
        $propietarios->residentes = $request->residentes;
        $propietarios->apartamento_id = $request->apto_id;
        $propietarios->propietario_id = $request->propietario_id;
        
        $propietarios->save();

        return redirect()->route('propietario.index');
    }
}
