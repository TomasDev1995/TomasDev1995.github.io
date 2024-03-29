<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('almacen/categoria', 'App\Http\Controllers\CategoriaController');
Route::resource('almacen/articulo', 'App\Http\Controllers\ArticuloController');
Route::resource('ventas/cliente', 'App\Http\Controllers\ClienteController');
Route::resource('compras/proveedor', 'App\Http\Controllers\ProveedorController');
Route::resource('compras/ingreso', 'App\Http\Controllers\IngresoController');


