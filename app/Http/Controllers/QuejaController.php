<?php

namespace App\Http\Controllers;
use App\Models\Propietario;
use App\Models\Queja;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class QuejaController extends Controller
{
    public function index(){

        $quejas = Queja::all();

        $propietarios = Propietario::where('administradore_id', '2')->get();

        return view('in3', compact('propietarios', 'quejas'));
    }

    public function create(Request $request){

        $request->validate([
            'titulo' => 'required|regex:/^[a-zA-Záéíóúñ ]+$/u',
        ]);

        $quejas = new Queja();

        $quejas->titulo = $request->titulo;
        $quejas->contenido = $request->contenido;
        $quejas->concurrencia = $request->concurrencia;
        $quejas->propietario_id = $request->gestor;

        $quejas->save();

        return redirect()->route('reclamo.index');

    }

    public function delete($id){
        $sql = DB::delete(" delete from quejas where id=$id");

        return redirect()->route('reclamo.index');
    }

}
