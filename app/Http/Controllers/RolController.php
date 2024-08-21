<?php

namespace App\Http\Controllers;

use App\Models\Administradore;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(){

        $roles = Administradore::all();

        return view('in1', compact('roles'));
    }
}
