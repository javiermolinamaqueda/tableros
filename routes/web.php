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


// Llamamos al método LISTAR del controlador indicado
Route::get('/',    'TableroController@listar') ;
Route::get('/ver', 'NotaController@listar')->name('ver.nota') ;
Route::get('/editarTablero', 'TableroController@editar')->name('editar.tablero');
Route::get('/actualizarTablero', 'TableroController@actualizar')->name('actualizar.tablero');


// Las dos siguientes rutas son equivalentes
//Route::view('/','main') ;
//Route::get('/', function () 
//{
//	return view('main') ;
//});


