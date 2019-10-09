<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptosEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conceptos_empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_conceptosat')->unsigned();  
            $table->string('nombre');
            $table->integer('cantidad');
            $table->string('formula');
            $table->double('importe');
            $table->string('isr');
            $table->string('imss');
            $table->string('erogacion_estado');
            $table->string('codificacion_contable');
            $table->string('tipo');
            $table->timestamps();
            $table->foreign('id_conceptosat')->references('id')->on('conceptsats')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conceptos_empresas');
    }
}
