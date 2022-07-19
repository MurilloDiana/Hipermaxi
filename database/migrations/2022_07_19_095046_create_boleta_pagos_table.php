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
        Schema::create('boleta_pagos', function (Blueprint $table) {
            $table->id('IDboleta_pago');
            $table->dateTime('fecha_emision');
            $table->dateTime('fecha_recibido');
            $table->bigInteger('dias_trabajados');
            $table->float('monto_pagoAdic');
            $table->float('monto_desc');
            $table->float('monto_total');
            $table->unsignedBigInteger('id_pagoadicional');
            $table->unsignedBigInteger('id_emp');
            $table->unsignedBigInteger('id_descuent');    
            $table->foreign('id_pagoadicional')->references('id_pago')->on('pagoadicionals');
            $table->foreign('id_emp')->references('CODIGO')->on('empleados');
            $table->foreign('id_descuent')->references('id_descuento')->on('descuentos');
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
        Schema::dropIfExists('boleta_pagos');
    }
};