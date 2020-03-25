<?php

namespace App\Http\Controllers;

use App\Models\Tablero;
use Illuminate\Http\Request;

class TableroController extends Controller
{
    /**
     * Obtiene información del modelo sobre los
     * tableros y se los pasa a la vista
     */
    public function listar()
    {
    	// Solicitamos al modelo todos los tableros
    	$datos = Tablero::all() ;

    	//
    	return view('tablero.main', ['info' => $datos]) ;
    }

    /**
     * obtiene informacion del modelo 
     */
    public function editar(request $req){

        //Obtengo el id del tablero
        $id = $req->input('id');

        //busco el tablero
        $tab = Tablero::find($id);

        //
        return view('tablero.editar', ['dat' => $tab]);
    }

    /**
     * obtiene la informacion del tablero y la actualiza
     */

     public function actualizar(request $req){
        //Obtengo el id del tablero
        $id = $req->input('id');

        //busco el tablero
        $tab = Tablero::find($id);

        $tab->nombre = $req->input('nombre');
        $tab->fecha = $req->input('fecha');


        $tab->save();

        listar();
     }
}
