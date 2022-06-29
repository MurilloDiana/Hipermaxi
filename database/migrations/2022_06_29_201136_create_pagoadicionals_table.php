<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagoadicionals', function (Blueprint $table) {
            $table->id('id_pagoadicional');
            $table->time('horas_extras');
            $table->float('pagoPorHoras');
            $table->date('fecha_feriado');
            $table->float('pagoFeriado');
            $table->float('pagoPorAntiguedad');
            $table->bigInteger('id_ingreso1')->unsigned();
            $table->bigInteger('id_emp')->unsigned();
            $table->timestamps();
            $table->foreign('id_ingreso1')->references('id_ingreso')->on('ingresos');
            $table->foreign('id_emp')->references('CODIGO')->on('empleados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagoadicionals');
    }
};
