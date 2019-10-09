<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_empleado')->unsigned();
            $table->bigInteger('id_concepto')->unsigned();
            $table->integer('cantidad');
            $table->double('importe');
            $table->double('monto');
            $table->text('observaciones');
            $table->string('soporte');
            $table->timestamps();
            $table->foreign('id_empleado')->references('id')->on('empleados')->onUpdate('cascade');
            $table->foreign('id_concepto')->references('id')->on('conceptos_empresas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
}
