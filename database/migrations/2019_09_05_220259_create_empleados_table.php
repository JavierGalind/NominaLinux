<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_empresa')->unsigned();
            $table->bigInteger('id_puesto')->unsigned();
            $table->bigInteger('id_departamento')->unsigned();
            $table->string('nombre_empleado');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('email');
            $table->string('telefono');
            $table->string('sexo');
            $table->string('curp');
            $table->date('fecha_nacimiento');
            $table->string('calle');
            $table->integer('numero_interno');
            $table->integer('numero_externo');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('cp');
            $table->string('numero_cuenta');
            $table->string('clave_interbancaria');
            $table->string('banco');
            $table->string('tipo_sueldo');
            $table->string('forma_pago');
            $table->double('salario_diario');
            $table->string('rfc');
            $table->string('imss');
            $table->string('afore');
            $table->string('infonabit');
            $table->text('alergias');
            $table->string('tipo_sangre');
            $table->string('nombre_contacto');
            $table->string('numero_contacto');
            $table->string('estado_civil');
            $table->string('contrato');
            $table->timestamps();
            $table->foreign('id_empresa')->references('id')->on('empresas')->onUpdate('cascade');
            $table->foreign('id_puesto')->references('id')->on('jobs')->onUpdate('cascade');
            $table->foreign('id_departamento')->references('id')->on('departamentos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
