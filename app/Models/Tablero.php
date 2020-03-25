<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tablero extends Model
{
    // indicamos el nombre de la tabla
    protected $table = 'tablero' ;

    // modificamos la clave primaria por defecto
    protected $primaryKey = 'idTab' ;

    /**
     */
    public function notas()
    {
    	return $this->hasMany('App\Models\Nota','idTab') ;
    }

}
