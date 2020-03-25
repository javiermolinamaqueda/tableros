<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaetiquetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaetiqueta', function (Blueprint $table) {
            $table->unsignedInteger('idTag') ;
            $table->unsignedInteger('idNot') ;
            $table->primary('idTag', 'idNot');
        });

    /**
    * Modificamos la tabla para indicar que el campo
    * idTab es una clave foránea.
    */
        Schema::table('notaetiqueta', function (Blueprint $table)
        {
            $table->foreign('idTag')        // crear clave foránea idTab
                ->references('idTag')     // que hace referencia a idTab
                ->on('etiqueta');           // en la tabla etiqueta

            $table->foreign('idNot')->references('idNot')->on('nota');
        }) ;
        
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notaetiqueta');
    }
}
