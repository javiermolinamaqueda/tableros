<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         *  Creamos la tabla TABLERO
         */
        Schema::create('tablero', function (Blueprint $table) 
        {
            // increments crea un campo de tipo entero, 
            // autoincremental y de clave primaria
            $table->increments('idTab') ;

            $table->string('nombre', 255) ;
            $table->timestamp('fecha') ;      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablero');
    }
}
