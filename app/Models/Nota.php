<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //
    protected $table = 'nota' ;
    protected $primaryKey = 'idNot' ;

    /**
     * Devuelve el tablero al que pertenece una determinada nota
     */
    public function tablero()
    {
    	return $this->belongsTo('App\Models\Tablero','idTab') ;
    }

}
