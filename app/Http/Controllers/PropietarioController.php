<?php

namespace App\Http\Controllers;
use App\Models\Administradore;
use App\Models\Apartamento;
use App\Models\Propietario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index(){
        $roles = Administradore::all();

        $apartamentos = Apartamento::all();

        $propietario = Propietario::all();

        return view('in1', compact('roles', 'apartamentos', 'propietario'));
    }

    public function create(Request $request){

        $request->validate([
            'nombre' => 'required|regex:/^[a-zA-Záéíóúñ ]+$/u',
            'apellido' => 'required|regex:/^[a-zA-Záéíóúñ ]+$/u',
            'cedula' => 'required|numeric|min_digits:6|max_digits:8',
        ]);

        $propietario = new Propietario();

        $propietario->nombre = $request->nombre;
        $propietario->apellido = $request->apellido;
        $propietario->cedula = $request->cedula;
        $propietario->nacimiento = $request->nacimiento;
        $propietario->administradore_id = $request->administradore_id;

        $propietario->save();

        return redirect()->route('propietario.index');
    }

    public function eliminar($id){
        $sql = DB::delete(" delete from propietarios where id=$id");

        return redirect()->route('propietario.index');
    }
}
