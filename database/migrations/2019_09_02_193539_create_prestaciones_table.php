<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_empresa')->unsigned();
            $table->integer('anio');
            $table->integer('aguinaldo');
            $table->integer('vacaciones');
            $table->integer('prima_vacacional');
            $table->double('bono');
            $table->double('vales');
            $table->integer('fondo');
            $table->timestamps();
            $table->foreign('id_empresa')->references('id')->on('empresas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestaciones');
    }
}
