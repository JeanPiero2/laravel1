<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productocontroller extends Controller
{

    function listar(){
       return view("productos");
    }
}
    
