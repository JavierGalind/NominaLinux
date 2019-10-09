<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->string('nombre_empresa');
            $table->string('rfc');
            $table->string('registro_estado');
            $table->string('telefono');
            $table->string('status');
            $table->string('registro_patronal');
            $table->string('razon_social');
            $table->string('representante_laboral');
            $table->string('rfc_representante');
            $table->string('direccion');
            $table->integer('numero_interno')->nullable();
            $table->integer('numero_externo');
            $table->string('colonia');
            $table->string('estado');
            $table->string('cp');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
