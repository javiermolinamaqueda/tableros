<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    //
    protected $table = 'etiqueta' ;
    protected $primaryKey = 'idTag' ;

    /**
     * Devuelve la etiqueta al 
     */
    public function tablero()
    {
    	return $this->belongsTo('App\Models\Tablero','idTab') ;
    }

}