<?php

namespace App\Http\Controllers;

use App\Models\Tablero;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    //
    public function listar(Request $req)
    {
    	// obtengo el ID del tablero
    	$idt = $req->input('id') ;

    	// busco las notas asociadas al tablero
    	$datos = Tablero::find($idt)->notas()->get() ;

    	return view('nota.main', ['info' => $datos ]) ;
    }
}
