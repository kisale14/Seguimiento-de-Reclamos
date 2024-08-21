<?php

namespace App\Http\Controllers;
use App\Models\Norma;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NormasController extends Controller
{
    public function index(){

        $normas = Norma::all();

        return view('in2', compact('normas'));
    }

    public function create(Request $request){

        $request->validate([
            'nombre' => 'required|regex:/^[a-zA-Záéíóúñ ]+$/u',
            'categoria' => 'required|regex:/^[a-zA-Záéíóúñ ]+$/u',
        ]);

        $normas = new Norma();

        $normas->nombre = $request->nombre;
        $normas->contenido = $request->contenido;
        $normas->vigencia = $request->vigencia;
        $normas->sancion = $request->sancion;
        $normas->categoria = $request->categoria;

        $normas->save();

        return redirect()->route('norma.index');

    }
        
    public function delete($id){
        $sql = DB::delete(" delete from normas where id=$id");

        return redirect()->route('norma.index');
    }
    
}
