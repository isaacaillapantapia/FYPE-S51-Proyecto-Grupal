<?php

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


/*
Route::get('/bodega/{sucursal?}', function($sucursal="producto"){
    return view('bodega',array(
        "sucursal" => $sucursal
    ));
});*/


Route::get('/bodega/{sucursal?}/{direccion?}', function($sucursal="Mi Bodega", $direccion="Stgo Centro"){
    return view('bodega')
    ->with('sucursal',$sucursal);
});



