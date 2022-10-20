<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\pieroxcController;
use App\Http\Controllers\oficinasController;
use App\Http\Controllers\PedidosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/Pedidos' , 
[pedidoscontroller::class, 'listar']
);

Route::get('/', function () {
    return view('welcome');
});



Route::get('/productos' , 
[Productocontroller::class, 'listar']
);

Route::get('/usuarios2' , 
[Productocontroller::class, 'listar']
);


Route::get('/piero' , 
[pieroxccontroller::class, 'listar']
);

Route::get('/oficinas' , 
[oficinasController::class, 'listar']
);

