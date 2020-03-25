<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Creamos la tabla NOTA
         */
        Schema::create('nota', function (Blueprint $table) 
        {
            $table->increments('idNot');

            // Las claves foráneas debemos definirlas como
            // un campo más, pero de tipo unsignedInteger.
            $table->unsignedInteger('idTab') ;

            $table->text('texto') ;        
            $table->timestamp('fecha');
            $table->boolean('completado')->default(false) ;
        });

        /**
         * Modificamos la tabla para indicar que el campo
         * idTab es una clave foránea.
         */
        Schema::table('nota', function (Blueprint $table)
        {
            $table->foreign('idTab')        // crear clave foránea idTab
                  ->references('idTab')     // que hace referencia a idTab
                  ->on('tablero')           // en la tabla TABLERO
                  ->onDelete('cascade') ;
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota');
    }
}
