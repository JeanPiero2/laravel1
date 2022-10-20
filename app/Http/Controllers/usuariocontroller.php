<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Alumnos;

class usuariocontroller extends Controller
{

function listar(){

    
    $alumnos = Alumno::get()
        ->join('estado','alumnos.estado_id','=','estado.id')
        ->orderBy('edad','DESC')
        ->get();
        //dd($alumnos);
        return view('listado', compact('alumnos'));
}
}
